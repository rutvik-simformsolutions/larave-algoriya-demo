$(function() {
    /**
     * [Email validation]
     *
     * @param   {[email]}  email   [check email valid or not]
     *
     * @return  {[string]}
     */
    $.validator.addMethod("IsEmail", function(email) {
        var regex =
            /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        return regex.test(email);
    });

    /**
     * [Company Form validation]
     *
     * @param   {[form name,input name]}
     *
     * @return  {[string]}
     */
    $("form[id='add_company']").validate({
        rules: {
            companyname: {
                required: true,
                minlength: 1,
                maxlength: 50,

            },
            companyemail: {
                required: true,
                minlength: 1,
                maxlength: 100,
                IsEmail: true,
            },
            phone: {
                required: true,
                minlength: 8,
                maxlength: 15,
            },
            address1: {
                required: true,
                minlength: 1,
                maxlength: 100,
            },
            address2: {
                required: true,
                minlength: 1,
                maxlength: 100,
            },
            city: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            state: {
                required: true,
                maxlength: 20,
                minlength: 1,
            },
            pincode: {
                required: true,
                minlength: 1,
                maxlength: 8,
            },
            country: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            adminfirstname: {
                required: true,
                minlength: 1,
                maxlength: 50,
            },
            adminlastname: {
                required: true,
                minlength: 1,
                maxlength: 50,
            },
            admintemail: {
                required: true,
                minlength: 1,
                maxlength: 100,
                IsEmail: true
            },
            adminpassword: {
                required: true,
                minlength: 6,
                maxlength: 20,
            },
        },
        messages: {
            companyname: {
                required: "Company Name is required.",
                minlength: "Please enter company name value greater than or equal to 1.",
                maxlength: "Please enter a company name less than or equal to 20.",
            },
            companyemail: {
                required: "Company Email is required.",
                minlength: "Please enter Email value greater than or equal to 1.",
                maxlength: "Please enter a Email less than or equal to 50.",
                IsEmail: "	",
            },
            phone: {
                required: "Mobile No. is required.",
                minlength: "Please enter Phone value greater than or equal to 10.",
                maxlength: "Please enter a Phone less than or equal to 15.",
            },
            address1: {
                required: "Address1 is required.",
                minlength: "Please enter address1 value greater than or equal to 1.",
                maxlength: "Please enter a address1 less than or equal to 50.",
            },
            address2: {
                required: "Address2 is required.",
                minlength: "Please enter address2 value greater than or equal to 1.",
                maxlength: "Please enter a address2 less than or equal to 50.",
            },
            city: {
                required: "City is required.",
                minlength: "Please enter city value greater than or equal to 1.",
                maxlength: "Please enter a city less than or equal to 20.",
            },
            state: {
                required: "State is required.",
                minlength: "Please enter state value greater than or equal to 1.",
                maxlength: "Please enter a state less than or equal to 20.",
            },
            pincode: {
                required: "Pincode is required.",
                minlength: "Please enter pincode value greater than or equal to 1.",
                maxlength: "Please enter a pincode less than or equal to 8.",
            },
            country: {
                required: "Country is required.",
                minlength: "Please enter country value greater than or equal to 1.",
                maxlength: "Please enter a country less than or equal to 20.",
            },
            adminfirstname: {
                required: "Firstname is required.",
                minlength: "Please enter first name value greater than or equal to 1.",
                maxlength: "Please enter a first name less than or equal to 20.",
            },
            adminlastname: {
                required: "lastname is required.",
                minlength: "Please enter last name value greater than or equal to 1.",
                maxlength: "Please enter a last name less than or equal to 20.",
            },
            admintemail: {
                required: "Email is required.",
                minlength: "Please enter Email value greater than or equal to 1.",
                maxlength: "Please enter a Email less than or equal to 50.",
                IsEmail: "Please enter a valid Email",
            },
            adminpassword: {
                required: "Password is required.",
                minlength: "Please enter a Password value greater than or equal to 6.",
                maxlength: "Please enter a a Password less than or equal to 20.",
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#company_submit").attr("disabled", true);
        }
    });
    $("form[id='edit_company']").validate({
        rules: {
            companyname: {
                required: true,
                minlength: 1,
                maxlength: 50,

            },
            companyemail: {
                required: true,
                minlength: 1,
                maxlength: 100,
                IsEmail: true,
            },
            phone: {
                required: true,
                minlength: 8,
                maxlength: 15,
            },
            address1: {
                required: true,
                minlength: 1,
                maxlength: 100,
            },
            address2: {
                required: true,
                minlength: 1,
                maxlength: 100,
            },
            city: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            state: {
                required: true,
                maxlength: 20,
                minlength: 1,
            },
            pincode: {
                required: true,
                minlength: 1,
                maxlength: 8,
            },
            country: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            adminfirstname: {
                required: true,
                minlength: 1,
                maxlength: 20,
            },
            adminlastname: {
                required: true,
                minlength: 1,
                maxlength: 50,
            },
            admintemail: {
                required: true,
                minlength: 1,
                maxlength: 100,
                IsEmail: true
            },
            adminpassword: {
                minlength: 6,
                maxlength: 20,
            },
        },
        messages: {
            companyname: {
                required: "Company Name is required.",
                minlength: "Please enter company name value greater than or equal to 1.",
                maxlength: "Please enter a company name less than or equal to 20.",
            },
            companyemail: {
                required: "Company Email is required.",
                minlength: "Please enter Email value greater than or equal to 1.",
                maxlength: "Please enter a Email less than or equal to 50.",
                IsEmail: "	",
            },
            phone: {
                required: "Mobile No. is required.",
                minlength: "Please enter Phone value greater than or equal to 10.",
                maxlength: "Please enter a Phone less than or equal to 15.",
            },
            address1: {
                required: "Address1 is required.",
                minlength: "Please enter address1 value greater than or equal to 1.",
                maxlength: "Please enter a address1 less than or equal to 50.",
            },
            address2: {
                required: "Address2 is required.",
                minlength: "Please enter address2 value greater than or equal to 1.",
                maxlength: "Please enter a address2 less than or equal to 50.",
            },
            city: {
                required: "City is required.",
                minlength: "Please enter city value greater than or equal to 1.",
                maxlength: "Please enter a city less than or equal to 20.",
            },
            state: {
                required: "State is required.",
                minlength: "Please enter state value greater than or equal to 1.",
                maxlength: "Please enter a state less than or equal to 20.",
            },
            pincode: {
                required: "Pincode is required.",
                minlength: "Please enter pincode value greater than or equal to 1.",
                maxlength: "Please enter a pincode less than or equal to 8.",
            },
            country: {
                required: "Country is required.",
                minlength: "Please enter country value greater than or equal to 1.",
                maxlength: "Please enter a country less than or equal to 20.",
            },
            adminfirstname: {
                required: "Firstname is required.",
                minlength: "Please enter first name value greater than or equal to 1.",
                maxlength: "Please enter a first name less than or equal to 20.",
            },
            adminlastname: {
                required: "lastname is required.",
                minlength: "Please enter last name value greater than or equal to 1.",
                maxlength: "Please enter a last name less than or equal to 20.",
            },
            admintemail: {
                required: "Email is required.",
                minlength: "Please enter Email value greater than or equal to 1.",
                maxlength: "Please enter a Email less than or equal to 50.",
                IsEmail: "Please enter a valid Email",
            },
            adminpassword: {
                minlength: "Please enter a Password value greater than or equal to 6.",
                maxlength: "Please enter a a Password less than or equal to 20.",
            },
        },
        submitHandler: function(form) {
            form.submit();
            $("#company_submit").attr("disabled", true);
        }
    });
    /**
     * [password id="eye" click]
     *
     * @param   {class[add][remove]}  [if hasclass fa-eye-slash show password then hasclass fa-eye then hide password]
     * @param   {attr[type]}  [get attribute]
     *
     * @return  {[string]}
     */
    $('#eye').click(function() {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#password').attr('type', 'text');

        } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password').attr('type', 'password');
        }
    });
});