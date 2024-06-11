<?php
// functions.php

// Cargar estilos y scripts
function cargar_recursos() {
        wp_enqueue_script('jquery');

    
    wp_enqueue_style('style', get_stylesheet_uri());
    // Puedes agregar más enqueues aquí
}
add_action('wp_enqueue_scripts', 'cargar_recursos');





function agregar_soporte_logo() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'agregar_soporte_logo');

function registrar_menu_principal() {
    register_nav_menu('menu-principal', __('Menú Principal', 'tuatara'));
}



add_action('after_setup_theme', 'registrar_menu_principal');





function tuatara_personalizador($wp_customize) {
    // Sección para el fondo del encabezado
    $wp_customize->add_section('encabezado_seccion', array(
        'title' => __('Encabezado', 'tuatara'),
        'priority' => 30,
    ));

    // Configuración para la imagen de fondo del encabezado
    $wp_customize->add_setting('encabezado_fondo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Control para seleccionar la imagen de fondo del encabezado
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'encabezado_fondo', array(
        'label' => __('Imagen de fondo del encabezado', 'tuatara'),
        'section' => 'encabezado_seccion',
        'settings' => 'encabezado_fondo',
    )));
}

add_action('customize_register', 'tuatara_personalizador');








function tuatara_personalizador_contenido1($wp_customize) {
    $wp_customize->add_section('encabezado_contenido_seccion1', array(
        'title' => __('Banner del Encabezado', 'tuatara'),
        'priority' => 35,
    ));

    // Campo para la imagen de la derecha
    $wp_customize->add_setting('encabezado_imagen_derecha1', array(
        'default' => '',
        'transport' => 'refresh',
    ));

  
    // Campos para el título y descripción
    $wp_customize->add_setting('encabezado_titulo1', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_titulo1', array(
        'label' => __('Título del encabezado', 'tuatara'),
        'section' => 'encabezado_contenido_seccion1',
        'type' => 'text',
    ));

    $wp_customize->add_setting('encabezado_descripcion1', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_descripcion1', array(
        'label' => __('Descripción del encabezado', 'tuatara'),
        'section' => 'encabezado_contenido_seccion1',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'tuatara_personalizador_contenido1');











