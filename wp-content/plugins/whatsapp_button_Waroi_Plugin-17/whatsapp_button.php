<?php
/*
Plugin Name: Boton WhatsApp Waroi 
Description: Agrega un botón de WhatsApp de Waroi.
Version: 1.0
Author: Waroi.com
*/
// Agrega el código JavaScript al encabezado del sitio
function add_whatsapp_button_code() {
    ?>
    <!-- Pixel Code Waroi -->
    <script src="https://waroi.com/api/wa.js" ></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        "use strict";
        whatsAppSetup({
            urlwa: "https://waroi.com/waroi?apimode=on",
        });
    });
</script>

    <!-- END Pixel Code -->
    <?php
}

// Llama a la función directamente sin la acción de WordPress
add_whatsapp_button_code();
?>