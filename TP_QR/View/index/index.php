<?php
include_once "../Structure/Header.php";

?>
<div class="container p-5">
    <form role="form" id="create" class="needs-validation" novalidate>
        <div class="col-sm-12 mb-2">
            <div class="row">
                <div class="col-6 col-md-3">

                    <div class="col-6 col-md-3">
                        <label>Tamaño</label>
                        <select name="size" class="custom-select">
                            <?php
                            for ($i = 8; $i <= 32; $i += 4) {
                                $value = $i * 25;
                                echo '<option value="' . $i . '" ' . ($matrixPointSize == $i ? 'selected' : '') . '>' . $value . '</option>';
                            }; ?>
                        </select>
                    </div>

                    <div class="col-6 col-md-3">
                        <label>Nivel de corrección de error</label>
                        <select name="level" class="custom-select">
                            <option value="L" <?php if ($errorCorrectionLevel == "L") echo "selected"; ?>>
                            </option>
                            <option value="M" <?php if ($errorCorrectionLevel == "M") echo "selected"; ?>>
                            </option>
                            <option value="Q" <?php if ($errorCorrectionLevel == "Q") echo "selected"; ?>>
                            </option>
                            <option value="H" <?php if ($errorCorrectionLevel == "H") echo "selected"; ?>>
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <ul class="nav nav-pills nav-fill" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link"
                               href="#text" role="tab" data-toggle="tab"><i class="fa fa-align-left"></i>
                                <span class="d-none d-sm-inline-block">Texto</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#whatsapp" role="tab" data-toggle="tab"><i class="fa fa-whatsapp"></i>
                                <span class="d-none d-sm-inline-block">WhatsApp</span></a>
                        </li>
                    </ul>
                </div> <!-- form group -->
            </div><!-- col sm12-->
    </form>
</div>

<?php
include_once "../Structure/Footer.php";
?>
