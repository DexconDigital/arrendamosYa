<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $transaccion = $_POST['transaccion'];
    $inmueble = $_POST['tipo_inm'];
    $valor = $_POST['valor'];
    $area = $_POST['area'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $mensaje = $_POST['mensaje'];
    
    
}


$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('inmobiliaria@ArrendamosYa.com', 'inmobiliaria@ArrendamosYa.com');
    $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('alexthunder7@gmail.com');
    //$mail->addAddress('gerente@arrendamosya.com');
    //$mail->addAddress('juanescudero624@hotmail.com');
    //$mail->addAddress('administrador@arrendamosya.com');
    //$mail->addAddress('luiscarlosmazo@gmail.com');

    
    $mail->Subject='Mensaje desde la página web Arrendamos Ya';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir información sobre como consignar un inmueble</span>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
                        <li>Quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
                        <li>Valor: '.$valor.'</li>
                        <li>Área: '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href='../index.php'
         </script>";

}catch(Exception $e){
	
	echo 'algo salio mal' , $e->getMessage();
}
?>