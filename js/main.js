var toggleMenu = setInterval(function () {
    $('.fa-arrow-left').on('click', function(){
        $(this).removeClass('fa-arrow-left').addClass('fa-arrow-right');
        $('.leftNav').removeClass('slideInLeft').removeClass('col-sm-2').addClass('hidden');
        $('.main').removeClass('col-sm-10').addClass('col-sm-12').removeClass('mainArea');
    })

    $('.fa-arrow-right').on('click', function(){
        $(this).removeClass('fa-arrow-right').addClass('fa-arrow-left');
        $('.leftNav').addClass('slideInLeft').removeClass('hidden').addClass('col-sm-2');
        $('.main').removeClass('col-sm-12').addClass('col-sm-10').addClass('mainArea');
    })
}, 60/1000);