function tuatara_personalizador_contenido($wp_customize) {
    $wp_customize->add_section('encabezado_contenido_seccion', array(
        'title' => __('Contenido del Encabezado', 'tuatara'),
        'priority' => 35,
    ));

    // Campo para la imagen de la izquierda con opción de clase
    $wp_customize->add_setting('encabezado_imagen_izquierda', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'encabezado_imagen_izquierda', array(
        'label' => __('Imagen de la izquierda', 'tuatara'),
        'section' => 'encabezado_contenido_seccion',
        'settings' => 'encabezado_imagen_izquierda',
    )));

    // Campo para la clase de la imagen de la izquierda
    $wp_customize->add_setting('encabezado_imagen_izquierda_clase', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_imagen_izquierda_clase', array(
        'label' => __('Clase de la imagen de la izquierda', 'tuatara'),
        'section' => 'encabezado_contenido_seccion',
        'type' => 'text',
    ));

    // Campos para el título, subtítulo y descripción
    $wp_customize->add_setting('encabezado_titulo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_titulo', array(
        'label' => __('Título del encabezado', 'tuatara'),
        'section' => 'encabezado_contenido_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('encabezado_subtitulo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_subtitulo', array(
        'label' => __('Subtítulo del encabezado', 'tuatara'),
        'section' => 'encabezado_contenido_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('encabezado_descripcion', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('encabezado_descripcion', array(
        'label' => __('Descripción del encabezado', 'tuatara'),
        'section' => 'encabezado_contenido_seccion',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'tuatara_personalizador_contenido');

function tuatara_personalizador_faqs($wp_customize) {
    // Sección de FAQs
    $wp_customize->add_section('faqs_seccion', array(
        'title' => __('Sección Full Service', 'tuatara'),
        'priority' => 70,
    ));



// Campo para la imagen de la sección de FAQs
$wp_customize->add_setting('faqs_seccion_imagen', array(
    'default' => '',
    'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'faqs_seccion_imagen', array(
    'label' => __('Imagen de la Sección de FAQs', 'tuatara'),
    'section' => 'faqs_seccion',
    'settings' => 'faqs_seccion_imagen',
)));



    // Configuración para los elementos de FAQs
    for ($i = 1; $i <= 3; $i++) {
        // Campos para título y descripción de cada FAQ
        $wp_customize->add_setting('faqs_titulo_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('faqs_titulo_' . $i, array(
            'label' => __('Título FAQ ' . $i, 'tuatara'),
            'section' => 'faqs_seccion',
            'type' => 'text',
        ));

        $wp_customize->add_setting('faqs_descripcion_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));

        $wp_customize->add_control('faqs_descripcion_' . $i, array(
            'label' => __('Descripción FAQ ' . $i, 'tuatara'),
            'section' => 'faqs_seccion',
            'type' => 'textarea',
        ));

        // Campos para términos/tags de cada FAQ
        for ($j = 1; $j <= 4; $j++) {
            $wp_customize->add_setting('faqs_tag_' . $i . '_' . $j, array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('faqs_tag_' . $i . '_' . $j, array(
                'label' => __('Tag ' . $j . ' FAQ ' . $i, 'tuatara'),
                'section' => 'faqs_seccion',
                'type' => 'text',
            ));
        }
    }
}

add_action('customize_register', 'tuatara_personalizador_faqs');


// Función para personalizar el tema
function tuatara_personalizador_seccion_destacada($wp_customize) {
    // Sección Destacada
    $wp_customize->add_section('destacada_seccion', array(
        'title' => __('Sección Portafolio', 'tuatara'),
        'priority' => 80,
    ));

    // Fondo de la sección
    $wp_customize->add_setting('destacada_fondo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'destacada_fondo', array(
        'label' => __('Fondo de la Sección', 'tuatara'),
        'section' => 'destacada_seccion',
        'settings' => 'destacada_fondo',
    )));

    // Imagen a la derecha
    $wp_customize->add_setting('destacada_imagen_derecha', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'destacada_imagen_derecha', array(
        'label' => __('Imagen a la Derecha', 'tuatara'),
        'section' => 'destacada_seccion',
        'settings' => 'destacada_imagen_derecha',
    )));

    // Nombre del proyecto
    $wp_customize->add_setting('destacada_nombre_proyecto', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('destacada_nombre_proyecto', array(
        'label' => __('Nombre del Proyecto', 'tuatara'),
        'section' => 'destacada_seccion',
        'type' => 'text',
    ));

    // Diseño
    $wp_customize->add_setting('destacada_diseno', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('destacada_diseno', array(
        'label' => __('Diseño', 'tuatara'),
        'section' => 'destacada_seccion',
        'type' => 'textarea',
    ));

    // Descripción
    $wp_customize->add_setting('destacada_descripcion', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('destacada_descripcion', array(
        'label' => __('Descripción', 'tuatara'),
        'section' => 'destacada_seccion',
        'type' => 'textarea',
    ));

    // Botón de Acción
    $wp_customize->add_setting('destacada_boton_accion', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url',
    ));

    $wp_customize->add_control('destacada_boton_accion', array(
        'label' => __('URL del Botón de Acción', 'tuatara'),
        'section' => 'destacada_seccion',
        'type' => 'url',
    ));
}

// Agregar la función al hook customize_register
add_action('customize_register', 'tuatara_personalizador_seccion_destacada');



// Función para personalizar el tema
function tuatara_personalizador_happy_friends($wp_customize) {
    // Sección Happy Friends
    $wp_customize->add_section('happy_friends_seccion', array(
        'title' => __('Sección Happy Friends', 'tuatara'),
        'priority' => 90,
    ));

    // Columna 1 - Título
    $wp_customize->add_setting('happy_friends_titulo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('happy_friends_titulo', array(
        'label' => __('Título', 'tuatara'),
        'section' => 'happy_friends_seccion',
        'type' => 'text',
    ));

    // Columna 1 - Pestañas (Colombia y World Wide)
    for ($i = 1; $i <= 2; $i++) {
        $wp_customize->add_setting('happy_friends_tab_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('happy_friends_tab_' . $i, array(
            'label' => __('Pestaña ' . $i, 'tuatara'),
            'section' => 'happy_friends_seccion',
            'type' => 'text',
        ));

        $wp_customize->add_setting('happy_friends_descripcion_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_kses_post',
        ));

        $wp_customize->add_control('happy_friends_descripcion_' . $i, array(
            'label' => __('Descripción ' . $i, 'tuatara'),
            'section' => 'happy_friends_seccion',
            'type' => 'textarea',
        ));
    }

    // Columna 2 - Imágenes (10 imágenes)
    for ($j = 1; $j <= 10; $j++) {
        $wp_customize->add_setting('happy_friends_imagen_' . $j, array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'happy_friends_imagen_' . $j, array(
            'label' => __('Imagen ' . $j, 'tuatara'),
            'section' => 'happy_friends_seccion',
            'settings' => 'happy_friends_imagen_' . $j,
        )));
    }
}

// Agregar la función al hook customize_register
add_action('customize_register', 'tuatara_personalizador_happy_friends');


