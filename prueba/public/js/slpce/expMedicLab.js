'use strict';

$('input, textarea').prop('autocomplete' , 'off');

var seleccionado = $('#enlaces').find('p');

seleccionado.on( 'click' , function(){
    seleccionado.each( function(){
        $(this).removeClass('itemActive');
    } );
    $(this).addClass('itemActive');
} );


var 
    sextoPr    = $('#sextoPr')    ,
    quintoPr   = $('#quintoPr')    ,
    cuartoPr   = $('#cuartoPr')    ,
    terceroPr  = $('#terceroPr')    ,
    segundoPr  = $('#segundoPr')    ,
    primeroPr  = $('#primeroPr')    ,
    
    terceroSec = $('#terceroSec') ,
    segundoSec = $('#segundoSec')    ,
    primeroSec = $('#primeroSec')    ,
    
    sextoBa    = $('#sextoBa')    ,
    quintoBa   = $('#quintoBa')    ,
    cuartoBa   = $('#cuartoBa')    ,
    terceroBa  = $('#terceroBa')    ,
    segundoBa  = $('#sextoBa')    ,
    primeroBa  = $('#primeroBa')    ,
    
    siCT       = $('#siCT')       ,
    inputCT    = $('#cualCT')     ,
    noCT       = $('#noCT')       ,
    siLI       = $('#siLI')       ,
    inputLI    = $('#cualLI')     ,
    noLI       = $('#noLI')       ,
    siMA       = $('#siMA')       ,
    inputMA    = $('#cualMA')     ,
    noMA       = $('#noMA')       ,
    siDO       = $('#siDO')       ,
    inputDO    = $('#cualDO')     ,
    noDO       = $('#noDO')       ,
    conEstudios = $('#conEstudios'),

    SinEstudios = $('#SinEstudios');


//carrera técnica, opciones de si y no, ocultar y mostrar input
inputCT.animate({
    'width' : 'hide'
},0);

siCT.on( 'click' , function(){
    inputCT.animate({
        'width' : 'show'
    },'slow');
    inputCT.prop('required' , true);
    SinEstudios.prop('checked', false);
    conEstudios.prop('checked', true);
    sextoPr.prop('checked' , true);
    terceroSec.prop('checked' , true);
    sextoBa.prop('checked' , true);
});
noCT.on( 'click' , function(){
    inputCT.val('');
    inputCT.removeAttr('required');
    inputCT.animate({
        'width' : 'hide'
    },'slow');
});

//licenciatura, opciones de si y no, ocultar y mostrar input
inputLI.animate({
    'width' : 'hide'
},0);

siLI.on( 'click' , function(){
    inputLI.animate({
        'width' : 'show'
    },'slow');
    inputLI.prop('required' , true);
    SinEstudios.prop('checked', false);
    conEstudios.prop('checked', true);
    sextoPr.prop('checked' , true);
    terceroSec.prop('checked' , true);
    sextoBa.prop('checked' , true);
});
noLI.on( 'click' , function(){
    inputLI.val('');
    inputLI.removeAttr('required');
    inputLI.animate({
        'width' : 'hide'
    },'slow');
    noMA.prop('checked' , true);
    inputMA.val('');
    inputMA.removeAttr('required');
    inputMA.animate({
        'width' : 'hide'
    },'slow');
    noDO.prop('checked', true);
    inputDO.val('');
    inputDO.removeAttr('required');
    inputDO.animate({
        'width' : 'hide'
    },'slow');
});

//maestría, opciones de si y no, ocultar y mostrar input
inputMA.animate({
    'width' : 'hide'
},0);

siMA.on( 'click' , function(){
    inputMA.animate({
        'width' : 'show'
    },'slow');
    inputMA.prop('required' , true);
    SinEstudios.prop('checked', false);
    conEstudios.prop('checked', true);
    sextoPr.prop('checked' , true);
    terceroSec.prop('checked' , true);
    sextoBa.prop('checked' , true);
    siLI.prop('checked' , true);
    inputLI.animate({
        'width' : 'show'
    },'slow');
    inputLI.prop('required' , true);
});
noMA.on( 'click' , function(){
    inputMA.val('');
    inputMA.removeAttr('required');
    inputMA.animate({
        'width' : 'hide'
    },'slow');
    noDO.prop('checked' ,true);
    inputDO.val('');
    inputDO.removeAttr('required');
    inputDO.animate({
        'width' : 'hide'
    },'slow');
});

//doctorado, opciones de si y no, ocultar y mostrar input
inputDO.animate({
    'width' : 'hide'
},0);

