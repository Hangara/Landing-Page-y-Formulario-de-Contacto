

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contacto</title>
</head>
<body>
	<h1>Contacto</h1>

	<form action ="/recibe-form-contacto" method ="POST">
		@csrf
		<label for ="nombre">Nombre: </label><br>
		<input type="text" name="nombre" id="nombre" value="{{$nombre}}">
		<br>
		<label for ="correo">Correo: </label><br>
		<input type="mail" name="correo" id="correo" value="{{$correo}}">
		<br>
		<label for ="mensaje">Mensaje: </label><br>
		<textarea name="mensaje" id="mensaje" cols="50" rows="10">
	</textarea>
	<br>
	<input type="submit" value="Enviar">
	</form>
	
</body>
</html>	
	
	
	
	
	
	
	
	

	
	