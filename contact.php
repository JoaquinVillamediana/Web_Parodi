<?php


if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
  $name = $_POST['name'];
  $email =  $_POST['email'];
  $mes_subject = $_POST['subject'];
  $message =  $_POST['message'];


  $to =  'contacto@parodiyasociados.com.ar';
  $subject = "Recibiste un contacto";
  $html = '
  <html>
  <body>
  <p>
  <u>Datos del contacto</u>
  <br><br>Nombre: <b>' . $name . '</b>
  <br><br>Email: <b>' . $email .  '</b>
  <br><br>Asunto: <b>' . $mes_subject .  '</b>
  <br><br>Mensaje: <b>' . $message .  '</b>                      

                          </p>
                      </body>
                      </html>
                      ';

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <noreply@parodiyasociados.com.ar>' . "\r\n";

  mail($to, $subject, $html, $headers);
}

header('Location: index.php?status=ok#contact');
die;
