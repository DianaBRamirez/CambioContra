<?php
include 'sesiones/login.php';
include 'public/header.php';
?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-body">
                                <center>
                                    <h4 class="mt-3">Inicio de sesión</h4>
                                    <i class="bi bi-person-fill " style="font-size: 2em;"></i>
                                </center>
                                <form method="POST" action="">
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Correo:</label><input class="form-control py-2" id="usuario" name="usuario" type="email" placeholder="Ingresa tu correo" /></div>
                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Contraseña:</label><input class="form-control py-2" id="password" name="password" type="password" placeholder="Ingresa tu contraseña" /></div>
                                    <a href="ventanaGenerarToken.php">¿Olvidaste tu contraseña?</a>
                                    <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">

                                        <button type="submit" class="btn btn-outline-info">Entrar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php
include 'public/footer.php';
?>

