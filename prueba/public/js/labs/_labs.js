'use strict';
//Evalua un valor e imprime si el valor es normal o anormal
function statusNoRange( elemEvent , status , val ){
    elemEvent.on('keyup' , function(e){
        e.preventDefault();

        var valCO = elemEvent.val();

        if( valCO ==='' )
        {
            status.val('');
        }
        else
        {
            var minimo = parseFloat(valCO);

            if( minimo <= val )
            {
                status.val('Normal');
            }
            else
            {
                status.val('Anormal');
            }
        }
    });
}
/*Evalúa que un valor se encuentre entre un rango. 
Si se encuentra dentro, es normal, si no, es anormal*/
function statusRange( elemEvent , status , valMin , valMax ){
    elemEvent.on('keyup' , function(e){
        e.preventDefault();

        var value = elemEvent.val();

        if( value === '' )
        {
            status.val('');
        }
        else
        {
            var valor = parseFloat(value);

            if( valor >= valMin && valor <= valMax )
            {
                status.val('Normal');
            }
            else
            {
                status.val('Anormal');
            }
        }
    });
}

/*por defecto las secciones del contenido están ocultas,
con valores nulos y no requeridas*/
$('.hideDefault').animate({
    'height' : 'hide'
},0);

$('select').val('');

//Muestra los campos para llenar los formumlarios al checar la casilla. 
//--------------------------------
//:::BIOMETRÍA HEMÁTICA:::::
var chkBH    = $('#bioHe') ,
    contBH   = $('.bhcont');

chkBH.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contBH.animate({
            'height' : 'show'
        },'slow');

        $('#fechaBH').prop('required' , true);
        $('#hemoglobina').prop('required' , true);
        $('#hematocrito').prop('required' , true);
        $('#leucocitos').prop('required' , true);
    }
    else
    {
        $('#fechaBH').removeAttr('required');
        $('#hemoglobina').removeAttr('required');
        $('#hematocrito').removeAttr('required');
        $('#leucocitos').removeAttr('required');
        $('#fechaBH').val('');
        $('#hemoglobina').val('');
        $('#hematocrito').val('');
        $('#leucocitos').val('');
        $('#diagBH').val('');
        contBH.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::GLUCOSA:::::
var chkGL    = $('#glucosa') ,
    contGL   = $('.glcont');

chkGL.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contGL.animate({
            'height' : 'show'
        },'slow');

        $('#statusGL').prop('required' , true);
        $('#fechaGL').prop('required' , true);
        $('#resultGL').prop('required' , true);

        statusRange( $('#resultGL') , $('#statusGL') , 70 , 110 );
    }
    else
    {
        $('#statusGL').removeAttr('required');
        $('#fechaGL').removeAttr('required');
        $('#resultGL').removeAttr('required');
        $('#statusGL').val('');
        $('#fechaGL').val('');
        $('#resultGL').val('');
        $('#diagGL').val('');
        contGL.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::UREA:::::
var chkUR    = $('#urea') ,
    contUR   = $('.urcont');

chkUR.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contUR.animate({
            'height' : 'show'
        },'slow');

        $('#statusUR').prop('required' , true);
        $('#fechaUR').prop('required' , true);
        $('#resultUR').prop('required' , true);

        statusRange( $('#resultUR') , $('#statusUR') , 15 , 45 );
    }
    else
    {
        $('#statusUR').removeAttr('required');
        $('#fechaUR').removeAttr('required');
        $('#resultUR').removeAttr('required');
        $('#statusUR').val('');
        $('#fechaUR').val('');
        $('#resultUR').val('');
        $('#diagUR').val('');
        contUR.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::CREATININA:::::
var chkCR    = $('#creatinina') ,
    contCR   = $('.crcont');

chkCR.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contCR.animate({
            'height' : 'show'
        },'slow');

        $('#statusCR').prop('required' , true);
        $('#fechaCR').prop('required' , true);
        $('#resultCR').prop('required' , true);

        statusRange( $('#resultCR') , $('#statusCR') , 0.5 , 1.1 );
    }
    else
    {
        $('#statusCR').removeAttr('required');
        $('#fechaCR').removeAttr('required');
        $('#resultCR').removeAttr('required');
        $('#statusCR').val('');
        $('#fechaCR').val('');
        $('#resultCR').val('');
        $('#diagCR').val('');
        contCR.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::ORINA:::::
var chkOR    = $('#orina') ,
    contOR   = $('.orcont');

chkOR.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contOR.animate({
            'height' : 'show'
        },'slow');

        $('#statusOR').prop('required' , true);
        $('#fechaOR').prop('required' , true);
    }
    else
    {
        $('#statusOR').removeAttr('required');
        $('#fechaOR').removeAttr('required');
        $('#statusOR').val('');
        $('#fechaOR').val('');
        $('#resultOR').val('');
        contOR.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::COLESTEROL:::::
var chkCO    = $('#colesterol') ,
    contCO   = $('.cocont');

chkCO.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contCO.animate({
            'height' : 'show'
        },'slow');

        $('#statusCO').prop('required' , true);
        $('#fechaCO').prop('required' , true);
        $('#resultCO').prop('required' , true);

        statusNoRange( $('#resultCO') , $('#statusCO') , 200 ); //se ejecuta la función

    }
    else
    {
        $('#statusCO').removeAttr('required');
        $('#fechaCO').removeAttr('required');
        $('#resultCO').removeAttr('required');
        $('#statusCO').val('');
        $('#fechaCO').val('');
        $('#resultCO').val('');
        $('#diagCO').val('');
        contCO.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::TRIGLICERIDOS:::::
var chkTR    = $('#trigliceridos') ,
    contTR   = $('.trcont');

chkTR.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contTR.animate({
            'height' : 'show'
        },'slow');

        $('#statusTR').prop('required' , true);
        $('#fechaTR').prop('required' , true);
        $('#resultTR').prop('required' , true);

        statusNoRange( $('#resultTR') , $('#statusTR') , 150 ); //se ejecuta la función

    }
    else
    {
        $('#statusTR').removeAttr('required');
        $('#fechaTR').removeAttr('required');
        $('#resultTR').removeAttr('required');
        $('#statusTR').val('');
        $('#fechaTR').val('');
        $('#resultTR').val('');
        $('#diagTR').val('');
        contTR.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::ANTIGENO PROSTÁTICO ESPECÍFICO:::::
var chkAP    = $('#antigenoProstatico') ,
    contAP   = $('.apcont');

chkAP.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contAP.animate({
            'height' : 'show'
        },'slow');

        $('#statusAP').prop('required' , true);
        $('#fechaAP').prop('required' , true);
    }
    else
    {
        $('#statusAP').removeAttr('required');
        $('#fechaAP').removeAttr('required');
        $('#statusAP').val('');
        $('#fechaAP').val('');
        $('#resultAP').val('');
        contAP.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::CITOLOGIA VAGINAL:::::
var chkCV    = $('#citologiaVaginal') ,
    contCV   = $('.cvcont');

chkCV.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contCV.animate({
            'height' : 'show'
        },'slow');

        $('#statusCV').prop('required' , true);
        $('#fechaCV').prop('required' , true);
    }
    else
    {
        $('#statusCV').removeAttr('required');
        $('#fechaCV').removeAttr('required');
        $('#statusCV').val('');
        $('#fechaCV').val('');
        $('#resultCV').val('');
        contCV.animate({
            'height' : 'hide'
        },'slow');
    }
});
