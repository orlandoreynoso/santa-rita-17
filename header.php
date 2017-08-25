<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/analitycs.js'></script>	
	<?php wp_head(); ?>
</head>
<body>
	<div id="contenedor">

	<header>
		<div class="zerogrid" id="header">
			<div id="ls">
				<?php logo(); ?>
				<?php slogan(); ?>
			</div>

			<div id="sm">
				<div id="ubicacion">
					<span class="icon-location2"></span>
					<span id="texto">Mixco, Guatemala</span>
				</div>
				<div id="search"><?php  get_search_form(); ?></div>
			</div>			
		</div>	
	</header>
	<nav>
		<div class="zerogrid" id="cuadro_menu">
			<?php showMenu(); ?>
		</div>			
	</nav>