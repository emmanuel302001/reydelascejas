<!doctype html>
<html lang="es">

<head>
    <title>El Rey de las cejas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon section -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo base_url('recursos/favicon/site.webmanifest') ?>">


    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <script src="https://kit.fontawesome.com/aa225c6ab7.js" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
            <div class="container">
                <a class="navbar-brand" href="#home"><img src="<?php echo base_url('assets/images/logo1.png') ?>" width="180px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav-underline navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#locationSites">Sedes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Contactenos</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.facebook.com/elreydelascejas?mibextid=ZbWKwL" target="_blank">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.instagram.com/elreydelascejasoficial?igsh=MTNveTZoMmRjMGtjZA==" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.tiktok.com/@elreydelascejas?_t=8kbY1xn4zY6&_r=1" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <?php
                        if (!array_key_exists('login', $user_data)) { ?>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" href="!" data-bs-toggle="modal" data-bs-target="#loginFormModal">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                        <?php } elseif (array_key_exists('login', $user_data) && !$user_data['login']) { ?>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                        <?php } elseif ($user_data['login']) { ?>
                            <li class="nav-item me-3 me-lg-0 dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Mi Perfil</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('ConfigSite')?>">Agenda</a></li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('ConfigSite')?>">Configurar Sitio</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo base_url('LoginPage/logOut')?>">Cerrar Sesión</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>