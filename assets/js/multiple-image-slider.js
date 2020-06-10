$('.multi-image-slider').carousel({

    interval: 40000

});

$('.multi-image-slider .item').each(function () {

    var next = $(this).next();

    if (!next.length) {

        next = $(this).siblings(':first');

    }

    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i <4; i++) {

        next = next.next();

        if (!next.length) {

            next = $(this).siblings(':first');

        }

        next.children(':first-child').clone().appendTo($(this));

    }

});

    //Al pasar sobre .gepic animamos la imágen dando un tamaño menor y mostramos el div .negro
    $('.multi-image-slider .item').mouseenter(function(e) {
        $(this).children('a').children('img').animate({ height: '240', left: '0', top: '0', width: '310'}, 150);
        $(this).children('a').children('div').fadeIn(500);
    $(this).children('a').children('.negro').css({ "padding-top": "500px" , "opacity" : 1 });
    }).mouseleave(function(e) {
        $(this).children('a').children('img').animate({ height: '280', left: '-20', top: '-20', width: '350'}, 150);
        $(this).children('a').children('div').fadeOut(150);
    $(this).children('a').children('.negro').css({ "padding-top": "500px" , "opacity" : 0 });
    }); 
