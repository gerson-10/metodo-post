<html>
<head>
<title>Metodo post utilizando la clase Usuario</title>
<style>
            body { background-color: rgb(140, 176, 116); }
        </style>
</head>
</head>
<body>
<header>
        <div class="container">
            <h1>Datos obtenidos desde el index</h1><a href="index.php"><button><E>REGRESO A INDEX</E>
            <!--/button><a href="pago_online.html"><button><E>PAGO ONLINE</E></button></a></a-->
        </div><br>
    </header>
	<?php
require 'Usuario.php'; // utiliza la clase Usuario para crear el objeto
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$direccion = $_POST["direccion"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$estudios = $_POST["estudios"];

$usuario = new Usuario($nombre, $apellido, $usuario, $password, $direccion, $correo, $edad, $estudios); //Crea la instancia usando la clase

echo "Datos obtenidos de la Clase Usuario <br><br>";  //Muestra datos ingresados en la clase Usuario
echo "Nombre: {$usuario->nombre} <br>";
echo "Apellido: {$usuario->apellido} <br>";
echo "Usuario: {$usuario->usuario} <br>";
echo "Password: {$usuario->password} <br>";
echo "Direccion: {$usuario->direccion} <br>";
echo "Correo: {$usuario->correo} <br>";
echo "Edad: {$usuario->edad} <br>";
echo "Estudios: {$usuario->estudios} <br><br>";

echo "Datos del metodo POST";
if (count($_POST)>0) //Solo se ejecutará si ha enviado los datos por formulario
    {
        echo "<pre>";
        print_r($_POST); //Imprime el contenido de $_POST
        echo "</pre>";
    }
?>
</body>
</html>