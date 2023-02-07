
$(function () {

    $(window).bind('scroll', function () {
        var gap = 50;
        if ($(window).scrollTop() > gap) {
            $('#myNavBar').addClass('myStickyNav')
            $('#ywLogo').removeClass('ywLogo')
            $('#ywLogo').addClass('ywLogo-sm')
            $('.searchBar').hide()
            $('.socialLinks').hide()
        } else {
            $('#myNavBar').removeClass('myStickyNav')
            $('#ywLogo').addClass('ywLogo')
            $('#ywLogo').removeClass('ywLogo-sm')
            $('.searchBar').show()
            $('.socialLinks').show()
        }
    })
})
