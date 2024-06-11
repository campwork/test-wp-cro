<footer>
 
 
 <div class="container" style="
    margin-top: 50px;
">
 <div class="row">

<div class="footer-columna col-md-2">
        <h4 style="
    font-size: 18px;
    font-weight: 700;
"><?php echo get_theme_mod('footer_titulo1', ''); ?></h4>
        <p><?php echo get_theme_mod('footer_pais', ''); ?></p>
        <p><?php echo get_theme_mod('footer_correo', ''); ?></p>
        <p><?php echo get_theme_mod('footer_direccion', ''); ?></p>
        <p><?php echo get_theme_mod('footer_telefono', ''); ?></p>
    </div>

    <div class="footer-columna col-md-2">
        <h4 style="
    font-size: 18px;
    font-weight: 700;
"><?php echo get_theme_mod('footer_titulo2', ''); ?></h4>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $titulo_enlace = get_theme_mod('footer_link_titulo2_' . $i, '');
            $enlace = get_theme_mod('footer_link_enlace2_' . $i, '');

            if (!empty($titulo_enlace) && !empty($enlace)) {
                echo '<p><a href="' . esc_url($enlace) . '">' . esc_html($titulo_enlace) . '</a></p>';
            }
        }
        ?>
    </div>

    <div class="footer-columna col-md-2">
        <h4 style="
    font-size: 18px;
    font-weight: 700;
"><?php echo get_theme_mod('footer_titulo3', ''); ?></h4>
        <?php
        for ($i = 1; $i <= 4; $i++) {
            $titulo_enlace = get_theme_mod('footer_link_titulo3_' . $i, '');
            $enlace = get_theme_mod('footer_link_enlace3_' . $i, '');

            if (!empty($titulo_enlace) && !empty($enlace)) {
                echo '<p><a href="' . esc_url($enlace) . '">' . esc_html($titulo_enlace) . '</a></p>';
            }
        }
        ?>
    </div>

    <div class="footer-columna col-md-6">
       
        <img src="<?php echo esc_url(get_theme_mod('footer_logo_imagen', '')); ?>" alt="Logo">
        <p><?php echo wp_kses_post(get_theme_mod('footer_descripcion', '')); ?></p>

         <form action="#" method="post" style="
    box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.35);
    border-radius: 25px;
">
                    <input type="text" name="nombre" placeholder="Nombre" style="border-radius: 25px;padding: 5px 10px;border: none;max-width: 170px;">
                    <button type="submit" style="background-color: #e9467b; border-radius: 25px; padding: 5px 10px; border: none; margin-left: -40px; color: white;">Contactar</button>
                </form>
    </div>
 
 </div>
 </div>

 
 <!-- Sección de Copyright con descripción e iconos de redes sociales -->
<div class="copyright-section">
    
    
    <div class="container">


    <p><?php echo get_theme_mod('copyright_descripcion', ''); ?></p>

    <!-- Iconos y enlaces de redes sociales -->
    <div class="social-icons">
        <?php
        $redes_sociales = array('facebook', 'linkedin', 'instagram', 'behance');

        foreach ($redes_sociales as $red) :
            $enlace = get_theme_mod('copyright_' . $red . '_link', '');

            if (!empty($enlace)) :
        ?>
                <a href="<?php echo esc_url($enlace); ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-<?php echo esc_attr($red); ?>"></i>
                </a>
        <?php
            endif;
        endforeach;
        ?>
    </div>
    
    
    </div>

    
</div>


<!-- El resto de tu código HTML -->



</footer>
<script>
jQuery(document).ready(function($) {
    // Abre por defecto la sección del medio
    $('.accordion-item.active .accordion-collapse').addClass('show');

    // Maneja el clic en los botones del acordeón
    $('.accordion-button').click(function() {
        // Cierra todas las secciones del acordeón
        $('.accordion-collapse').slideUp().removeClass('show');
        $('.accordion-button').attr('aria-expanded', 'false');

        // Abre o cierra la sección del acordeón correspondiente
        if (!$(this).next('.accordion-collapse').hasClass('show')) {
            $(this).next('.accordion-collapse').slideDown().addClass('show');
            $(this).attr('aria-expanded', 'true');
        }
    });
});


jQuery(document).ready(function($) {
    $('.acordeon-titulo').click(function() {
        $(this).next('.acordeon-contenido').slideToggle();
        $('.acordeon-contenido').not($(this).next()).slideUp();
    });
});



</script>




<?php wp_footer(); ?>
</body>
</html>
