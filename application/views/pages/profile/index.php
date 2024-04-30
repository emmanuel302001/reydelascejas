<?php
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
$user_data = $this->session->all_userdata();
require_once  dirname(__DIR__, 2) . '/templates/header.php'; ?>
<main>
    <br><br><br><br>
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Imagen de perfil</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="150px">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG o PNG no mayor a 5 MB</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-bd-primary" type="button">Nueva Foto</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detalles de la cuenta</div>
                    <div class="card-body">
                        <form id="frm_profile" method="post">
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="name_profile">Nombres</label>
                                    <input class="form-control" id="name_profile" name="name_profile" type="text" value="<?php echo $datos['user_profile']['NOMBRES'] ?>">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="lastname_profile">Apellidos</label>
                                    <input class="form-control" id="lastname_profile" name="lastname_profile" type="text" value="<?php echo $datos['user_profile']['APELLIDOS'] ?>">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="location_profile">Dirección</label>
                                    <input class="form-control" id="location_profile" name="location_profile" type="text" value="<?php echo $datos['user_profile']['DIRECCION'] ?>">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="city_profile">Ciudad</label>
                                    <input class="form-control" id="city_profile" name="city_profile" type="text" value="<?php echo $datos['user_profile']['CIUDAD'] ?>">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email_profile">Correo Electrónico</label>
                                <input class="form-control" id="email_profile" name="email_profile" type="email" value="<?php echo $datos['user_profile']['EMAIL'] ?>" readonly>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="phone_profile">Celular</label>
                                    <input class="form-control" id="phone_profile" name="phone_profile" type="number" value="<?php echo $datos['user_profile']['TELEFONO'] ?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="birthday_profile">Cumpleaños</label>
                                    <input class="form-control" id="birthday_profile" type="date" name="birthday_profile" value="<?php echo $datos['user_profile']['BIRTHDAY'] ?>">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="documento_profile">Documento</label>
                                    <input class="form-control" id="documento_profile" name="documento_profile" type="number" value="<?php echo $datos['user_profile']['IDENTIFICACION'] ?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="passwd_profile">Contraseña</label>
                                    <input class="form-control" id="passwd_profile" type="password" name="passwd_profile" value="">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-bd-primary" type="button" id="btn_updateprofile">Actualizar Información</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 2) . '/templates/footer.php'; ?>