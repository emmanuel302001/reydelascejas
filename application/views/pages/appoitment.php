<?php
date_default_timezone_set('America/Bogota');
$user_data = $this->session->all_userdata();
require_once  dirname(__DIR__, 1) . '/templates/header.php'; ?>
<main>
    <br><br><br><br>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <form action="#" method="post">
                <div class="col-xl-12">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" />
                                        <small id="helpId" class="form-text text-muted">Help text</small>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <h5>Envianos un mensaje</h5>
                                    <br>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactFullName">Nombre Completo</label>
                                        <input type="text" id="fullName" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactEmail">Correo Electrónico</label>
                                        <input type="email" id="contactEmail" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactPhone">Teléfono</label>
                                        <input type="number" id="contactPhone" class="form-control" placeholder="Juan Perez" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="contactMessage">Mensaje</label>
                                        <textarea id="contactMessage" class="form-control"></textarea>
                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-bd-primary btn-block main-button" type="submit">Enviar Mensaje</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 1) . '/templates/footer.php'; ?>