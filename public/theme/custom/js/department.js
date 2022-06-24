$(function () {

    /**
     * [department Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[name='department_form']").validate({
        rules: {
            departmentname: {
                required: true,
                minlength: 1,
                maxlength: 50,

            },
        },
        messages: {
            departmentname: {
                required: "Department Name is required.",
                minlength: "Please enter department name value greater than or equal to 1.",
                maxlength: "Please enter a department name less than or equal to 20.",
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#department_submit").attr("disabled", true);
        }
    });


    $("form[name='skill_form']").validate({
        rules: {
            skillname: {
                required: true,
                minlength: 1,
                maxlength: 50,

            },
        },
        messages: {
            skillname: {
                required: "Skill Name is required.",
                minlength: "Please enter department name value greater than or equal to 1.",
                maxlength: "Please enter a department name less than or equal to 20.",
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#department_submit").attr("disabled", true);
        }
    });
});