function tuatara_personalizador_contacto($wp_customize) {
    // Sección de Contacto
    $wp_customize->add_section('contacto_seccion', array(
        'title' => __('Sección de Contacto', 'tuatara'),
        'priority' => 80,
    ));

    // Campo para la imagen
    $wp_customize->add_setting('contacto_imagen', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contacto_imagen', array(
        'label' => __('Imagen', 'tuatara'),
        'section' => 'contacto_seccion',
        'settings' => 'contacto_imagen',
    )));

    // Campo para el título
    $wp_customize->add_setting('contacto_titulo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contacto_titulo', array(
        'label' => __('Título', 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'text',
    ));

    // Campo para el subtítulo
    $wp_customize->add_setting('contacto_subtitulo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contacto_subtitulo', array(
        'label' => __('Subtítulo', 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'text',
    ));

    // Campo para "What's on your mind"
    $wp_customize->add_setting('contacto_whats_on_your_mind', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('contacto_whats_on_your_mind', array(
        'label' => __("What's on your mind", 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'textarea',
    ));

    // Campos para el formulario de contacto
    $wp_customize->add_setting('contacto_name', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contacto_name', array(
        'label' => __('Nombre', 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contacto_email', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contacto_email', array(
        'label' => __('Correo Electrónico', 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'email',
    ));

    $wp_customize->add_setting('contacto_phone', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contacto_phone', array(
        'label' => __('Teléfono', 'tuatara'),
        'section' => 'contacto_seccion',
        'type' => 'text',
    ));
}

add_action('customize_register', 'tuatara_personalizador_contacto');

function tuatara_personalizador_footer($wp_customize) {
    // Sección de Footer
    $wp_customize->add_section('footer_seccion', array(
        'title' => __('Sección de Footer', 'tuatara'),
        'priority' => 90,
    ));

    // Campos para la Columna 1
    $wp_customize->add_setting('footer_titulo1', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_titulo1', array(
        'label' => __('Título Columna 1', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_pais', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_pais', array(
        'label' => __('País', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_correo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('footer_correo', array(
        'label' => __('Correo Electrónico', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'email',
    ));

    $wp_customize->add_setting('footer_direccion', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_direccion', array(
        'label' => __('Dirección', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_telefono', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_telefono', array(
        'label' => __('Teléfono', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    // Campos para la Columna 2
    $wp_customize->add_setting('footer_titulo2', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_titulo2', array(
        'label' => __('Título Columna 2', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    for ($i = 1; $i <= 5; $i++) {
        $wp_customize->add_setting('footer_link_titulo2_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('footer_link_titulo2_' . $i, array(
            'label' => __('Título Enlace ' . $i . ' Columna 2', 'tuatara'),
            'section' => 'footer_seccion',
            'type' => 'text',
        ));

        $wp_customize->add_setting('footer_link_enlace2_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        ));

        $wp_customize->add_control('footer_link_enlace2_' . $i, array(
            'label' => __('Enlace ' . $i . ' Columna 2', 'tuatara'),
            'section' => 'footer_seccion',
            'type' => 'url',
        ));
    }

    // Campos para la Columna 3
    $wp_customize->add_setting('footer_titulo3', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_titulo3', array(
        'label' => __('Título Columna 3', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting('footer_link_titulo3_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('footer_link_titulo3_' . $i, array(
            'label' => __('Título Enlace ' . $i . ' Columna 3', 'tuatara'),
            'section' => 'footer_seccion',
            'type' => 'text',
        ));

        $wp_customize->add_setting('footer_link_enlace3_' . $i, array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url',
        ));

        $wp_customize->add_control('footer_link_enlace3_' . $i, array(
            'label' => __('Enlace ' . $i . ' Columna 3', 'tuatara'),
            'section' => 'footer_seccion',
            'type' => 'url',
        ));
    }

    // Campos para la Columna 4
    $wp_customize->add_setting('footer_logo_imagen', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_imagen', array(
        'label' => __('Imagen del Logo', 'tuatara'),
        'section' => 'footer_seccion',
        'settings' => 'footer_logo_imagen',
    )));

    $wp_customize->add_setting('footer_descripcion', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footer_descripcion', array(
        'label' => __('Descripción', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('footer_input_titulo', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_input_titulo', array(
        'label' => __('Título del Input de Contacto', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_input_boton_texto', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_input_boton_texto', array(
        'label' => __('Texto del Botón de Contacto', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_input_boton_enlace', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url',
    ));

    $wp_customize->add_control('footer_input_boton_enlace', array(
        'label' => __('Enlace del Botón de Contacto', 'tuatara'),
        'section' => 'footer_seccion',
        'type' => 'url',
    ));

    // Agrega más campos según sea necesario
}

add_action('customize_register', 'tuatara_personalizador_footer');


function tuatara_personalizador_copyright($wp_customize) {
    // Sección de Copyright
    $wp_customize->add_section('copyright_seccion', array(
        'title' => __('Sección de Copyright', 'tuatara'),
        'priority' => 100,
    ));

    // Campo para la descripción
    $wp_customize->add_setting('copyright_descripcion', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('copyright_descripcion', array(
        'label' => __('Descripción', 'tuatara'),
        'section' => 'copyright_seccion',
        'type' => 'textarea',
    ));

    // Campos para enlaces e iconos de redes sociales
    $redes_sociales = array('facebook', 'linkedin', 'instagram', 'behance');

    foreach ($redes_sociales as $red) {
        // Campo para el enlace
        $wp_customize->add_setting('copyright_' . $red . '_link', array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('copyright_' . $red . '_link', array(
            'label' => ucfirst($red) . ' Link',
            'section' => 'copyright_seccion',
            'type' => 'text',
        ));
    }
}

add_action('customize_register', 'tuatara_personalizador_copyright');



