<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>TP2 - EJ4</title>
</head>
<body>
<?php
include_once "../Header.php";
include_once "../../../Controllers/verificaCinema.php";

$controller = new verificaCinema();
if (!empty($_POST))
    $resp = $controller->verificarDatos($_POST);
?>

<div class="container">
    <?php
    echo "<div>{$resp}</div>";
    ?>
</div>


<?php
include_once "../Footer.php";
?>
</body>
</html>


