/*
 *  Document   : login.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Login page
 */

var Login = function() {

    // Function for switching form views (login, reminder and register forms)
    var switchView = function(viewHide, viewShow, viewHash){
        viewHide.slideUp(250);
        viewShow.slideDown(250, function(){
            $('input').placeholder();
        });

        if ( viewHash ) {
            window.location = '#' + viewHash;
        } else {
            window.location = '#';
        }
    };

    return {
        init: function() {
            /* Switch Login, Reminder and Register form views */
            var formLogin       = $('#formLogin');


            // If the link includes the hashtag 'register', show the register form instead of login


            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Login form - Initialize Validation */
            $('#formLogin').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {

                },
                success: function(e) {

                },
                rules: {
                    'name': {
                        required: true,
                        email: true
                    },
                    'password': {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    'name': 'Please enter your account\'s email',
                    'password': {
                        required: 'Please provide your password',
                        minlength: 'Your password must be at least 5 characters long'
                    }
                }
            });

        }
    };
}();