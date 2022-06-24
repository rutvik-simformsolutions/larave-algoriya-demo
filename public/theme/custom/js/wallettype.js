$(function () {
    /**
     * [wallettype Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[name='wallettype_form']").validate({
        rules: {
            wallettypename: {
                required: true,
                minlength: 1,
                maxlength: 20,

            },
        },
        messages: {
            wallettypename: {
                required: "wallettype Name is required.",
                minlength: "Please enter wallettype name value greater than or equal to 1.",
                maxlength: "Please enter a wallettype name less than or equal to 20.",
            },
        },
        submitHandler: function (form) {
            form.submit();
            $("#wallettype_submit").attr("disabled", true);
        }
    });
});
