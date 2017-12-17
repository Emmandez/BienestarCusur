'use strict';

////////////////////////////////////////////////////////////////
/*
En éste apartado se calcula el índice de masa corporal y se estima
la categoría de peso acorde a los índices y fórmulas que se proveeron
del nutriólogo.
*/
var talla      = $('#talla') ,
    pesoActual = $('#pesoActual') ,
    imc        = $('#imc') ,
    categPeso  = $('#categPeso') ;

$('#talla , #pesoActual').on( 'keyup' , function(){
    if ( ( pesoActual.val() != '' ) && ( talla.val() != '' ) )
    {
        var Talla = parseFloat( talla.val() ) ,
            pesoA = parseFloat( pesoActual.val()) ;

        var Imc = (pesoA / Math.pow( Talla , 2 )).toFixed(1);

        imc.val(Imc);

        if( Imc < 18.5 )
        {
            categPeso.val('Peso Bajo');
        }
        else if ( Imc >= 18.5 && Imc <= 24.9 )
        {
            categPeso.val('Peso Normal');
        }
        else if ( Imc >= 25 && Imc <= 29.9 )
        {
            categPeso.val('Sobrepeso');
        }
        else if ( Imc >= 30 && Imc <= 34.9 )
        {
            categPeso.val('Obesidad grado 1');
        }
        else if ( Imc >= 35 && Imc <= 39.9 )
        {
            categPeso.val('Obesidad grado 2');
        }
        else if ( Imc >= 40 )
        {
            categPeso.val('Obesidad grado 3');
        }
    }
    else
    {
        imc.val('');
        categPeso.val('');
        //categPeso.attr('placeholder' , 'Elije una opción');
    }
} );
//////////////////////////////////////////////////////////////////


'use strict';
//hide secundaries options
$('.opt2').animate({
    "height" : "hide"
});

//Desplegar campos ejercicio
$("#siExcer").click(function(){
    $('#ExcOpt').animate({
        'height' :'show'
    });
    let opt = $('#ExcOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noExcer").click(function(){
    $('#ExcOpt').animate({
        'height' :'hide'
    });
    let opt = $('#ExcOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

//Desplegar campos actividad física
$("#siActFi").click(function(){
    $('#ActFOpt').animate({
        'height' :'show'
    });
    let opt = $('#ActFOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noActFi").click(function(){
    $('#ActFOpt').animate({
        'height' :'hide'
    });
    let opt = $('#ActFOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

