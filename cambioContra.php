
<?php
include('connection/conexion.php');
global $mysqli;
date_default_timezone_set('America/Mexico_City');
function getUserIdByToken($token, $mysqli)
{
    $query = "SELECT id FROM usuarios WHERE token='$token'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['id'];
    } else {
        return false;
    }
}


if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $userId = getUserIdByToken($token, $mysqli);

    if ($userId) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["password1"]) && isset($_POST["password2"])) {
                $password1 = $_POST["password1"];
                $password2 = $_POST["password2"];

                $hoy = date("Y-m-d");
                if ($password1 === $password2) {
                    $hashedPassword = md5($password1);
                    $query = "UPDATE usuarios SET password='$hashedPassword' WHERE id=$userId and fechaCaduca <='$hoy'";
                    if ($mysqli->query($query) === TRUE) {
                        echo "<script>alert('Contraseña actualizada exitosamente.');</script>";
                    } else {
                        echo "Error al actualizar la contraseña: " . $mysqli->error;
                    }
                } else {
                    echo "<script>alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');</script>";
                
                }
            }
        }
    } else {
        echo "<script>alert('Token no válido.');</script>";

    }
} else {
    echo "<script>alert('No se ha proporcionado un token.');</script>";
  
}


$mysqli->close();
?>

