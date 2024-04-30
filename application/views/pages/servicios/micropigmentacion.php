<?php
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
$user_data = $this->session->all_userdata();
require_once  dirname(__DIR__, 2) . '/templates/header.php'; ?>
<main>
    <br><br><br><br>
    <article class="services" id="services">
        <div class="container services-container">
            <hr> <br>
            <h3 style="text-align: center;">Nuestros Servicios</h3>
            <br>
            <div class="d-lg-flex">
                <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
                    <div class="col1 me-md-4 mb-md-0 mb-5">
                        <div class="card pb-4 services-card">
                            <p class="h4 pt-4">Academia</p>
                            <img src="<?php echo base_url('assets/images/micropigmentacion.jpg') ?>" class="d-block w-100" height="300">
                            <br>
                            <p class="p1 text-muted">
                                Somos especialistas en micropigmentación MASCULINA y FEMENINA de cejas, labios, ojos, capilar, barbas
                            </p>
                            <span class="fas fa-arrow-right"></span>
                        </div>
                    </div>
                    <div class="col1 me-md-4 mb-md-0 mb-5">
                        <div class="card pb-4 services-card">
                            <p class="h4 pt-4">Micropigmentación</p>
                            <img src="<?php echo base_url('assets/images/micropigmentacion.jpg') ?>" class="d-block w-100" height="300">
                            <br>
                            <p class="p1 text-muted">
                                Somos especialistas en micropigmentación MASCULINA y FEMENINA de cejas, labios, ojos, capilar, barbas
                            </p>
                            <span class="fas fa-arrow-right" onclick="location.href='#';"></span>
                        </div>
                    </div>
                    <div class="col1 me-md-4 mb-md-0 mb-5">
                        <div class="card pb-4 services-card">
                            <p class="h4 pt-4">Otros Servicios</p>
                            <img src="<?php echo base_url('assets/images/micropigmentacion.jpg') ?>" class="d-block w-100" height="300">
                            <br>
                            <p class="p1 text-muted">
                                Somos especialistas en micropigmentación MASCULINA y FEMENINA de cejas, labios, ojos, capilar, barbas
                            </p>
                            <span class="fas fa-arrow-right"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 2) . '/templates/footer.php'; ?>