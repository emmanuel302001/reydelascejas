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
        <h3 style="text-align: center;"><?php echo $datos['servicios'][0]['categoria'] ?></h3>
        <br><br>
        <div class="row row-cols-md-3 g-4">
            <?php
            if ($datos['getSedes'] != null) {
                for ($i = 0; $i < count($datos['servicios']); $i++) { ?>
                    <div class="col-sm-4 card-sites">
                        <div class="card">
                            <img src="<?php echo base_url('assets/images/services/'.$datos['servicios'][$i]['imagen'])?>" alt="" srcset="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $datos['servicios'][$i]['nombre'] ?></h5>
                                <p class="card-text"><?php echo $datos['servicios'][$i]['descripción'] ?></p>
                                <p class="card-text">Valor: $ <?php echo $datos['servicios'][$i]['valor'] ?></p>
                                <a name="" id="" class="btn btn-bd-primary" href="#" role="button">Agendar Cita</a>

                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 2) . '/templates/footer.php'; ?>