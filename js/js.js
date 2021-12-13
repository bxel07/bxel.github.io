$(document).ready(function(){

    $(document).ready(function(){
        $(".fa-bars").click(function(){
            $(".sidebar").fadeIn(500);
        });
    });
      AOS.init();

let isdpsss = window.matchMedia("(min-width: 576px)");
if(isdpsss.matches){
    $(".fa-bars").click(function(){
        $(".sidebar").fadeIn(500);
        $(".contenti").css({'cssText': 'margin-left: 8% !important'});
    });

    $(".a").click(function(){
        $(".content-pbm1").fadeIn(1000);
        $(".content-pbm2,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#b").click(function(){
        $(".content-pbm2").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    
    });
    
    $("#c").click(function(){
        $(".content-pbm3").fadeIn(1000);
        $(".content-pbm1,.content-pbm2,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#d").click(function(){
        $(".content-pbm4").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm2,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#e").click(function(){
        $(".content-pbm5").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm2,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#f").click(function(){
        $(".content-pbm6").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm2,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#g").click(function(){
        $(".content-pbm7").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm2,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#h").click(function(){
        $(".content-pbm8").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm2,\
        .content-pbm9,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#i").click(function(){
        $(".content-pbm9").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm2,.content-pbm10,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0");
    });
    
    $("#j").click(function(){
        $(".content-pbm10").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm2,.content-pbm11").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0rem");
    });
    $("#k").click(function(){
        $(".content-pbm11").fadeIn(1000);
        $(".content-pbm1,.content-pbm3,.content-pbm4,.content-pbm5,.content-pbm6,.content-pbm7,.content-pbm8,\
        .content-pbm9,.content-pbm10,.content-pbm2").fadeOut(1000);
        $(".sidebar").fadeOut(500);
        $(".contenti").css("margin-left", "0rem");
    });
    
}

});


