$(document).ready(function () {
    $('#sign-in-btn').on('click', function () {
        var clickedBtn = $(this);
        changeColors(clickedBtn);

        $('#registration-form').fadeOut(150, function () {
            $('#login-form').fadeIn(150);
        });
    });

    $('#sign-up-btn').on('click', function () {
        var clickedBtn = $(this);
        changeColors(clickedBtn);

        $('#login-form').fadeOut(150, function () {
            $('#registration-form').fadeIn(150);
        });
    });

    function changeColors(clickedBtn) {
        $('.form-button').css({
            'background-color': '#fff',
            'color': '#000'
        });

        $(clickedBtn).css({
            'background-color': '#000',
            'color': '#fff'
        });
    }
});