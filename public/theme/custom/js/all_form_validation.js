$(function() {
    /**
     *  Company Form
     */
    var hiddenurl = $('#hiddenURL').val();

    /**
     * [skill add validation]
     *
     * @param   {[type]}  #skill_form  [#skill_form description]
     *
     * @return  {[type]}               [return description]
     */
    $("#skill_form").validate({
        errorPlacement: function(error, element) {
            // Input with icons and Select2
            if (element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        focusInvalid: false,
        invalidHandler: function(form, validator) {
            if (!validator.numberOfInvalids())
                return;
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 1000);
        },
        rules: {
            skill_name: 'required',
            skill_desc: {
                required: true,
                maxlength: 150,
            },
            department: 'required'
        },
        messages: {
            skill_name : 'The Skill Name field is Required',
            skill_desc: {
                required: 'The Skill Description field is required',
            },
            department : 'The Department field is required'

        },
        submitHandler: function(form) {
            form.submit();
            $("#skill_submit").attr("disabled", true);
        }
    });
})