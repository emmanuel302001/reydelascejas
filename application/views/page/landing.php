    <article class="home" id="home">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/contact.png') ?>" class="d-block w-100" height="400px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/contact.png') ?>" class="d-block w-100" height="400px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/images/contact.png') ?>" class="d-block w-100" height="400px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </article>

    <article class="services" id="services">
        <div class="container services-container">
            <hr> <br>
            <h3 style="text-align: center;">Nuestros Servicios</h3>
            <br>
            <div class="d-lg-flex">
                <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
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


    <article class="products" id="products">

       

    </article>

    <article class="aboutus" id="aboutus">
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
                if ($datos['getSedes'] != null) {
                    for ($i = 0; $i < count($datos['getSedes']); $i++) { ?>
                        <div class="col-sm-4 card-sites">
                            <div class="card">
                                <iframe src="<?php echo $datos['getSedes'][$i]['URL_MAPS'] ?>" height="250" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $datos['getSedes'][$i]['NOMBRE'] ?></h5>
                                    <p class="card-text"><?php echo $datos['getSedes'][$i]['DIRECCION'] ?></p>
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
                                    <img src="<?php echo base_url('assets/images/contact.png') ?>" class="d-block w-100" width="500" style="border-radius: 3%;" />
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

    <a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
        <i class="fab fa-whatsapp wpp-float"></i>
    </a>