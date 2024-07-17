    <section id="home" class="home">
        <br>
        <div id="carouselExampleCaptions" class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/banner/exampleBanner.gif') ?>" class="d-block w-100" height="500px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;"></h5>
                        <a href="<?php echo base_url('appointment') ?>" class="btn btn-bd-primary">Agenda tu cita aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <article class="services" id="services">
            <div class="container services-container">
                <hr> <br>
                <h3 style="text-align: center;">Nuestros Servicios</h3>
                <br>
                <div class="d-lg-flex">
                    <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
                        <?php foreach ($getServicios as $key => $servicios) { ?>
                            <div class="col1 me-md-4 mb-md-0 mb-5">
                                <div class="card pb-4 services-card">
                                    <p class="h4 pt-4"><?php echo $servicios['nombre']; ?></p>
                                    <img src="<?php echo base_url('assets/images/services/') . $servicios['imagen'] ?>" class="d-block w-100" height="300">
                                    <br>
                                    <p class="p1 text-muted">
                                        <?php echo $servicios['descripcion']; ?>
                                    </p>
                                    <span class="fas fa-arrow-right" onclick="location.href='<?php echo base_url() . $servicios['page'] ?>';"></span>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </article>

        <!-- Sección de sedes -->
        <article class="locationSites" id="locationSites">
            <div class="container">
                <hr>
                <br>
                <h3 style="text-align: center;">Conoce Nuestras Sedes</h3>
                <br><br>
                <div class="row row-cols-md-3 g-4">
                    <?php
                    if ($getSedes != null) {
                        for ($i = 0; $i < count($getSedes); $i++) { ?>
                            <div class="col-sm-4 card-sites">
                                <div class="card">
                                    <iframe src="<?php echo $getSedes[$i]['URL_MAPS'] ?>" height="250" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $getSedes[$i]['NOMBRE'] ?></h5>
                                        <p class="card-text"><?php echo $getSedes[$i]['DIRECCION'] ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </article>

        <!-- Formulario de contacto -->
        <article class="contactus" id="contactus">
            <div class="container">
                <hr>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-12">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <img src="<?php echo base_url('assets/images/logo_circle.png') ?>" class="d-block w-100" width="500" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <form action="#" method="post">
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
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>