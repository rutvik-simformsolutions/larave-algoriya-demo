$(function() {
    /**
     * [leadsource Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[name='leadsource_form']").validate({
        rules: {
            leadsourcename: {
                required: true,
                minlength: 1,
                maxlength: 25,

            },
        },
        messages: {
            leadsourcename: {
                required: "leadsource Name is required.",
                minlength: "Please enter leadsource name value greater than or equal to 1.",
                maxlength: "Please enter a leadsource name less than or equal to 20.",
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#leadsource_submit").attr("disabled", true);
        }
    });
});