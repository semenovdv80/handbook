$(function () {

    $('.accordion > a').click(function (e) {
        e.preventDefault();
        var $ul = $(this).siblings('ul');
        if ($ul.is(':visible')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
        $ul.slideToggle();
    });

    $('.accordion li.active:first').parents('ul').slideDown();

    //highlight current / active link
    $('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).addClass('active');
    });

    $('.btn-delete').on('click', function () {
        let route = $(this).data('route');
        $('#form-delete').attr('action', route);
        $('#modal-delete').modal('show');
    });
});
