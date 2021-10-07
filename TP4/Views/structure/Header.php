<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>TP4 - Autos</title>
</head>
<body class="d-flex flex-column min-vh-100">
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="../index/Index.php">TP4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/verAutos.php">Ver autos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/buscarAuto.php">Buscar Auto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/listaPersonas.php">Lista Personas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/nuevaPersona.php">Nueva persona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/nuevoAuto.php">Nuevo Auto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/cambioDuenio.php">Cambio Dueño</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index/buscarPersona.php">Buscar Persona</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>
<?php
                include_once("../../configuracion.php");
                ?>
