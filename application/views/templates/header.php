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

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <script src="https://kit.fontawesome.com/aa225c6ab7.js" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1063890202031269');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1063890202031269&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top shadow-0">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url('principal') . '#home' ?>"><img src="<?php echo base_url('assets/images/logocompleto.png') ?>" width="160px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('principal') . '#home' ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('appointment') ?>">Reservar Cita</a>
                        </li>
                        <li class="nav-item me-3 me-lg-0 dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php for ($i = 0; $i < count($getServicios); $i++) { ?>
                                    <li><a class="dropdown-item" href="<?php echo base_url($getServicios[$i]['page']); ?>"><?php echo $getServicios[$i]['nombre']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('principal') . '#locationSites' ?>">Sedes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('principal') . '#contactus' ?>">Contactenos</a>
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
                                <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#loginFormModal">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                        <?php } elseif (array_key_exists('login', $user_data) && !$user_data['login']) { ?>
                            <li class="nav-item me-3 me-lg-0">
                                <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                            <?php } elseif ($user_data['login']) {
                            switch ($user_data['user_type']) {
                                case 'Administrador': ?>
                                    <li class="nav-item me-3 me-lg-0 dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-user"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?php echo base_url('usuario') . '#myprofile' ?>">Mi Perfil</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('ConfigSite') ?>">Agenda</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('configsite?p=dashboard') ?>">Configurar Sitio</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('LoginPage/logOut') ?>">Cerrar Sesión</a></li>
                                        </ul>
                                    </li>
                                <?php break;
                                case 'Usuario': ?>
                                    <li class="nav-item me-3 me-lg-0 dropdown">
                                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-user"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="<?php echo base_url('usuario') ?>">Mi Perfil</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('LoginPage/logOut') ?>">Cerrar Sesión</a></li>
                                        </ul>
                                    </li>
                            <?php break;

                                default:
                                    break;
                            } ?>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>