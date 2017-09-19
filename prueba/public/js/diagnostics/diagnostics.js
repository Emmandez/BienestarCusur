//Despliega las áreas de texto al marcar una casilla. 
//::::: SEGURIDAD LABORAL :::::
var chkSL  = $('#chkSL'),
    contSL = $('.sl_container');

chkSL.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contSL.animate({
            'height' : 'show'
        },'slow');

        contSL.find('textarea').each(function(){
            $(this).prop('required' , true);
        });
    }
    else
    {
        contSL.find('textarea').each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
        contSL.animate({
            'height' : 'hide'
        },'slow');
    }
});

//::::: MÉDICOS :::::
var chkME  = $('#chkME'),
    contME = $('.me_container');

chkME.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contME.animate({
            'height' : 'show'
        },'slow');

        contME.find('textarea').each(function(){
            $(this).prop('required' , true);
        });
    }
    else
    {
        contME.find('textarea').each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
        contME.animate({
            'height' : 'hide'
        },'slow');
    }
});

//::::: NUTRIÓLOGOS :::::
var chkNU  = $('#chkNU'),
    contNU = $('.nu_container');

chkNU.on('change' , function(){
    if( $(this).is(':checked') )
    {
        contNU.animate({
            'height' : 'show'
        },'slow');

        contNU.find('textarea').each(function(){
            $(this).prop('required' , true);
        });
    }
    else
    {
        contNU.find('textarea').each(function(){
            $(this).val('');
            $(this).removeAttr('required');
        });
        contNU.animate({
            'height' : 'hide'
        },'slow');
    }
});
