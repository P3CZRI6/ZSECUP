<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie -> query ('SET NAMES utf8');

//kapitan
$captain_name = $_POST['name'];
$captain_surname = $_POST['surname'];
$captain_email = $_POST['email'];
$captain_nick = $_POST['nick'];
$captain_class = $_POST['class'];

    $isNick = $polaczenie -> query("SELECT * FROM zsecup_dirt WHERE Nick='$captain_nick'");
    $isEmail = $polaczenie -> query("SELECT * FROM zsecup_dirt WHERE Email='$captain_email'");

    $isNick = $isNick->num_rows;
    $isEmail = $isEmail->num_rows;

    if($isNick == 0 && $isEmail == 0){
        if ($polaczenie->query("INSERT INTO zsecup_dirt VALUES (NULL, '$captain_name', '$captain_surname', '$captain_email', '$captain_nick', '$captain_class')")){

        }
        else{
            throw new Exception($polaczenie->error);
        }    

        //mailer
		require "../PHPMailer/PHPMailer.php";
        require "../PHPMailer/SMTP.php";
        require "../PHPMailer/Exception.php";

		$mail = new PHPMailer();

		//smtp settings 
        $mail->CharSet = "UTF-8";
        $mail -> isSMTP();
        $mail ->Host = "ssl0.ovh.net";
        $mail -> SMTPAuth = true;
        $mail -> Username = "mail";
        $mail -> Password = 'haslo';
        $mail -> Port = 465;
        $mail -> SMTPSecure = "ssl";


		//email settings
		$mail -> isHTML(true);
		$mail -> setFrom("mail");
		$mail -> addAddress($captain_email);
		$mail -> Subject = "ZSE CUP - Zaproszenie na Discord'a";
		$mail -> Body = file_get_contents('../PHPMailer/template.html');

		if($mail -> Send()){
		}
		else{
            
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		
		$mail -> smtpClose();
        echo"work";
    }
    else if($isNick != 0){
        echo"nick";
    }
    else{
        echo"email";
    }

    $polaczenie -> close();
?>