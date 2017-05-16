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
