<html>
<head>
<title>Formulario de Ingreso</title>
<link rel="stylesheet" href="Css/bootstrap.min.css">
<link rel="stylesheet" href="Css/style.css">
<!--style type="text/css"-->
<style>
            body { background-color: rgb(140, 176, 116); }
        </style>
</head>
<body>
<header>
        <div align="center" class="container">
            <h1>Metodo de Post utilizando Clases</h1>
        </div>
    </header>
<form align="center" action="Post.php"  method="post">
Nombre: <input type="text" name="nombre" placeholder="Ingrese Nombre" required size="20"><br><br>
Apellido: <input type="text" name="apellido" placeholder="Ingrese Apellido" required size="20"><br><br>
Usuario: <input type="text" name="usuario" placeholder="example10"  required size="10"><br><br>
Password: <input type="password" name="password" placeholder="*******"  required size="10"><br><br>
Direccion: <input type="text" name="direccion" placeholder="example 6 av 13-23 Jutiapa"  required size="25"><br><br>
Edad: <input type="number" name="edad" required size="6"><br><br>
Correo: <input type="email" name="correo" placeholder="example@gmail.com" required  size="20"><br><br>
Estudios: <select name="estudios" required title="estudios">
                <option value=''>Selecionar</option>
                <option value='primaria'>Primaria</option>
                <option value='basico'>Basico</option>
                <option value='diversificado'>Diversificado</option>
                <option value='universitario'>Universitario</option>
				<option value='superior'>Superior</option>
            </select><br><br>
		<input type="submit" value="Enviar Datos">
</form>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
</body>
</html>
