<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
} else if ($sesion->getRol()->getIdRol() != 1) {
    header('Location: errorAcceso.php');
    exit();
}

$datos = data_submitted();

if (empty($datos)) {
    header('Location: paginaSeguro.php');
    exit();
} else {
    $controller = new UsuarioController();
    $user = $controller->buscar($datos);
}

include_once "../structure/Header.php";


?>


    <div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Modificar Usuario</h3>
        </div>
        <form id="formUser" name="formUser" method="post" action="../Accion/actualizarLogin.php"
              onsubmit="return actualizarDatos();" novalidate>
            <div class="form-floating mb-3">
                <input class="form-control" id="idusuario" name="idusuario" type="text"
                       value="<?php echo $datos['idusuario']; ?>" hidden>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" id="usnombre" name="usnombre" type="text" placeholder="Username"
                       value="<?php echo $user[0]->getUsNombre() ?>" required>
                <label for="usnombre">Username</label>
                <div class="invalid-feedback">Ingrese un username correcto.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="uspass" name="uspass" type="text" placeholder="password" required>
                <label for="uspass">Password</label>
                <div class="invalid-feedback">Ingrese una password válida: min 8 caracteres, letras y numeros.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="usmail" name="usmail" type="text" placeholder="email"
                       value="<?php echo $user[0]->getUsMail() ?>" required>
                <label for="usmail">Email</label>
                <div class="invalid-feedback">Ingrese un email válida.</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Cambiar</button>
            </div>
        </form>
    </div>

    <script rel="script" src="../js/validaciones.js"></script>


<?php
include_once "../structure/Footer.php";
?>