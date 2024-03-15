<?php
include('connection/conexion.php');
date_default_timezone_set('America/Mexico_City');

function login($user) {
    global $mysqli; 
    $token= 'NULL';
    $query = "SELECT * FROM usuarios WHERE usuario='$user' ";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        $hoy = date("Y-m-d");  
        
        $token = sha1($fila['usuario'].$fila['password'].$hoy);
        $query2 = "UPDATE usuarios SET token='$token', fechaCaduca='$hoy' WHERE id=".$fila['id']; //tambien cambiar el fechacaduca
        $resultado=$mysqli->query($query2);

        return $token;
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
        $token = login($usuario);

        if ($token) {
            // Redirige al usuario a la página CambiarContra.php con el token como parámetro en la URL
            header("Location: http://127.0.0.1/desarrolloWeb/CambioContra/ventanaCambiarContra.php?token=$token");
            exit();
        } else {
            echo "Usuario no encontrado.";
        }
    } else {
        echo "Correo electrónico no proporcionado.";
    }
}
    


?>