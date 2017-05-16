'use strict';
//hide secundaries options
$('.opt2').animate({
    "height" : "hide"
});

// controller to diabetes section
$("#siDiab").click(function(){
    $('#diabOpt').animate({
        'height' :'show'
    });
    let opt = $('#diabOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noDiab").click(function(){
    $('#diabOpt').animate({
        'height' :'hide'
    });
    let opt = $('#diabOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to sobrepeso section
$("#siSp").click(function(){
    $('#spOpt').animate({
        'height' :'show'
    });
    let opt = $('#spOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noSp").click(function(){
    $('#spOpt').animate({
        'height' :'hide'
    });
    let opt = $('#spOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to cardiopatias section
$("#siCp").click(function(){
    $('#cpOpt').animate({
        'height' :'show'
    });
    let opt = $('#cpOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noCp").click(function(){
    $('#cpOpt').animate({
        'height' :'hide'
    });
    let opt = $('#cpOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to malformaciones section
$("#siMf").click(function(){
    $('#mfOpt').animate({
        'height' :'show'
    });
    let opt = $('#mfOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noMf").click(function(){
    $('#mfOpt').animate({
        'height' :'hide'
    });
    let opt = $('#mfOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to cancer section
$("#siCancer").click(function(){
    $('#cancerOpt').animate({
        'height' :'show'
    });
    let opt = $('#cancerOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noCancer").click(function(){
    $('#cancerOpt').animate({
        'height' :'hide'
    });
    let opt = $('#cancerOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to hipertension section
$("#siHipertension").click(function(){
    $('#hipOpt').animate({
        'height' :'show'
    });
    let opt = $('#hipOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noHipertension").click(function(){
    $('#hipOpt').animate({
        'height' :'hide'
    });
    let opt = $('#hipOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to enfRespiratorias section
$("#siEnfResp").click(function(){
    $('#enfResOpt').animate({
        'height' :'show'
    });
    let opt = $('#enfResOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noEnfResp").click(function(){
    $('#enfResOpt').animate({
        'height' :'hide'
    });
    let opt = $('#enfResOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to nefropatias section
$("#siNefropatias").click(function(){
    $('#nefroOpt').animate({
        'height' :'show'
    });
    let opt = $('#nefroOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noNefropatias").click(function(){
    $('#nefroOpt').animate({
        'height' :'hide'
    });
    let opt = $('#nefroOpt').find('input');
    opt.each(function(){
        $(this).prop('checked', false);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});
