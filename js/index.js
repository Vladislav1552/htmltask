$(window).resize(function () {
    var widthBrother = $(document).width()
    if (widthBrother => '1007') {
        $('.navigation--Burger').css({ 'display': 'none' });
    }
});
$(document).ready(function () {
    let i = 0
    $('.logo__menu').click(function () {
        i++
        if (i == 1) {
            $('.navigation--Burger').css({ 'display': 'flex' });

        } else {
            $('.navigation--Burger').css({ 'display': 'none' });
            i = 0
        }
    })
})


