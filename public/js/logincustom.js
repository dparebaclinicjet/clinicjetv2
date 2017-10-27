var Login = function() {

    var handleLogin = function() {

        $.validator.setDefaults({
            errorClass: 'help-block',
            focusInvalid: true,
            highlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .addClass('has-error');
            },
            unhighlight: function(element) {
                $(element)
                    .closest('.form-group')
                    .removeClass('has-error');
            }
        });

        $('.login-form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "*Please enter your registered email id <br>Not yet registered? <a href='#'>Register here</a>",
                    email: "*Please enter a <em>valid</em> email address <br>Not yet registered? <a href='#'>Register here</a>"
                },
                password: {
                    required: "*Please enter your password <br>Forgotten Password? <a href='/password/reset'>Reset here</a>"
                }
            }
        });

        $('.forget-form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "*Please enter your registered email id <br>Not yet registered? <a href='#'>Register here</a>",
                    email: "*Please enter a <em>valid</em> email address <br>Not yet registered? <a href='#'>Register here</a>"
                }
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });
    }


    return {
        //main function to initiate the module
        init: function() {

            handleLogin();

            // init background slide images
            $('.login-bg').backstretch([
                "../assets/pages/img/login/bg1.jpg",
                "../assets/pages/img/login/bg2.jpg",
                "../assets/pages/img/login/bg3.jpg"
            ], {
                fade: 1000,
                duration: 8000
            });

        }

    };

}();

jQuery(document).ready(function() {
    $('#email').focus();
    Login.init();
});