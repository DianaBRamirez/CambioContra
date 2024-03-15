<?php
include 'cambioContra.php';
if (!isset($_GET['token'])) {
    echo "No se ha proporcionado un token válido.";
}
?>

<?php
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
                                    <h4 class="mt-3">Cambio de contraseña</h4>
                                </center>

                                <form method="POST" action="">

                                    <div class="form-group">
                                        <label for="password1" class="small mb-1">Contraseña:</label>
                                        <input type="password" id="password1" name="password1" class="form-control py-2" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password2" class="small mb-1">Confirmar Contraseña:</label>
                                        <input type="password" id="password2" name="password2" class="form-control py-2" required>
                                    </div>
                                    <a href="index.php">Iniciar sesión</a>
                                    <div class="form-group d-flex align-items-center justify-content-center mt-4 mb-0">

                                        <button type="submit" class="btn btn-outline-info">Guardar cambios</button>

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