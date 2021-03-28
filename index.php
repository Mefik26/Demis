<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="validation.js"></script>
    
    <link href="style.css" rel="stylesheet">

    <title>Demis form</title>
    
  </head>
  
  <body>
  	<div class="mainForm" >
		
		<form  id="mainForm"  method="POST" action="formCheck.php"> 
	
		<div class="inputField">
			<label class="inputLabel">Ваше ФИО *</label>
			<input id="userName" 	name="userName" type="text" placeholder="Иванов Иван Иванович" required></input>
		</div>
		
		<div class="inputField">
			<label class="inputLabel">Ваш адрес</label>
			<input id="userAdress"	name="userAdress" type="text" placeholder="г.Тамбов, ул.Ленина, д.2"></input>
		</div>
		
		<div class="inputField">
			<label class="inputLabel">Ваш телефон *</label>
			<input id="userPhone" 	name="userPhone" type="text" placeholder="+7..." type="tel" required></input>
		</div>
	
		<div class="inputField">
			<label class="inputLabel">Ваш email</label>
			<input id="userEmail"	name="userEmail" type="text" placeholder="name@mail.ru" ></input>
		</div>
	
		<div class="inputField"><input id="sendButton" class="button_red" type="submit" value="Отправить" ></input></div>

		<div class="inputField"><label class="errorLabel" >Заполните обязательные поля</label></div>
	
		</form>

		
		<table id="resultTable" style="display:none" class="mainTable">
			<tr>
				<td class="tdHeader">ФИО</td>
				<td id="userNameTable"></td>
			</tr>

			<tr>
				<td class="tdHeader" >Адрес</td>
				<td id="userAdressTable"></td>
			</tr>

			<tr>
				<td class="tdHeader">Телефон</td>
				<td id="userPhoneTable"></td>
			</tr>

			<tr>
				<td class="tdHeader">Email</td>
				<td id="userEmailTable"></td>
			</tr>
		</table>
	
	</div>
</body>