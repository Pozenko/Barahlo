$(document).ready(function () {
    //Home page
    // hide show filters
    $('#filter_btn').on('click', function () {
        $('#filter_form').toggle('fast');
        $('#btn_caret').toggleClass('fa-angle-down fa-angle-up');
    })
});
