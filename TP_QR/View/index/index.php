<?php
include_once "../Structure/Header.php";
?>
<div class="container p-5">
    <form method="post" id="generarQR" class="needs-validation" action="../action/formAction.php"
          onsubmit="return validar();" novalidate>
        <div class="form-group p-1">
            <label for="tel">Número de teléfono</label>
            <div class="input-group">
                <input id="telefono" name="telefono" type="text" class="form-control" required>
            </div>
        </div>
        <div class="form-group p-1">
            <label for="msg">Mensaje</label>
            <textarea id="msg" name="msg" cols="40" rows="4" class="form-control" required></textarea>
        </div>
        <div class="form-group p-1">
            <button name="submit" type="submit" class="btn btn-primary">Generar QR</button>
        </div>
    </form>
</div>

<?php
include_once "../Structure/Footer.php";
?>
