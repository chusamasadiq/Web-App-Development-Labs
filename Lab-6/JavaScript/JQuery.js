$(document).ready(function(){
    console.log("Document loaded");
    
    $("#evenparagraph").click(function ()
     {
        $(" #paragraphid :odd").css("background-color","lightgreen")
     
    });

    $("#text_mul").click(function(){
        var value=$("#idmul").val()
        var mul=value*2;
        alert("After Multiplying Answer is " + mul)
    });
    
    $("#slideinout").click(function(){
        $("#sliders").slideToggle(1299)

    });

    $("#factbtn").click(function(){
        var number = $("#ftext").val();
		var output = 1;

		if(number <= 0){
			 output = 1;
		}else{
			for(i=1; i<=number; i++){
				output = output*i;
			}
		}
        $(ftext2).show().val(output)
    });

    $("#factbtn").click(function(){
        var number = $("#ftext").val();
		var output = 1;

		if(number <= 0){
			 output = 1;
		}else{
			for(i=1; i<=number; i++){
				output = output*i;
			}
		}
        $(ftext2).show().val(output)
    });

    $("#btnlist").click(function(){
        console.log($("li").length);
        alert("Elements :" + $("li").length)
        });

        $("#imagechange").click(function(){
                $('#img1').hide();
                $('#img2').show();
            
        });


        $('#addd').click(function(){
            var firstvalue=parseInt($("#text1_addd"). val());
            var secondvalue=parseInt($("#text2_addd"). val());
            var sum=firstvalue+secondvalue
            $(text3_result).show().val(sum)
           
        });


        $("#fadein_btn").click(function () {
            $(".fadeid").fadeIn(1000, function(){
               
            });
        });
        $("#fadeout_btn").click(function () {
            $(".fadeid").fadeOut(1000, function(){
                
            });
        });

        $("p").click(function () {
            $('.p2').css('color','red');
            $(".p2").css('font-size','25px')
            
        });

});