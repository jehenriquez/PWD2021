<?php
include_once "../Structure/Header.php";
$errorCorrectionLevel = "";
$matrixPointSize = "";
?>
<div class="container p-5">
    <form method="post" id="generarQR" class="needs-validation" action="../action/formAction.php"
          onsubmit="return validar();" novalidate>
        <div class="form-group lg">
            <label for="errorLevel">Nivel de corrección de error</label>
            <div>
                <select id="errorLevel" name="errorLevel" class="custom-select" required>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="Q">Q</option>
                    <option value="H">H</option>
                </select>
            </div>
        </div>
        <div class="form-group p-1">
            <label for="tel">Número de teléfono</label>
            <div class="input-group">
                <input id="tel" name="tel" type="text" class="form-control" required>
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
