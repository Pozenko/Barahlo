$(document).ready(function()
{
    //phone input mask
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
    $("form[name='registration'], form[name='account']").validate({

        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password1: {
                required: true,
                minlength: 6
            },
            password2: {
                equalTo: "#password1"
            },
            city: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            name: "Пожалуйста укажите имя.",
            password1: {
                required: "Пожалуйста укажите пароль.",
                minlength: "Ваш пароль должен содержать минимум 6 символов."
            },
            password2: {
                equalTo: "Пароли не совпадают. Введите пароль еще раз."
            },
            email: {
                required: "Пожалуйста укажите Email.",
                email: "Пожалуйста укажите корректный email."
            },
            city: "Пожалуйста выберите город."
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // signin form rules
    $("form[name='signin']").validate({

        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        // Specify validation error messages
        messages: {
            password: {
                required: "Пожалуйста укажите пароль.",
                minlength: "Ваш пароль должен содержать минимум 6 символов."
            },
            email: {
                required: "Пожалуйста укажите email",
                email: "Пожалуйста укажите корректный email"
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // message form rules
    $("form[name='messageForm']").validate({

        rules: {
            message: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            message: {
                required: "Сообщение не может быть пустым."
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // comment form rules
    $("form[name='commentForm']").validate({

        rules: {
            comment: {
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            comment: {
                required: "Комментарий не может быть пустым."
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    // create form rules
    $("form[name='create']").validate({

        rules: {
            title: {
                required: true
            },
            description:{
                required: true
            },
            sellingOptions:{
                required: true
            }
        },
        // Specify validation error messages
        messages: {
            title: {
                required: "Заголовок не может быть пустым."
            },
            description: {
                required: "Пожалуйста добавте описание."
            },
            sellingOptions:{
                required: "Пожалуйста выберите тип сделки."
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

});

