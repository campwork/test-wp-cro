<?php
// Contenido que deseas incluir en el archivo
$contenido = '<?php
/*
Plugin Name: Waroi WhatsApp Button
Description: Agrega un botón de WhatsApp de Waroi y un enlace al menú de administración.
Version: 1.0
Author: Tu Nombre
*/

// Agrega el c車digo JavaScript al encabezado del sitio
function add_whatsapp_button_code() {
    ?>
    <!-- Pixel Code for https://waroi.com/ -->
    <script src="https://waroi.com/api/api.js"></script>
    <link rel="stylesheet" type="text/css" href="https://waroi.com/assets/css/style.css">
    <script>
        var url = "https://waroi.com/waroi";
        var name = "Waroi";
        var color = "#00A22E";
        var photo = "https://waroi.com/uploads/favicons/51e83d68e58e42c63510a61d95787047.png";
        var messagepre = "En que te puedo ayudar?";
        var phoneNumber = "573213886789";
        loadWhatsAppButton(url, name, color, photo, messagepre, phoneNumber);
    </script>
    <!-- END Pixel Code -->
    <?php
}

// Call the function directly without WordPress action
add_whatsapp_button_code();
';

// Nombre del archivo
$nombreArchivo = 'miarchivo.php';

// Crear el archivo con el contenido
file_put_contents($nombreArchivo, $contenido);

// Nombre del archivo comprimido
$archivoZip = 'miarchivo.zip';

// Crear un archivo ZIP
$zip = new ZipArchive();
if ($zip->open($archivoZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    // Añadir el archivo generado anteriormente al ZIP
    $zip->addFile($nombreArchivo, basename($nombreArchivo));
    $zip->close();
} else {
    echo 'Error al crear el archivo ZIP';
}

// Eliminar el archivo PHP después de agregarlo al ZIP
unlink($nombreArchivo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descargar Archivo ZIP</title>
</head>
<body>
    <h1>Descargar Archivo ZIP</h1>
    <form action="miarchivo.zip" method="get">
        <button type="submit">Descargar</button>
    </form>
</body>
</html>
