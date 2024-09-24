<?php 
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../services/EmailService.php';
require_once __DIR__ . '/../services/SMSService.php';
require_once __DIR__ . '../controllers/Notification.php';

//Creamos a un usuario
$user = new User("fulano@gmail.com", "55258396");

//Creamos los servicios de Notificacion 
$emailServices = new EmailService($user->getEmail());
$smsServices = new SMSService($user->getPhone());

//Envio de Notificaciones
$emailNotification = new Notification($emailServices);
$smsNotification = new Notification($smsServices);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de notificaciones</title>
</head>
<body>
    <h1>Notificaciones</h1>
    <?php 
    $emailNotification->send("Hola Mundo email");
    $smsNotification->send("Hola mundo pero en celular");
    
    ?>
</body>
</html>