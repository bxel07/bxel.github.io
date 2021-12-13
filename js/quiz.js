$(document).ready(function(){
    /*change backgroud of selected radion button*/
    $("#correct1").click(function(){
        $("#op1").css({
            'background-color' : '#567d46 '
         });
        $("#op2").css({'background-color':'inherit'});
        $("#op3").css({'background-color':'inherit'});
        $("#op4").css({'background-color':'inherit'});
    });

    $("#correct2").click(function(){
        $("#op2").css({
            'background-color' : '#567d46 '
         });
         $("#op1").css({'background-color':'inherit'});
        $("#op3").css({'background-color':'inherit'});
        $("#op4").css({'background-color':'inherit'});
    });

    $("#correct3").click(function(){
        $("#op3").css({
            'background-color' : '#567d46 '
         });
         $("#op1").css({'background-color':'inherit'});
        $("#op2").css({'background-color':'inherit'});
        $("#op4").css({'background-color':'inherit'});
    });

    $("#correct4").click(function(){
        $("#op4").css({
            'background-color' : '#567d46 '
         });
         $("#op1").css({'background-color':'inherit'});
        $("#op2").css({'background-color':'inherit'});
        $("#op3").css({'background-color':'inherit'});
    });

    /*delete backgroud and unselected radion button*/
    $("#del1").on("click", function(){
        $("#op1").css({'background-color':'inherit'});
        $("#op2").css({'background-color':'inherit'});
        $("#op3").css({'background-color':'inherit'});
        $("#op4").css({'background-color':'inherit'});
        $("input[type=radio]").prop("checked", false);
      });

      $("#next1").on("click", function(){
        $("#qz1").hide(500);
        $(".close").prop("checked", false);
      });

})

$(document).ready(function(){
    /*change backgroud of selected radion button*/
    $("#correct11").click(function(){
        $("#op11").css({
            'background-color' : '#567d46 '
         });
        $("#op21").css({'background-color':'inherit'});
        $("#op31").css({'background-color':'inherit'});
        $("#op41").css({'background-color':'inherit'});
    });

    $("#correct21").click(function(){
        $("#op21").css({
            'background-color' : '#567d46 '
         });
         $("#op11").css({'background-color':'inherit'});
        $("#op31").css({'background-color':'inherit'});
        $("#op41").css({'background-color':'inherit'});
    });

    $("#correct31").click(function(){
        $("#op31").css({
            'background-color' : '#567d46 '
         });
         $("#op11").css({'background-color':'inherit'});
        $("#op21").css({'background-color':'inherit'});
        $("#op41").css({'background-color':'inherit'});
    });

    $("#correct41").click(function(){
        $("#op41").css({
            'background-color' : '#567d46 '
         });
         $("#op11").css({'background-color':'inherit'});
        $("#op21").css({'background-color':'inherit'});
        $("#op31").css({'background-color':'inherit'});
    });

    /*delete backgroud and unselected radion button*/
    $("#del11").on("click", function(){
        $("#op11").css({'background-color':'inherit'});
        $("#op21").css({'background-color':'inherit'});
        $("#op31").css({'background-color':'inherit'});
        $("#op41").css({'background-color':'inherit'});
        $("input[type=radio]").prop("checked", false);
      });

      $("#next11").on("click", function(){
        $("#qz2").hide(500);
        $(".close").prop("checked", false);
      });
})

$(document).ready(function(){
    /*change backgroud of selected radion button*/
    $("#correct12").click(function(){
        $("#op12").css({
            'background-color' : '#567d46 '
         });
        $("#op22").css({'background-color':'inherit'});
        $("#op32").css({'background-color':'inherit'});
        $("#op42").css({'background-color':'inherit'});
    });

    $("#correct22").click(function(){
        $("#op21").css({
            'background-color' : '#567d46 '
         });
         $("#op12").css({'background-color':'inherit'});
        $("#op32").css({'background-color':'inherit'});
        $("#op42").css({'background-color':'inherit'});
    });

    $("#correct32").click(function(){
        $("#op32").css({
            'background-color' : '#567d46 '
         });
         $("#op12").css({'background-color':'inherit'});
        $("#op22").css({'background-color':'inherit'});
        $("#op42").css({'background-color':'inherit'});
    });

    $("#correct42").click(function(){
        $("#op42").css({
            'background-color' : '#567d46 '
         });
         $("#op12").css({'background-color':'inherit'});
        $("#op22").css({'background-color':'inherit'});
        $("#op32").css({'background-color':'inherit'});
    });

    /*delete backgroud and unselected radion button*/
    $("#del12").on("click", function(){
        $("#op12").css({'background-color':'inherit'});
        $("#op22").css({'background-color':'inherit'});
        $("#op32").css({'background-color':'inherit'});
        $("#op42").css({'background-color':'inherit'});
        $("input[type=radio]").prop("checked", false);
      });

      $("#submit").on("click", function(){
        $("#qz3").hide(500);
        $(".close").prop("checked", false);
      });

      
      $("#outs").on("click", function(){
        $("#qz4").hide(500);
        $(".close").prop("checked", false);
      });
})




function result()
{
   x = document.getElementById('correct1');
   y = document.getElementById('correct11');
   z = document.getElementById('correct12');
	var score=0;
	if(document.getElementById('correct1').checked)
		{	score+10;
		}
	if(document.getElementById('correct11').checked )
		{	score+20;
		}
	if(document.getElementById('correct12').checked)
		{	score+30;
		}

 document.getElementById("result").innerHTML = +score;
}






