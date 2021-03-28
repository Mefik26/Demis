$(document).ready(function($){
   $("#userPhone").mask('+7(000)000-00-00');
 });


$(function(){
    $("#sendButton").on("click", function(evt){

    	var errorFlag = 0;

        if ($("#userName").val()=='') {

			$("#userName").css({'background-color':'#ffbaba', "border-color":"#be1116"});
			errorFlag = 1;
		}

		if($("#userPhone").val()=='') {

			$("#userPhone").css({'background-color':'#ffbaba', "border-color":"#be1116"});
			errorFlag = 1;
		}else{

			var phoneSimbolsCount = $("#userPhone").val().toString().length;

			if(phoneSimbolsCount!=16){

				$("#userPhone").css({'background-color':'#ffbaba', "border-color":"#be1116"});
				errorFlag = 1;
				evt.preventDefault();	
			}
			
		}
		
		if(errorFlag!=0){
			
			$(".errorLabel").css('visibility','visible');
		}
    });
});


$(function(){
    $("#mainForm").on("submit", function(evt){

    	evt.preventDefault();
    	
    	$.ajax({

  	 		type: "POST",
  	 		url: "formCheck.php",
  	 		data: $(this).serialize(),
  	 		success: function(response){
  	 			  	 			
  	 			var handlerResult = JSON.parse(response);
  	 			

				$("#userNameTable"	).text(handlerResult['userName']);
				$("#userAdressTable").text(handlerResult['userAdress']);
				$("#userPhoneTable"	).text(handlerResult['userPhone']);
				$("#userEmailTable"	).text(handlerResult['userEmail']);
				
				$("#resultTable").css('display','block');
				$("#mainForm").css('display','none');
  	 		}
  	 	}); 

    });

});


$(function(){
    $("input").on("keydown", function(){
    	$(this).css({'background-color':'', "border-color":""});
    	$(".errorLabel").css('visibility','hidden');
    });
});