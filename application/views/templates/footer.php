<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<!-- Footer -->
<footer class="text-center">
    <!-- Grid container -->
    <div class="container">
        <hr>
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- WhatsApp -->
            <a class="btn btn-floating m-1 netButtons" target="_blank" style="background-color: #25d366" href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" role="button"><i class="fab fa-whatsapp"></i></a>
            <!-- Facebook -->
            <a class="btn btn-floating m-1 netButtons" target="_blank" style="background-color: #1877F2" href="https://www.facebook.com/elreydelascejas?mibextid=ZbWKwL" role="button"><i class="fab fa-facebook-f"></i></a>
            <!-- Instagram -->
            <a class="btn btn-floating m-1 netButtons" target="_blank" style="background-color: #E1306C" href="https://www.instagram.com/elreydelascejasoficial?igsh=MTNveTZoMmRjMGtjZA==" role="button"><i class="fab fa-instagram"></i></a>
            <!-- TikTok -->
            <a class="btn btn-floating m-1 netButtons" target="_blank" style="background-color: #000" href="https://www.tiktok.com/@elreydelascejas?_t=8kbY1xn4zY6&_r=1" role="button"><i class="fab fa-tiktok"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Recibir actualizaciones</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-bd-primary mb-4">
                            Suscribirse
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->


        <!-- Section: Text -->
        <!-- <section class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti dicta,
                aliquam sequi voluptate quas.
            </p>
        </section> -->
        <!-- Section: Text -->


    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 mask-custom">
        © 2024 Copyright
    </div>
    <!-- Copyright -->

</footer>
<!-- Modal -->
<!-- Login -->
<div class="modal fade" id="loginFormModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card-body">
                            <center><img src="<?php echo base_url('assets/images/logo_vertical.png') ?>" width="250px"></center>
                            <br>
                            <form id="frm_login">
                                <div class="form-outline mb-4">
                                    <label for="username_login">Correo Electrónico</label>
                                    <input id="username_login" name="username_login" type="text" placeholder="ejemplo@elreydelascejas.com" class="form-control" required>
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="passwd_login">Contraseña</label>
                                    <div class="input-group mb-4">
                                        <input id="passwd_login" type="password" placeholder="Contraseña" name="passwd_login" class="form-control" required>
                                        <span class="input-group-text" style="cursor: pointer">
                                            <i class="fa-solid fa-eye-slash" id="togglepassword_login"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <div class="row mb-4">
                                <div class="col">
                                    <a href="" data-bs-target="#recpasswdModal" data-bs-toggle="modal">Recuperar Contraseña</a>
                                </div>
                            </div>
                            <button class="btn btn-bd-primary" type="button" id="bn_login" style="width: 100%;">Ingresar</button>
                            <div class="text-center">
                                <br>
                                <p>¿No tienes cuenta? <a href="" data-bs-target="#registerModal" data-bs-toggle="modal">Registrarse</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Register -->
<div class="modal fade" id="registerModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Registro
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card-body">
                            <center><img src="<?php echo base_url('assets/images/logo_vertical.png') ?>" width="250px"></center>
                            <br>
                            <form id="frm_register">
                                <div class="input-group mb-4">
                                    <span class="input-group-text">Nombres</span>
                                    <input type="text" class="form-control" id="name_register" name="name_register" placeholder="Jhonson" required>
                                    <span class="input-group-text">Apellidos</span>
                                    <input type="text" class="form-control" id="lastname_register" name="lastname_register" placeholder="Espinosa" required>
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">Correo Electrónico</span>
                                    <input type="email" class="form-control" id="email_register" name="email_register" placeholder="ejemplo@elreydelascejas.com" required>
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">Contraseña</span>
                                    <input id="passwd_register" type="password" name="passwd_register" class="form-control" placeholder="Contraseña" required>
                                    <span class="input-group-text" style="cursor: pointer">
                                        <i class="fa-solid fa-eye-slash" id="togglepassword_rec"></i>
                                    </span>
                                </div>
                        </div>
                        </form>
                        <button class="btn btn-bd-primary" type="button" id="btn_register" style="width: 100%;">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Reset Password -->
<div class="modal fade" id="recpasswdModal" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Recuperar Contraseña
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="card-body">
                            <center><img src="<?php echo base_url('assets/images/logo_vertical.png') ?>" width="250px"></center>
                            <br>
                            <form id="frm_recpass">
                                <div class="form-outline mb-4">
                                    <label for="username_recpass">Correo Electrónico</label>
                                    <input id="username_recpass" name="username_recpass" type="text" placeholder="ejemplo@elreydelascejas.com" class="form-control" required>
                                </div>
                            </form>
                            <button class="btn btn-bd-primary" type="button" id="bn_recpass" style="width: 100%;">Enviar Correo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo base_url('/assets/js/loginJs.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/default.js') ?>"></script>
</body>

</html>