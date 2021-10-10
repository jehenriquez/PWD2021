<?php
include_once "../../config.php";
$sesion = new Session();
if ($sesion->activa()) {
    header('Location: paginaSeguro.php');
    exit();
} else {
    $sesion->borrar();
}
include_once "../structure/Header.php";
if (!is_null($err = $sesion->getErr())) {
    echo "<div class='container mt-3 text-center'><div class='alert alert-danger'><h3>{$err}</h3></div></div>";
}
?>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 ">
                <div class="bg-dark mt-4 p-4 border rounded">
                    <form action="../Accion/verificarLogin.php" method="post" class="row g-3"
                          onsubmit="return verificarLogin();"
                          novalidate>
                        <h4 class="text-white text-center">Member login</h4>
                        <div class="col-12">
                            <label class="text-white">Usuario</label>
                            <input type="text" name="usnombre" id="usnombre" class="form-control" placeholder="Usuario">
                            <div class="invalid-feedback">Ingrese un usuario</div>
                        </div>
                        <div class="col-12">
                            <label class="text-white">Contraseña</label>
                            <input type="password" name="uspass" id="uspass" class="form-control"
                                   placeholder="Password">
                            <div class="invalid-feedback">Ingrese una contraseña</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </div>
                    </form>
                    <div class="row">
                        <form action="nuevoUsuario.php">
                            <div>
                                <button type="submit" class="btn btn-light w-100">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once "../structure/Footer.php";
?>