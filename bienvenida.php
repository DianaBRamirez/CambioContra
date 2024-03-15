<?php
session_start();
if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
    include('public/header.php');
} else {
    header("Location: index.php");
    exit();
}
?>

<nav class="navbar navbar-expand-lg" style="background-color: #d58cfc;">
    <div class="container-fluid">
        <a class="navbar-brand text-black" href="#">Salvando el cuatri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-black"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Contáctanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container  mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-purple text-black">
                    <h4 class="text-center" >¡Bienvenido a "Sufriendo por el cuatri .com"!</h4>
                </div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert" style="background-color:#0000; color: #000000;">
                        <h5 class="text-center">Hola, <?php echo $nombre; ?></h5>
                    </div>
                    <div class="text-center mt-4">
                        <a href="sesiones/logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('public/footer.php');
?>