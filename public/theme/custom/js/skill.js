$(function() {
    /**
     * [skill Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[name='skill_form']").validate({
        rules: {
            skillname: {
                required: true,
                minlength: 1,
                maxlength: 20,

            },
            description: {
                required: true,
                minlength: 1,
                maxlength: 50,

            },
            departmentname: {
                required: true

            },
        },
        messages: {
            skillname: {
                required: "skill Name is required.",
                minlength: "Please enter skill name value greater than or equal to 1.",
                maxlength: "Please enter a skill name less than or equal to 20.",
            },
            description: {
                required: "Description is required.",
                minlength: "Please enter Description value greater than or equal to 1.",
                maxlength: "Please enter a Description less than or equal to 100.",
            },
            departmentname: {
                required: "Department Name is required."
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#department_submit").attr("disabled", true);
        }
    });
});