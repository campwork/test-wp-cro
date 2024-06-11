<?php get_header(); ?>

<section id="content">
    <div style="background-color: #6ae2e9;">

 <div class="container" style="background-color: #fff;">
        <div class="encabezado-contenido row" style="position: absolute; background: white; margin-top: -70px; max-width: 1040px; padding: 20px;">
            <div class="col-md-2">
                <img style="max-height: 110px; object-fit: contain;" src="<?php echo esc_url(get_theme_mod('encabezado_imagen_izquierda', '')); ?>" alt="Imagen Izquierda" class="encabezado_imagen_izquierda_clase">
            </div>
            
            
            
            <div class="col-md-3">
                <h1 style="font-weight: 600;"><?php echo get_theme_mod('encabezado_titulo', ''); ?></h1>
                <h2 style="font-weight: 100;"><?php echo get_theme_mod('encabezado_subtitulo', ''); ?></h2>
            </div>
            
                <div class="col-md-6">
              
                <p><?php echo get_theme_mod('encabezado_descripcion', ''); ?></p>
            </div>
        </div>
    </div>
        </div>

    </section>


<section id="seccion-faqs">
    <div class="container">
                <div class="row">

        <div class="col-md-6">
            <?php
$seccion_imagen_url = get_theme_mod('faqs_seccion_imagen');
if ($seccion_imagen_url) : ?>
    <img class="faqimg" src="<?php echo esc_url($seccion_imagen_url); ?>" alt="Imagen de la Sección de FAQs">
<?php endif; ?>
            
            
            
            
        </div>
        
                <div class="col-md-6">

        <div style="font-size: 32px; font-weight: 200; margin-left: 20px;"> <span  style="font-size: 32px; font-weight: 600;" >Full</span> Service</div>
<div class="faqs">
    <div class="accordion" id="faqs-accordion">
        <?php
        // Variable para rastrear si la primera iteración (la del medio) se ha encontrado
        $middleAccordionFound = false;

        // Obtén datos de FAQs desde el personalizador
        for ($i = 1; $i <= 3; $i++) {
            $titulo = get_theme_mod('faqs_titulo_' . $i, '');
            $descripcion = get_theme_mod('faqs_descripcion_' . $i, '');

            if (!empty($titulo) && !empty($descripcion)) {
                // Determina si esta es la iteración del medio
                $isMiddleAccordion = !$middleAccordionFound && $i === 2;

                echo '<div class="accordion-item">';
                echo '<h2 class="accordion-header" id="faq-heading' . $i . '" style="border-bottom: 1px solid #222;">';
                echo '<button class="accordion-button ' . ($isMiddleAccordion ? 'collapsed' : '') . '" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse' . $i . '" aria-expanded="' . ($isMiddleAccordion ? 'true' : 'false') . '" aria-controls="faq-collapse' . $i . '">';
                echo esc_html($titulo);
                echo '</button>';
                echo '</h2>';
                echo '<div id="faq-collapse' . $i . '" class="accordion-collapse collapse ' . ($isMiddleAccordion ? 'show' : '') . '" aria-labelledby="faq-heading' . $i . '" data-bs-parent="#faqs-accordion">';
                echo '<div class="accordion-body">';
                echo '<p>' . wp_kses_post($descripcion) . '</p>';

                // Mostrar Tags
                echo '<div class="faq-tags">';
                for ($j = 1; $j <= 4; $j++) {
                    $tag = get_theme_mod('faqs_tag_' . $i . '_' . $j, '');
                    if (!empty($tag)) {
                        echo '<span class="tag">' . esc_html($tag) . '</span>';
                    }
                }
                echo '</div>';

                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Si esta es la iteración del medio, establece la variable a true
                if ($isMiddleAccordion) {
                    $middleAccordionFound = true;
                }
            }
        }
        ?>
    </div>
</div>
        
                </div>

        </div>



    </div>
</section>
<div class="destacada" style="        background-color: #01e2e6;background-repeat-x: no-repeat;
    background-size: contain;
    background-position: center;padding: 15px;
min-height: 620px;background-image: url('<?php echo esc_url(get_theme_mod('destacada_fondo', '')); ?>');">
    
    
    
    
    


        <div class="row">
            
   

    <div class="contenido-destacada col-md-5">
        
                    
