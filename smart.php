<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 's26.thehost.com.ua';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rus.nikit27@xeon2600v3.ua';                 // Наш логин
$mail->Password = 'Nikit7777777';                           // Наш пароль от ящика
$mail->SMTPSecure = 'SSL/TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('rus.nikit27@xeon2600v3.ua', 'xeon');   // От кого письмо 
$mail->addAddress('rus.nikit27@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
Пользователь оставил данные <br> 
Имя: ' . $name . ' <br>
Номер телефона: ' . $phone . '<br>
E-mail: ' . $email . '<br>
текст: ' . $text . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>