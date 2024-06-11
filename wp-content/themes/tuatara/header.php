

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-qTqRVvTt3EZx6Z9z89+OQ2Ay9g8+whvzDVoKGIpwXsB8JsPzSBVKT7uF5lCa34wC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/bootstrap.css">


    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
    </head>
<body <?php body_class(); ?> style="font-family: 'Mulish', sans-serif;">

<header id="header" role="banner" style="background-image: url('<?php echo esc_url(get_theme_mod('encabezado_fondo', '')); ?>');    display: block;" >
    
    <div class="container">
    <div class="row">
        <div class="col-md-3">
    <div class="logo">
        <!-- Agrega aquí el código para mostrar el logo -->
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
    </div>
        </div>
        <div class="col-md-8">
    <nav class="menu menunav">
       <?php
wp_nav_menu(array(
    'theme_location' => 'menu-principal',
    'container' => 'nav',
    'container_class' => 'menu-principal-class', // Puedes personalizar esta clase
    'menu_class' => 'lista-menu', // Puedes personalizar esta clase
));
?>

 <div>
        ES | EN
        
    </div>
    </nav>
    
    
   
        </div>
    </div>
</div>

 <div class="container callfrom">
        <div class="encabezado-contenido row">
            <div class="encabezado-izquierda col-md-5">
                <h1 style="max-width: 250px;"><?php echo get_theme_mod('encabezado_titulo1', ''); ?></h1>
                
                <p><?php echo get_theme_mod('encabezado_descripcion1', ''); ?></p>
                <br>
                <!-- Formulario de contacto -->
                <form action="#" method="post">
                    <input type="text" name="nombre" placeholder="Nombre" style="border-radius: 25px; padding: 5px 30px; border: none;">
                    <button type="submit" style="background-color: #e9467b; border-radius: 25px; padding: 5px 50px; border: none; margin-left: -40px; color: white;">Contactar</button>
                </form>
            </div>
            
            
            <div class="encabezado-derecha col-md-7">
            </div>
        </div>
    </div>

    
</header>
