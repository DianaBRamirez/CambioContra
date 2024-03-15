<?php
$mysqli = new mysqli("localhost", "root", "", "EPHash");
session_start();
if ($_POST) { //va a guardar lo que lleve en método post
    $usuario = $_POST['usuario']; //$ es para indicar que es variable en php
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios  WHERE usuario='$usuario'";
    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;
    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_C = md5($password);
        if ($password_bd == $pass_C) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            header("Location: bienvenida.php");
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('No existe el usuario en la base de datos');</script>";
    }
}

?> 