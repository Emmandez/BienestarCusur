//despliega un formulario para añadir un examen adicional.
'use strict';

var boton   = $('#btnPlus');
var counter = 1;

boton.on( 'click' , function(){

    var num         = counter.toString();
    var nombre      = 'nombreOtro'    + num;
    var fecha       = 'fechaOtro'     + num;
    var resultado   = 'resultadoOtro' + num;
    var estado      = 'estadoOtro'    + num;
    var descripcion = 'descOtro'      + num;

    counter ++ ;

    $('.clone').append( function(){
        return '<div class="col-md-10 col-md-offset-1 container wrap_elp secOtro"><div class="form-inline col-md-12 wrap_elp-head other"><input type="text" required placeholder="Introduce el nombre del exámen"><button type="button" onclick="cerrar(this)" class="cerrar_otro fa fa-times"></button></div><div class="form-inline col-md-12 wrap_elp-content otroCont"><div class="fechaExamen wrap_elp-content_div"><label>Fecha del exámen</label><input type="date" required></div><div class="result wrap_elp-content_div"><label>Resultado</label><input type="text" required value="" placeholder="Ingrese el/los resultado(s)"></div><div class="norm_anorm wrap_elp-content_div"><label>Estado</label><input type="text" required></div><div class="descrip wrap_elp-content_div"><label>Descripción</label><input type="text"></div></div></div>';
    } );

    $('.other').find('input').prop('name' , nombre); //agregar name al input del nombre del nuevo exámen
    $('.wrap_elp-content_div').children('input').eq(0).prop('name' , fecha); //agregar name al input fecha
    $('.wrap_elp-content_div').children('input').eq(1).prop('name' , resultado); //agregar name al input resultado
    $('.wrap_elp-content_div').children('input').eq(2).prop('name' , estado); //agregar name al input estado
    $('.wrap_elp-content_div').children('input').eq(3).prop('name' , descripcion); //agregar name al input descripción

    /*var x =$('.other').find('input').attr('name');
    var a =$('.wrap_elp-content_div').children('input').eq(0).attr('name'); //agregar name al input fecha
    var b =$('.wrap_elp-content_div').children('input').eq(1).attr('name'); //agregar name al input resultado
    var c =$('.wrap_elp-content_div').children('input').eq(2).attr('name'); //agregar name al input estado
    var d =$('.wrap_elp-content_div').children('input').eq(3).attr('name');
    console.log(x);
    console.log(a);
    console.log(b);
    console.log(c);
    console.log(d);*/

} );
//Cierra los formularios abiertos por el evento anterior en este mismo código
function cerrar(element){
    element.closest('.secOtro').remove();
    counter --;
}
