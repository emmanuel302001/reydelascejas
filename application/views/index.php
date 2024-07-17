<?php
date_default_timezone_set('America/Bogota');
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
$user_data = $this->session->all_userdata();

require_once 'templates/header.php'; ?>
<main>
	<section class="container-pages">
		<?php require_once 'pages/landing.php' ?>
	</section>
</main>
<?php require_once 'templates/footer.php'; ?>