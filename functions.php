<?php 

/* devuelve el directorio de stilo de css, y se le asigna a temppath */
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
/*En esto concatenamos la carpeta images*/
define('IMAGES',TEMPPATH. "/images");

//define('HOME',bloginfo('url' ));

// Esto es para aderir una imágen destacada.
add_theme_support('post-thumbnails');
//add_image_size( $name, $width, $height, $crop );

/*========== Menu de navegacion ===============*/
function showMenu(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu', /* tambien lo que contiene el  Ul primero*/
        "container"=>"",  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
    );
    wp_nav_menu($args);
}

function logo(){
	$logo = IMAGES.'/logo.png';
	echo '<a id="logo" href="';
    echo bloginfo('url');
    echo '"><img src="'.$logo.'" alt="Misioneros del sagrado Corazón de Jesús"></a>';
}

function slogan(){
	echo '<a href="';
    echo bloginfo('url');
    echo '" id="slogan"><h1>Rectoria</h1><h2>Santa Rita</h2></a>';
}

include (TEMPLATEPATH . '/libs/entradas.php'); 
include (TEMPLATEPATH . '/libs/totop.php'); 
include (TEMPLATEPATH . '/libs/breadcrumb.php'); 

/*==== n Widget=====*/
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar'
    ));
}

include (TEMPLATEPATH . '/libs/paginacion.php'); 
paginacion();


?>