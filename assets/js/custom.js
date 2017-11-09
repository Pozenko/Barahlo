$(document).ready(function () {
    //Home page
    // hide show filters
    $('#filter_btn').on('click', function () {
        $('#filter_form').toggle('fast');
        $('#btn_caret').toggleClass('fa-angle-down fa-angle-up');
    });

    $('#accNameBtn').on('click', function () {
        $('#inputName').prop('disabled', false);
    });
    $('#accEmailBtn').on('click', function () {
        $('#inputEmail').prop('disabled', false);
    });
    $('#accPasswordBtn').on('click', function () {
        $('#inputPassword, #inputPassword2').prop('disabled', false);
    });
    $('#accPhoneBtn').on('click', function () {
        $('#inputPhone').prop('disabled', false);
    });
    $('#accCityBtn').on('click', function () {
        $('#selectCity').prop('disabled', false);
    });
});
