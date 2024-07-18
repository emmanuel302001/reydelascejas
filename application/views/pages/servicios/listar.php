<?php
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
$user_data = $this->session->all_userdata();

require_once  dirname(__DIR__, 2) . '/templates/header.php'; ?>
<style>
    .wrapper {
        display: flex;
        flex-flow: row wrap;
        justify-content: center;
    }

    .card {
        width: 420px;
        height: 340px;
        margin: 1em;
        perspective: 1500px;

        .content {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.8s cubic-bezier(0.75, 0, 0.85, 1);
        }
    }

    .more {
        display: none;

        &:checked~.content {
            transform: rotateY(180deg);
        }
    }

    .front,
    .back {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        border-radius: 6px;

        .inner {
            height: 100%;
            display: grid;
            padding: 1.5em;
            transform: translateZ(80px) scale(0.94);
        }
    }

    .front {
        background-color: #fff;
        background-size: cover;
        background-position: center center;

        &:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 6px;
            backface-visibility: hidden;
            background: linear-gradient(60deg,
                    rgba(67, 138, 243, 0.7),
                    rgba(255, 242, 166, 0.7));
        }

        .inner {
            grid-template-rows: 5fr 1fr 1fr 2fr 1fr;
            justify-items: center;
        }

        h2 {
            grid-row: 2;
            margin-bottom: 0.3em;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #fff;
            font-weight: 500;
            text-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
        }
    }

    .back {
        transform: rotateY(180deg);
        background-color: #fff;
        border: 2px solid rgb(240, 240, 240);

        .inner {
            grid-template-rows: 1fr 2fr 1fr 2fr 14fr 1fr 1fr;
            grid-template-columns: repeat(4, auto);
            grid-column-gap: 0.8em;
            justify-items: center;
        }

        .description {
            grid-row: 5;
            grid-column: 1/-1;
            font-size: 0.86em;
            border-radius: 5px;
            font-weight: 600;
            line-height: 1.4em;
            overflow: auto;
            color: #000;
            padding-right: 10px;
        }

        .location,
        .price {
            font-weight: 600;
            color: #000;
            grid-row: 1;
            font-size: 0.86em;
        }

        .location {
            grid-column: 1/3;
            justify-self: left;
        }

        .price {
            grid-column: 3/-1;
            justify-self: right;
        }

        .button {
            grid-column: 1/-1;
            justify-self: center;
        }
    }

    .button {
        grid-row: -1;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        cursor: pointer;
        display: block;
        padding: 0 1.5em;
        height: 3em;
        line-height: 2.9em;
        min-width: 3em;
        background-color: transparent;
        border: solid 2px #fff;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        left: 50%;
        backface-visibility: hidden;
        transition: 0.3s ease-in-out;
        text-shadow: 0 0 6px rgba(0, 0, 0, 0.3);

        &:hover {
            background-color: #fff;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
            text-shadow: none;
            color: #f6d365;
        }

        &.return {
            line-height: 3em;
            color: #f6d365;
            border-color: #f6d365;
            text-shadow: none;

            &:hover {
                background-color: #f6d365;
                color: #fff;
                box-shadow: none;
            }
        }
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: lighten(#355cc9, 20%);
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #355cc9;
    }
</style>
<main>
    <br><br><br>
    <div class="container">
        <hr>
        <br>
        <h3 style="text-align: center;"><?php echo $servicios[0]['categoria'] ?></h3>
        <br>
    </div>
    <div class="wrapper">
        <?php
        if ($servicios[0]['id_servicio'] != null) {
            foreach ($servicios as $key => $value) { ?>
                <div class="card">
                    <input type="checkbox" id="card<?php echo $value['id_servicio'] ?>" class="more" aria-hidden="true">
                    <div class="content">
                        <div class="front" style="background-image: url('<?php echo base_url('assets/images/services/') . $value['imagen'] ?>')">
                            <div class="inner">
                                <h2><?php echo $value['nombre']; ?></h2>
                                <label for="card<?php echo $value['id_servicio'] ?>" class="button" aria-hidden="true">
                                    Más detalles
                                </label>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="description">
                                    <p><?php echo $value['descripcion']; ?></p>
                                </div>
                                <div class="location">Duración: <?php echo $value['duracion']; ?> H</div>
                                <div class="price">$ <?php echo $value['valor']; ?></div>
                                <label for="card<?php echo $value['id_servicio'] ?>" class="button return" aria-hidden="true">
                                    <a href="" style="text-decoration: none; color: #000;">Agendar Cita</a>
                                </label>
                            </div>
                        </div>
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
</main>
<a href="https://wa.me/573005352120/?text=Hola, estoy interesad@ en agendar una cita" target="_blank" class="wppFloatButton">
    <i class="fab fa-whatsapp wpp-float"></i>
</a>
<?php require_once  dirname(__DIR__, 2) . '/templates/footer.php'; ?>