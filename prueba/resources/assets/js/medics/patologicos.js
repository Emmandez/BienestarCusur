'use strict';
//hide secundaries options
$('.opt2').animate({
    "height" : "hide"
});

// controller to Enfermedades infancia section
$("#siInf").click(function(){
    $('#infOpt').animate({
        'height' :'show'
    });
    let opt = $('#infOpt').find('input, textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noInf").click(function(){
    $('#infOpt').animate({
        'height' :'hide'
    });
    let opt = $('#infOpt').find('input, textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to hospitalizaciones section
$("#siHosp").click(function(){
    $('#hospOpt').animate({
        'height' :'show'
    });
    let opt = $('#hospOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noHosp").click(function(){
    $('#hospOpt').animate({
        'height' :'hide'
    });
    let opt = $('#hospOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to cirugias section
$("#siCir").click(function(){
    $('#cirOpt').animate({
        'height' :'show'
    });
    let opt = $('#cirOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noCir").click(function(){
    $('#cirOpt').animate({
        'height' :'hide'
    });
    let opt = $('#cirOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to transfuciones section
$("#siTf").click(function(){
    $('#tfOpt').animate({
        'height' :'show'
    });
    let opt = $('#tfOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noTf").click(function(){
    $('#tfOpt').animate({
        'height' :'hide'
    });
    let opt = $('#tfOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to medicacion section
$("#siMedicacion").click(function(){
    $('#medicacionOpt').animate({
        'height' :'show'
    });
    let opt = $('#medicacionOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noMedicacion").click(function(){
    $('#medicacionOpt').animate({
        'height' :'hide'
    });
    let opt = $('#medicacionOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

// controller to otra enfermedad section
$("#siOE").click(function(){
    $('#oeOpt').animate({
        'height' :'show'
    });
    let opt = $('#oeOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noOE").click(function(){
    $('#oeOpt').animate({
        'height' :'hide'
    });
    let opt = $('#oeOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});
