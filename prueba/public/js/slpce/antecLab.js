/*Oculta o muestra los campos de entrada de datos dependiendo del valor
  dado al elemento select.
*/
'use strict';

$('input, textarea').prop('autocomplete' , 'off');

var seleccionado = $('#navigation').find('p');

seleccionado.on( 'click' , function(){
    seleccionado.each( function(){
        $(this).removeClass('itemActive');
    } );
    $(this).addClass('itemActive');
} );

$('.colOne , .colTwo').animate({
    'width' : 'hide'
},0);

$('.txtAccidente').animate({
    'height' : 'hide'
},0);

var puestos = $('.cantPTA');
var colA    = $('.colOne').find('input');
var colB    = $('.colTwo').find('input');

$('.colUno , .colDos').animate({
    'width' : 'hide'
},0);

puestos.on( 'click' , function(){
    if( puestos.val() == 'Elije..' )
    {
        $('.colOne , .colTwo').animate({
            'width' : 'hide'
        },400);

        colA.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });

        colB.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
    }
    else if( puestos.val() == "1" )
    {
        $('.colOne').animate({
            'width' : 'show'
        },400);

        $('.colTwo').animate({
            'width' : 'hide'
        },400);

        colA.each(function(){
            $(this).prop('required' , true);
        });

        colB.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });

        $('.noRequired').removeAttr('required');
    }
    else if( puestos.val() == "2" )
    {
        $('.colOne , .colTwo').animate({
            'width' : 'show'
        },400);

        colA.each(function(){
            $(this).prop('required' , true);
        });

        colB.each(function(){
            $(this).prop('required' , true);
        });
        $('.noRequired').removeAttr('required');
    }
} );

$('.accidTA').on('click' , function(){
    if( $(this).val() == 'Si' )
    {
        $('.txtAccidente').prop('required' , true);
        $('.txtAccidente').animate({
            'height' : 'show'
        },400);
    }
    else if( $(this).val() == 'No' )
    {
        $('.txtAccidente').val('');
        $('.txtAccidente').removeAttr('required');
        $('.txtAccidente').animate({
            'height' : 'hide'
        },400);
    }
});

var segTrab = $('.segundoEmpleoActual');

var tabSegP = $('.tab_segundo');
tabSegP.animate({
    'height' : 'hide'
},0);

var input = tabSegP.find('input');

segTrab.on('click' , function(){

    if(segTrab.val() == 'Si')
    {
        tabSegP.animate({
            'height' : 'show'
        },400);
        input.each(function()
        {
            $(this).prop('required' , true);
        });
        $('.noRequired').removeAttr('required');
    }
    else // if( segTrab.val() == 'No' )
    {
        tabSegP.animate({
            'height' : 'hide'
        },400);
        input.each(function()
        {
            $(this).val('');
            $(this).removeAttr('required');
        });
    }

});

$('.preguntaCPTAI').animate({
    'height' : 'hide'
},0);
$('.tabCPTAI').animate({
    'height' : 'hide'
},0);

var cantidad = $('.cantPTAI');
var colUno    = $('.colUno').find('input');
var colDos    = $('.colDos').find('input');

var tercTrab = $('.empleoAnteriorInmediato');
tercTrab.on('click', function(){
    if( tercTrab.val() == 'Si' )
    {
        $('.preguntaCPTAI').animate({
            'height' : 'show'
        },400);
        $('.tabCPTAI').animate({
            'height' : 'show'
        },400);
    }
    else //if( tercTrab.val() == 'No' )
    {
        cantidad.val('Elije..');
        colUno.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
        colDos.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
        $('.colUno').animate({
            'width': 'hide'
        },400);
        $('.colDos').animate({
            'width': 'hide'
        },400);
        $('.preguntaCPTAI').animate({
            'height' : 'hide'
        },400);
        $('.tabCPTAI').animate({
            'height' : 'hide'
        },400);
    }
});

cantidad.on( 'click' , function(){
    if( cantidad.val() == 'Elije..' )
    {
        $('.colUno , .colDos').animate({
            'width' : 'hide'
        },400);

        colUno.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });

        colDos.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
    }
    else if( cantidad.val() == "1" )
    {
        $('.colUno').animate({
            'width' : 'show'
        },400);

        $('.colDos').animate({
            'width' : 'hide'
        },400);

        colUno.each(function(){
            $(this).prop('required' , true);
        });

        colDos.each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });

        $('.noRequired').removeAttr('required');
    }
    else if( cantidad.val() == "2" )
    {
        $('.colUno , .colDos').animate({
            'width' : 'show'
        },400);

        colUno.each(function(){
            $(this).prop('required' , true);
        });

        colDos.each(function(){
            $(this).prop('required' , true);
        });
        $('.noRequired').removeAttr('required');
    }
} );


//---ANTERIOR
var antTrab = $('.empAnt');

var tabCuatro = $('.tab_cuarto');
tabCuatro.animate({
    'height' : 'hide'
},0);

var inputs = tabCuatro.find('input');

antTrab.on('click' , function(){

    if(antTrab.val() == 'Si')
    {
        tabCuatro.animate({
            'height' : 'show'
        },400);
        inputs.each(function()
        {
            $(this).prop('required' , true);
        });
        $('.noRequired').removeAttr('required');
    }
    else //if( antTrab.val() == 'No' )
    {
        tabCuatro.animate({
            'height' : 'hide'
        },400);
        inputs.each(function()
        {
            $(this).val('');
            $(this).removeAttr('required');
        });
    }

});

//Copiar texto del centro de trabajo del primer puesto al segundo puesto
$('#primerCentro').on('keyup', function(){
    var txt = $('#primerCentro').val();
    $('#segundoCentro').val(txt);
});


