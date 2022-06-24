$(function(){
    var hiddenUrl = $('#hiddenUrl').val();

    $('#signup_form').validate({
        rules: {
            fname: {
                required: true,
                minlength: 1,
                maxlength: 20
            },
            lname: {
                required: true,
                minlength: 1,
                maxlength: 20
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            pass: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            confirm_pass: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo: '#password'
            }
        },
        messages: {
            fname: {
                required: "Please Enter First Name",
                minlength: "UserName must be at least 1 characters long",
                maxlength: "UserName not more than 20 characters long"
            },
            lname: {
                required: "Please Enter Last Name",
                minlength: "UserName must be at least 1 characters long",
                maxlength: "UserName not more than 20 characters long"
            },
            email: {
                required: "Please Enter Email Id"
            },
            phone: {
                required: "Please Enter Phone Number",
                number: "Please Enter Number Only",
                minlength: "Phone Number must be at 10 Digits long",
                maxlength: "Phone Number not more than 10 Digits long"
            },
            pass: {
                required: "Please Enter Password",
                minlength: "Password must be at least 6 characters long",
                maxlength: "Password not more than 20 characters long"
            },
            confirm_pass: {
                required: "Please Enter Confirm Password",
                minlength: "Password must be at least 6 characters long",
                maxlength: "Password not more than 20 characters long",
                equalTo: "Password Not mach!"
            }
        },
        submitHandler: function(form) {
          form.submit();
          $("#signupbtn").attr("disabled", true);
        }
    });

    $('#login_form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Please Enter Email Id"
            },
            pass: {
                required: "Please Enter Password"
            }
        },
        submitHandler: function(form) {
          form.submit();
          $("#loginbtn").attr("disabled", true);
        }
    });

    $('.Numberphone').keypress(function(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode >= 48 && (charCode <= 57)) {
            return true;
        }
        return false;
    });
});

