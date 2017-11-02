$(document).ready(function()
{
    $("#inputPhone").mask("+99999 999 99 99");
    // set Bootstrap classes default
    $.validator.setDefaults({
        highlight: function(element) {
            jQuery(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'label label-danger',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    // registration form rules
    $("form[name='registration']").validate({

        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password2: {
                equalTo: "#password"
            },
            city: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            name: "Пожалуйста введите ваше имя.",
            password: {
                required: "Пожалуйста укажите пароль.",
                minlength: "Ваш пароль должен содержать минимум 6 символов."
            },
            password2: {
                equalTo: "Пароли не совпадают. Введите пароль еще раз."
            },
            email: "Пожалуйста укажите корректный email",
            city: "Пожалуйста выберите город"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});

