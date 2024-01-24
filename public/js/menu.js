// Menu

$('#home').hide();
$('.menu-content').hide();
$('#home').show();
$('#menu a:first').addClass('op-selected');

$('#menu a').on('click', function (e) {
    e.preventDefault();
    let content = $(this).data('option');
    $('.menu-content').hide();
    $('#' + content).show();
    $('#menu a').removeClass('op-selected');
    $('.menu-' + content).addClass('op-selected');

    $('html, body').animate({
        scrollTop: $('body').offset().top
    }, 500);
});

$('#btn-menu-show').on('click', function () {
    $('#menu').css('left', '0');
});

$('#btn-menu-hide').on('click', function () {
    $('#menu').css('left', '-240px');
});

$(document).on('click', function (e) {
    if (!$(e.target).closest('#menu').length && !$(e.target).closest('#btn-menu-show').length) {
        $('#menu').css('left', '-240px');
    }
});
