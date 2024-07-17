<?php
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
$user_data = $this->session->all_userdata();

require_once  dirname(__DIR__, 2) . '/templates/header.php'; ?>
<main>
    <br><br><br><br>
    <div class="container">
        <hr>
        <br>
        <h3 style="text-align: center;"><?php echo $servicios[0]['categoria'] ?></h3>
        <br><br>
        <div class="row row-cols-md-3 g-4">
            <?php
            if ($servicios[0]['id_servicio'] != null) {
                foreach ($servicios as $key => $value) { ?>
                    <div class="col-sm-4">
                        <div class="card pb-4 services-card">
                            <img src="<?php echo base_url('assets/images/services/') . $value['imagen'] ?>" class="d-block w-100" height="300">
                            <p class="h4 pt-4"><?php echo $value['nombre']; ?></p>
                            <br>
                            <p class="card-text"><?php echo $value['descripción'] ?></p>
                            <p class="card-text">Valor: $ <?php echo $value['valor'] ?></p>
                            <a name="" id="" class="btn btn-bd-primary" href="#" role="button">Agendar Cita</a>
                        </div>
                    </div>
                <?php
                }
            } else { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="h2 mb-2">¡Oops!.</h3>
                                <p class="mb-5">No tenemos información para mostrar.</p>
                                <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="<?php echo base_url() ?>" role="button">Volver al Inicio</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 2) . '/templates/footer.php'; ?>