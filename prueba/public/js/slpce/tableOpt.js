'use strict';

$('.tr').animate({
    'height': 'hide'
}, 0);

var btn1 = $('.bot1');
var aux1 = 0;
var btn2 = $('.bot2');
var aux2 = 0;
var btn3 = $('.bot3');
var aux3 = 0;
var btn4 = $('.bot4');
var aux4 = 0;
var btn5 = $('.bot5');
var aux5 = 0;

//mostrar y ocultar pregunta 1-15
btn1.on('click', function () {
    if (aux1 == 0) {
        $('.oneButt').animate({
            'height': 'show'
        }, 0);
        aux1 = 1;
    } else if (aux1 == 1) {
        $('.oneButt').animate({
            'height': 'hide'
        }, 0);
        aux1 = 0;
    }
});

//mostrar y ocultar pregunta 16-30
btn2.on('click', function () {
    if (aux2 == 0) {
        $('.twoButt').animate({
            'height': 'show'
        }, 0);
        aux2 = 1;
    } else if (aux2 == 1) {
        $('.twoButt').animate({
            'height': 'hide'
        }, 0);
        aux2 = 0;
    }
});

//mostrar y ocultar pregunta 31-45
btn3.on('click', function () {
    if (aux3 == 0) {
        $('.threeButt').animate({
            'height': 'show'
        }, 0);
        aux3 = 1;
    } else if (aux3 == 1) {
        $('.threeButt').animate({
            'height': 'hide'
        }, 0);
        aux3 = 0;
    }
});

//mostrar y ocultar pregunta 46-60
btn4.on('click', function () {
    if (aux4 == 0) {
        $('.fourButt').animate({
            'height': 'show'
        }, 0);
        aux4 = 1;
    } else if (aux4 == 1) {
        $('.fourButt').animate({
            'height': 'hide'
        }, 0);
        aux4 = 0;
    }
});

//mostrar y ocultar pregunta 61-75
btn5.on('click', function () {
    if (aux5 == 0) {
        $('.fiveButt').animate({
            'height': 'show'
        }, 0);
        aux5 = 1;
    } else if (aux5 == 1) {
        $('.fiveButt').animate({
            'height': 'hide'
        }, 0);
        aux5 = 0;
    }
});

/*segunda tabla, validar que sólo se puedan
tres elementos dando su respectiva prioridad
y deshabilitando los demás*/
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

var seleccionados = $('#tabOpt').find('li');
var otro = $('.p76__otro').find('li');
var boton = $('.btnslpce');
var contenedor = $('.contDragDrop').find('input').length;

seleccionados.each(function () {
    $(this).on('drop', function () {
        if ($(this).find('input').length) {
            var valor = $(this).find('input').val();
            $(this).val(valor);
        }
    });
});

otro.on('drop', function () {
    if ($(this).find('input').length) {
        var valor = $(this).find('input').val();
        $(this).val(valor);
        $('.otro76').prop('required', true);
    }
});

boton.on('click', function () {
    if (!$('input[name=p1]').is(':checked') || !$('input[name=p2]').is(':checked') || !$('input[name=p3]').is(':checked') || !$('input[name=p4]').is(':checked') || !$('input[name=p5]').is(':checked') || !$('input[name=p6]').is(':checked') || !$('input[name=p7]').is(':checked') || !$('input[name=p8]').is(':checked') || !$('input[name=p9]').is(':checked') || !$('input[name=p10]').is(':checked') || !$('input[name=p11]').is(':checked') || !$('input[name=p12]').is(':checked') || !$('input[name=p13]').is(':checked') || !$('input[name=p14]').is(':checked') || !$('input[name=p15]').is(':checked')) {
        $('.oneButt').each(function () {
            $(this).animate({
                'height': 'show'
            }, 0);
            aux1 = 1;
        });
    } else if (!$('input[name=p16]').is(':checked') || !$('input[name=p17]').is(':checked') || !$('input[name=p18]').is(':checked') || !$('input[name=p19]').is(':checked') || !$('input[name=p20]').is(':checked') || !$('input[name=p21]').is(':checked') || !$('input[name=p22]').is(':checked') || !$('input[name=p23]').is(':checked') || !$('input[name=p23]').is(':checked') || !$('input[name=p25]').is(':checked') || !$('input[name=p26]').is(':checked') || !$('input[name=p27]').is(':checked') || !$('input[name=p28]').is(':checked') || !$('input[name=p29]').is(':checked') || !$('input[name=p30]').is(':checked')) {
        $('.twoButt').each(function () {
            $(this).animate({
                'height': 'show'
            }, 0);
            aux2 = 1;
        });
    } else if (!$('input[name=p31]').is(':checked') || !$('input[name=p32]').is(':checked') || !$('input[name=p33]').is(':checked') || !$('input[name=p34]').is(':checked') || !$('input[name=p35]').is(':checked') || !$('input[name=p36]').is(':checked') || !$('input[name=p37]').is(':checked') || !$('input[name=p38]').is(':checked') || !$('input[name=p39]').is(':checked') || !$('input[name=p40]').is(':checked') || !$('input[name=p41]').is(':checked') || !$('input[name=p42]').is(':checked') || !$('input[name=p43]').is(':checked') || !$('input[name=p44]').is(':checked') || !$('input[name=p45]').is(':checked')) {
        $('.threeButt').each(function () {
            $(this).animate({
                'height': 'show'
            }, 0);
            aux3 = 1;
        });
    } else if (!$('input[name=p46]').is(':checked') || !$('input[name=p47]').is(':checked') || !$('input[name=p48]').is(':checked') || !$('input[name=p49]').is(':checked') || !$('input[name=p50]').is(':checked') || !$('input[name=p51]').is(':checked') || !$('input[name=p52]').is(':checked') || !$('input[name=p53]').is(':checked') || !$('input[name=p54]').is(':checked') || !$('input[name=p55]').is(':checked') || !$('input[name=p56]').is(':checked') || !$('input[name=p57]').is(':checked') || !$('input[name=p58]').is(':checked') || !$('input[name=p59]').is(':checked') || !$('input[name=p60]').is(':checked')) {
        $('.fourButt').each(function () {
            $(this).animate({
                'height': 'show'
            }, 0);
            aux4 = 1;
        });
    } else if (!$('input[name=p61]').is(':checked') || !$('input[name=p62]').is(':checked') || !$('input[name=p63]').is(':checked') || !$('input[name=p64]').is(':checked') || !$('input[name=p65]').is(':checked') || !$('input[name=p66]').is(':checked') || !$('input[name=p67]').is(':checked') || !$('input[name=p68]').is(':checked') || !$('input[name=p69]').is(':checked') || !$('input[name=p70]').is(':checked') || !$('input[name=p71]').is(':checked') || !$('input[name=p72]').is(':checked') || !$('input[name=p73]').is(':checked') || !$('input[name=p74]').is(':checked') || !$('input[name=p75]').is(':checked')) {
        $('.fiveButt').each(function () {
            $(this).animate({
                'height': 'show'
            }, 0);
            aux5 = 1;
        });
    } else if ($('.contDragDrop').find('input').length > 0) {
        alert("Pregunta 76 incompleta!!!");
    } else if (otro.find('input').length == 0) {
        $('.otro76').removeAttr('required');
        $('.otro76').val('');
    }
});

/*
$("#stick").sticky({
    topSpacing : 0
});*/
