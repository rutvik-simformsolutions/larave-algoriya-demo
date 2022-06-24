$(function () {
    /**
     * [status Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[name='status_form']").validate({
        rules: {
            statusname: {
                required: true,
                minlength: 1,
                maxlength: 20,

            },
            type: {
                required: true,

            },
        },
        messages: {
            statusname: {
                required: "status Name is required.",
                minlength: "Please enter status name value greater than or equal to 1.",
                maxlength: "Please enter a status name less than or equal to 20.",
            },
            type: {
                required: "Please Select Type",

            },
        },
        submitHandler: function (form) {
            form.submit();
            $("#status_submit").attr("disabled", true);
        }
    });
});
