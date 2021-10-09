<?php
include_once "../../config.php";
$sesion = new Session();
if ($sesion->activa()) {
    header('Location: paginaSeguro.php');
    exit();
}
include_once "../structure/Header.php";
?>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <div class="bg-primary mt-4 p-4 border rounded">
                    <form action="../Accion/verificarLogin.php" method="post" class="row g-3"
                          onsubmit="return verificarLogin();"
                          novalidate>
                        <h4 class="text-dark text-center">Member login</h4>
                        <div class="col-12">
                            <label class="text-dark">Usuario</label>
                            <input type="text" name="usnombre" id="usnombre" class="form-control" placeholder="Usuario">
                            <div class="invalid-feedback">Ingrese un usuario</div>
                        </div>
                        <div class="col-12">
                            <label class="text-dark">Contraseña</label>
                            <input type="password" name="uspass" id="uspass" class="form-control"
                                   placeholder="Password">
                            <div class="invalid-feedback">Ingrese una contraseña</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light float-end">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include_once "../structure/Footer.php";
?>