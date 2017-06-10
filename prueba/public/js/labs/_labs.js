'use strict';

/*por defecto las secciones del contenido están ocultas,
con valores nulos y no requeridas*/
$('.wrap_elp-content').animate({
    'height' : 'hide'
},0);

$('select').val('');

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

        $('#status').prop('required' , true);
        $('#fechaBH').prop('required' , true);
        $('#resultBH').prop('required' , true);
    }
    else
    {
        $('#status').removeAttr('required');
        $('#fechaBH').removeAttr('required');
        $('#resultBH').removeAttr('required');
        $('#status').val('');
        $('#fechaBH').val('');
        $('#resultBH').val('');
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
    }
    else
    {
        $('#statusGL').removeAttr('required');
        $('#fechaGL').removeAttr('required');
        $('#resultGL').removeAttr('required');
        $('#statusGL').val('');
        $('#fechaGL').val('');
        $('#resultGL').val('');
        contGL.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::URE:::::
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
    }
    else
    {
        $('#statusUR').removeAttr('required');
        $('#fechaUR').removeAttr('required');
        $('#resultUR').removeAttr('required');
        $('#statusUR').val('');
        $('#fechaUR').val('');
        $('#resultUR').val('');
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
    }
    else
    {
        $('#statusCR').removeAttr('required');
        $('#fechaCR').removeAttr('required');
        $('#resultCR').removeAttr('required');
        $('#statusCR').val('');
        $('#fechaCR').val('');
        $('#resultCR').val('');
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
        $('#resultOR').prop('required' , true);
    }
    else
    {
        $('#statusOR').removeAttr('required');
        $('#fechaOR').removeAttr('required');
        $('#resultOR').removeAttr('required');
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
    }
    else
    {
        $('#statusCO').removeAttr('required');
        $('#fechaCO').removeAttr('required');
        $('#resultCO').removeAttr('required');
        $('#statusCO').val('');
        $('#fechaCO').val('');
        $('#resulCOL').val('');
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
    }
    else
    {
        $('#statusTR').removeAttr('required');
        $('#fechaTR').removeAttr('required');
        $('#resultTR').removeAttr('required');
        $('#statusTR').val('');
        $('#fechaTR').val('');
        $('#resultTR').val('');
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
        $('#resultAP').prop('required' , true);
    }
    else
    {
        $('#statusAP').removeAttr('required');
        $('#fechaAP').removeAttr('required');
        $('#resultAP').removeAttr('required');
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
        $('#resultCV').prop('required' , true);
    }
    else
    {
        $('#statusCV').removeAttr('required');
        $('#fechaCV').removeAttr('required');
        $('#resultCV').removeAttr('required');
        $('#statusCV').val('');
        $('#fechaCV').val('');
        $('#resultCV').val('');
        contCV.animate({
            'height' : 'hide'
        },'slow');
    }
});

//:::::ACIDO URICO:::::
var chkAU    = $('#acidoUrico') ,
    contAU   = $('.aucont');

chkAU.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contAU.animate({
            'height' : 'show'
        },'slow');

        $('#statusAU').prop('required' , true);
        $('#fechaAU').prop('required' , true);
        $('#resultAU').prop('required' , true);
    }
    else
    {
        $('#statusAU').removeAttr('required');
        $('#fechaAU').removeAttr('required');
        $('#resultAU').removeAttr('required');
        $('#statusAU').val('');
        $('#fechaAU').val('');
        $('#resultAU').val('');
        contAU.animate({
            'height' : 'hide'
        },'slow');
    }
});
