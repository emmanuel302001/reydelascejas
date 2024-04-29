<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

require_once 'templates/header.php'; ?>
<main>
	<section class="container-pages">
		<?php require_once 'page/landing.php' ?>
	</section>
</main>
<?php require_once 'templates/footer.php'; ?>