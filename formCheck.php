<?
				
if(	!empty($_POST['userName']) && !empty($_POST['userPhone'])	){

	$_POST['userName'] = htmlspecialchars($_POST['userName']);
	$_POST['userPhone'] = htmlspecialchars($_POST['userPhone']);

	if(!empty($_POST['userAdress'])){
		$_POST['userAdress'] = htmlspecialchars($_POST['userAdress']);
	}else{
		$_POST['userAdress'] = "Не заполнено";
	}

	if(!empty($_POST['userEmail'])){

		if(filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)!= false){

			$_POST['userEmail'] = htmlspecialchars($_POST['userEmail']);

		}else{
			$_POST['userEmail'] = "Email некорректен";
		}

	}else{
		$_POST['userEmail'] = "Не заполнено";
	}


	echo json_encode($_POST, JSON_UNESCAPED_UNICODE);
				
				
}else {
	echo "Обязательные поля не заполнены";
}

?>