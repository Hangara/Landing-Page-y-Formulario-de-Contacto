<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="formulario">
    <div>
        <header class="cabecera">
            <h1>Contacto</h1>
            <a href="landingpage">Regresar</a>
        </header>
    <form>
    <label for="nombre">Nombre:</label>
    <input type="text"name="nombre" id="nombre" value="{{$nombre}}">
    <br>
    <label for="correo">Correo:</label>
    <input type="text"name="correo" id="correo "value="{{$correo}}">
    <br>
    <label for="genero">Hombre:</label>
    <input type="radio"name="genero" id="hombre">
    <label for="genero">Mujer:</label>
    <input type="radio"name="genero" id="mujer">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="comentario">Comentario:</label>
    <br>
    <textarea name="textarea" rows="8" cols="50"></textarea>
    <br>
    <select name="ciudades" id="ciudad">
    <option value="Guadalajara">Guadalajara</option>
    <option value="Zapopan">Zapopan</option>
    <option value="Tonala">Tonala</option>
    <option value="Otro">Otro</option>
    </select>
    <br>
    <label for="contratar">Me interesa contratarte</label>
    <input type="checkbox" name="contratar" id="contratar">
    <br>
    <input type="submit" value="enviar">

    
    </form>
    </div>
</body>
</html>