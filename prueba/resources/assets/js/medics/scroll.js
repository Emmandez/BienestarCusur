'use strict';

var selector = $('.headerMedics').find('h2');
selector.on('click', function(){
    selector.removeClass('selected');
    $(this).addClass('selected');

    var link = $(this).attr('href');

    var views = $('#myCarousel').find('div');
    var display = $('#myCarousel').find(link);
    var numData = display.attr('data-number');

    views.removeClass('active');
    display.addClass('active');

    var indicado = $('.carousel-indicators').find('.active');
    indicado.removeClass('active');
});

$('#left , #right').each(function(){
    $(this).click(function(){
        var hf = $('#heredoFamiliar');
        var pat = $('#patologicas');

        if(hf.hasClass('active')){
            selector.removeClass('selected');
            $('#hf').addClass('selected');
        }
        if(pat.hasClass('active')){
            selector.removeClass('selected');
            $('#pat').addClass('selected');
        }
    });
});