<div style="font-size: 32px; font-weight: 200; margin-top: 30px;    text-align: right;"> <span  style="font-size: 32px; font-weight: 600;" >OUR</span> PORTAFOLIO.</div>
          
        
        <div style="box-sizing: ; background-color: rgba(255, 255, 255,0.85); padding-top: 30px; padding-left: 160px; padding-bottom: 30px; margin-top: 80px;box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.35);">  <h5 style="font-weight: 700; font-size: 18px;"><?php echo esc_html(get_theme_mod('destacada_nombre_proyecto', '')); ?></h5>
        
        <h5 style="font-size: 14px;"> <span style="font-weight: 700; font-size: 16px;"> PURE DESING</span>  |  Branding</h5>
        
        
        <div class="diseno"><?php echo wp_kses_post(get_theme_mod('destacada_diseno', '')); ?></div>
        <p class="descripcion"><?php echo wp_kses_post(get_theme_mod('destacada_descripcion', '')); ?></p>
        <?php
        $boton_accion_url = esc_url(get_theme_mod('destacada_boton_accion', ''));
        if (!empty($boton_accion_url)) {
            echo '<a class="boton-accion" href="' . esc_url($boton_accion_url) . '" style="color: #222; float: right;">Next Proyect</a><br>';
        }
        ?></div>
       
    </div>
    <div class="imagen-derecha col-md-7">
        <img  style="float: right; margin-right: 250px; margin-top: 100px; box-shadow: -15px 20px 17px 5px rgba(0, 0, 0, 0.25);" src="<?php echo esc_url(get_theme_mod('destacada_imagen_derecha', '')); ?>" alt="Imagen Derecha" style="float: right;">
    </div>
    
        </div>

    </div>










<div class="happy-friends">
    
    
        <div class="container">

    <div class="row">

    
    <div class=" col-md-4">
        <h2><?php echo esc_html(get_theme_mod('happy_friends_titulo', '')); ?></h2>
        <div class="pestanas" style="
    border-bottom: 1px solid #222;
">
           
            
            <?php
            for ($i = 1; $i <= 2; $i++) {
                $tab = get_theme_mod('happy_friends_tab_' . $i, '');
                if (!empty($tab)) {
                    echo '<div class="pestana" id="pestana-' . $i . '">' . esc_html($tab) . '</div>';
                }
            }
            ?>
        </div>
        <div class="descripciones">
            <?php
            for ($i = 1; $i <= 2; $i++) {
                $descripcion = get_theme_mod('happy_friends_descripcion_' . $i, '');
                if (!empty($descripcion)) {
                    echo '<div class="descripcion" id="descripcion-' . $i . '">' . wp_kses_post($descripcion) . '</div>';
                }
            }
            ?>
        </div>
        
         <div>
                
                Good Relations are the base of our success. There is no better testimonial than our clients, newly friends
                
            </div>
            
    </div>
    <div class="columna-2 col-md-8">
        <div class="imagenes">
                    <div class="row">

            <?php
            for ($j = 1; $j <= 10; $j++) {
                $imagen = get_theme_mod('happy_friends_imagen_' . $j, '');
                if (!empty($imagen)) {
                    echo '<img class="col-md-2" src="' . esc_url($imagen) . '" alt="Imagen ' . $j . '">';
                }
            }
            ?>
                    </div>

        </div>
    </div>
    
    
    </div>

    
        </div>

</div>






<div class="contacto-seccion ">
    
    <?php
    // Obtén datos de la sección de contacto desde el personalizador
    $imagen_url = get_theme_mod('contacto_imagen', '');
    $titulo = get_theme_mod('contacto_titulo', '');
    $subtitulo = get_theme_mod('contacto_subtitulo', '');
    $whats_on_your_mind = get_theme_mod('contacto_whats_on_your_mind', '');
    $name_placeholder = get_theme_mod('contacto_name', '');
    $email_placeholder = get_theme_mod('contacto_email', '');
    $phone_placeholder = get_theme_mod('contacto_phone', '');
    ?>


<div class="container">


<div class="row">

    <div class="contacto-imagen col-md-6">
        <?php if (!empty($imagen_url)) : ?>
            <img style="width: 100%;" src="<?php echo esc_url($imagen_url); ?>" alt="Contacto Imagen">
        <?php endif; ?>
    </div>

    <div class="contacto-info col-md-6">
        <br>        <br>
        <br>

        <h2><?php echo esc_html($titulo); ?></h2>
        <h3><?php echo esc_html($subtitulo); ?></h3>
        <p><?php echo wp_kses_post($whats_on_your_mind); ?></p>

        <form>
            <input style="background-color: transparent;
border: none;border-bottom: 1px solid #222!important;width:100%" type="text" id="contacto-name" name="contacto-name" placeholder="<?php echo esc_attr($name_placeholder); ?>">

            <input type="email" style="background-color: transparent;
border: none;border-bottom: 1px solid #222!important;width:100%" id="contacto-email" name="contacto-email" placeholder="Mail">

            <input type="text"  style="background-color: transparent;
border: none;border-bottom: 1px solid #222!important;width:100%"id="contacto-phone" name="contacto-phone" placeholder="<?php echo esc_attr($phone_placeholder); ?>">
            
                        <input type="text"  style="background-color: transparent;
border: none;border-bottom: 1px solid #222!important;width:100%" id="contacto-phone" name="contacto-phone" placeholder="What's on your mind">


<br>
            <button style="float: right;border-radius:25px;margin-top: 20px;background-color: white;padding: 2px 20px;" type="submit">Enviar Mensaje</button>
        </form>
    </div>
</div>
</div>



</div>








<?php get_footer(); ?>