siDO.on( 'click' , function(){
    inputDO.animate({
        'width' : 'show'
    },'slow');
    inputDO.prop('required' , true);
    SinEstudios.prop('checked', false);
    conEstudios.prop('checked', true);
    sextoPr.prop('checked' , true);
    terceroSec.prop('checked' , true);
    sextoBa.prop('checked' , true);
    siLI.prop('checked' , true);
    inputLI.animate({
        'width' : 'show'
    },'slow');
    inputLI.prop('required' , true);
    siMA.prop('checked' , true);
    inputMA.animate({
        'width' : 'show'
    },'slow');
    inputMA.prop('required' , true);
});
noDO.on( 'click' , function(){
    inputDO.val('');
    inputDO.removeAttr('required');
    inputDO.animate({
        'width' : 'hide'
    },'slow');
});

//llenar campos anteriores a primaria
/*
$('#primaria').find('input:radio').each(function())
    sext.on('click', function(){
    conEstudios.prop('checked', true);
});


$('#primaria').find('input:radio').each(function(){
    
});
*/


//llenar campos anteriores a secundaria
terceroSec.on('click', function(){
    sextoPr.prop('checked', true);
    conEstudios.prop('checked', true);
});

//Llenar campos anteriores a bachillerato
sextoBa.on('click', function(){
    terceroSec.prop('checked', true);
    sextoPr.prop('checked', true);
    conEstudios.prop('checked', true);
});

//Borrar check de campos cuando no se tienen estudios
SinEstudios.on('click', function(){
    $('#primaria').find('input:radio').each(function(){
        $(this).prop('checked', false);
    })

    $('#secundaria').find('input:radio').each(function(){
        $(this).prop('checked', false);
    })

    $('#bachillerato').find('input:radio').each(function(){
        $(this).prop('checked', false);
    })

    $('#tecnica').find('input:radio').each(function(){
        noCT.prop('checked', true);
        inputCT.val('');
        inputCT.removeAttr('required');
        inputCT.animate({
            'width' : 'hide'
        },'slow');
    })

    $('#licenciatura').find('input:radio').each(function(){
        noLI.prop('checked', true);
        inputLI.val('');
        inputLI.removeAttr('required');
        inputLI.animate({
            'width' : 'hide'
        },'slow');
    })

    $('#maestria').find('input:radio').each(function(){
        noMA.prop('checked', true);
        inputMA.val('');
        inputMA.removeAttr('required');
        inputMA.animate({
            'width' : 'hide'
        },'slow');
    })

    $('#doctorado').find('input:radio').each(function(){
        noDO.prop('checked', true);
        inputDO.val('');
        inputDO.removeAttr('required');
        inputDO.animate({
            'width' : 'hide'
        },'slow');

    conEstudios.prop('checked', false);
    })    
});

//Marcar el radio button síEstudia cuando se selecciona un grado.



//NOMBRAMIENTOS

//--otro ¿Cuál nombramiento?
var inputNombramiento = $('#cual26');
inputNombramiento.animate({
    'height' : 'hide'
},0);

$('#nombramiento').find('input:radio').each(function(){
    $(this).on('click' , function(){
        if( $('#n26').is(':checked') )
        {
            inputNombramiento.prop('required' , true);
            inputNombramiento.animate({
                'height' : 'show'
            },'slow');
        }
        else
        {
            inputNombramiento.val('');
            inputNombramiento.removeAttr('required');
            inputNombramiento.animate({
                'height' : 'hide'
            },'slow');
        }
    });
});

//--otro ¿Cuál contrato?
var inputOtroContrato = $('#cualOtroContrato');

inputOtroContrato.animate({
    'width' : 'hide'
},0);

$('.tipo_cont-elem').find('input:radio').each(function(){
    $(this).on('click' , function(){
        if( $('#otroContrato').is(':checked') )
        {
            inputOtroContrato.prop('required' , true);
            inputOtroContrato.animate({
                'width' : 'show'
            },'slow');
        }
        else
        {
            inputOtroContrato.val('');
            inputOtroContrato.removeAttr('required');
            inputOtroContrato.animate({
                'width' : 'hide'
            },'slow');
        }
    });
});

//--otro ¿Cuál horario?
var inputOtroHorario = $('#cualOtroHorario');

inputOtroHorario.animate({
    'width' : 'hide'
},0);

$('.tipo_hor-elem').find('input:radio').each(function(){
    $(this).on('click' , function(){
        if( $('#otroHorario').is(':checked') )
        {
            inputOtroHorario.prop('required' , true);
            inputOtroHorario.animate({
                'width' : 'show'
            },'slow');
        }
        else
        {
            inputOtroHorario.val('');
            inputOtroHorario.removeAttr('required');
            inputOtroHorario.animate({
                'width' : 'hide'
            },'slow');
        }
    });
});


