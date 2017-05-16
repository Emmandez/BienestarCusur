'use strict';

$('textarea , input').prop('autocomplete' , 'off');

'use strict';

//bootstrap
$('.carousel').carousel({
    interval : false
});

'use strict';

//hide secundaries options
$('.opt2').animate({
    "height" : "hide"
});
$('.msjError').animate({
    "height" : "hide"
},0);

// controller to VPH section
var opt = $('#vph');

$('#vph').click(function(){
    if(opt.val() == "si"){
        $('.txtA').animate({
            'height' : 'show'
        });
        $('.txtA').prop('required' , true);
    }
    else{
        $('.txtA').animate({
            'height' : 'hide'
        });
        $('.txtA').val('');
        $('.txtA').removeAttr('required');
    }
});

//verify if ritmo has xx/xx this nomenclature
function expRegular(){
    var palabra = document.getElementById("ritmo").value;
    var expreg = /^[0-9]{1,2}[/]{1}[0-9]{1,2}$/;

    if(expreg.test(palabra)){
        $('#gin').submit();
    }
    else{
        $('.msjError').animate({
            "height" : "show"
        },0);
        $('.ritmo').click(function(){
            $('.msjError').animate({
                "height" : "hide"
            },0);
        });

        var cont = 1;
        var time = 1;
        setInterval(function(){
            cont--;
            if(cont == 0){
                $('.ritmo').val('');
                $('.ritmo').focus();
            }
        },0.1);

        setInterval(function(){
            time--;
            if(time == 0){
                $('.msjError').animate({
                    "height" : "hide"
                });
            }
        },1800);
    }
}

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

'use strict';

//hide secundaries options
$('.opt2').animate({
    "height" : "hide"
});

// controller to Tabaquismo section
$("#siTab").click(function(){
    $('#tabOpt1 , #tabOpt2').animate({
        'height' :'show'
    });
    let opt = $('#tabOpt1 , #tabOpt2').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noTab").click(function(){
    $('#tabOpt1 , #tabOpt2').animate({
        'height' :'hide'
    });
    let opt = $('#tabOpt1 , #tabOpt2').find('input');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to Alcoholismo section
$("#siAlc").click(function(){
    $('#alcOpt1 , #alcOpt2').animate({
        'height' :'show'
    });
    let opt = $('#alcOpt1 , #alcOpt2').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noAlc").click(function(){
    $('#alcOpt1 , #alcOpt2').animate({
        'height' :'hide'
    });
    let opt = $('#alcOpt1 , #alcOpt2').find('input');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to Alergias section
$("#siAlerg").click(function(){
    $('#alergOpt').animate({
        'height' :'show'
    });
    let opt = $('#alergOpt').find('textarea');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noAlerg").click(function(){
    $('#alergOpt').animate({
        'height' :'hide'
    });
    let opt = $('#alergOpt').find('textarea');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});


// controller to Toxicomanias section
$("#siTox").click(function(){
    $('#toxOpt').animate({
        'height' :'show'
    });
    let opt = $('#toxOpt').find('input');
    opt.each(function(){
        $(this).prop('required', true);
    });
});
$("#noTox").click(function(){
    $('#toxOpt').animate({
        'height' :'hide'
    });
    let opt = $('#toxOpt').find('input');
    opt.each(function(){
        $(this).prop('value', null);
    });
    opt.each(function(){
        $(this).removeAttr('required');
    });
});

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

'use strict';

var selector = $('.headerMedics').find('h2');
selector.on('click', function(){
    selector.removeClass('selected');
    $(this).addClass('selected');

    var link = $(this).attr('href');

    var views = $('#myCarousel').find('div');
    var display = $('#myCarousel').find(link);
    var numData = display.attr('data-number');

    views.removeClass('active');
    display.addClass('active');

    var indicado = $('.carousel-indicators').find('.active');
    indicado.removeClass('active');
});

$('#left , #right').each(function(){
    $(this).click(function(){
        var hf = $('#heredoFamiliar');
        var pat = $('#patologicas');

        if(hf.hasClass('active')){
            selector.removeClass('selected');
            $('#hf').addClass('selected');
        }
        if(pat.hasClass('active')){
            selector.removeClass('selected');
            $('#pat').addClass('selected');
        }
    });
});

'use strict';

new Wow().init();

//# sourceMappingURL=miApp.js.map
