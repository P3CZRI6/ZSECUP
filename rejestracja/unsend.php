<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$polaczenie -> query ('SET NAMES utf8');



$game = $_POST['game'];

$teamName = $_POST['teamName'];

$teamTag = $_POST['teamTag'];



//kapitan

$captain_name = $_POST['captain_name'];

$captain_surname = $_POST['captain_surname'];

$captain_name->CharSet = "UTF-8";

$captain_surname->CharSet = "UTF-8";



$captain_email = $_POST['captain_email'];

$captain_nick = $_POST['captain_nick'];

$captain_class = $_POST['captain_class'];



//drugi gracz

$second_name =  $_POST['second_name'];

$second_surname = $_POST['second_surname'];

$second_name->CharSet = "UTF-8";

$second_surname->CharSet = "UTF-8";



$second_email = $_POST['second_email'];

$second_nick = $_POST['second_nick'];

$second_class = $_POST['second_class'];



//trzeci gracz

$third_name = $_POST['third_name'];

$third_surname =  $_POST['third_surname'];

$third_name->CharSet = "UTF-8";

$third_surname->CharSet = "UTF-8";



$third_email = $_POST['third_email'];

$third_nick = $_POST['third_nick'];

$third_class = $_POST['third_class'];



//czwarty gracz

$fourth_name =  $_POST['fourth_name'];

$fourth_surname = $_POST['fourth_surname'];

$fourth_name->CharSet = "UTF-8";

$fourth_surname->CharSet = "UTF-8";



$fourth_email = $_POST['fourth_email'];

$fourth_nick = $_POST['fourth_nick'];

$fourth_class = $_POST['fourth_class'];









    $captain_steam = $_POST['captain_steam'];

    $second_steam = $_POST['second_steam'];

    $third_steam = $_POST['third_steam'];

    $fourth_steam = $_POST['fourth_steam'];

    



    $isTeamName = $polaczenie -> query("SELECT * FROM teams WHERE Team_name='$teamName' && Game='$game'");

    $isTeamTag = $polaczenie -> query("SELECT * FROM teams WHERE Team_tag='$teamTag' && Game='$game'");



    $isTeamName = $isTeamName->num_rows;

    $isTeamTag = $isTeamTag->num_rows;



    if($isTeamName == 0 && $isTeamTag == 0){

        if ($polaczenie->query("INSERT INTO teams VALUES (NULL, '$teamName', '$teamTag', '$game')")){



        }

        else{

            throw new Exception($polaczenie->error);

        }    





        $result = $polaczenie -> query("SELECT * FROM teams WHERE Team_name='$teamName' && Game='$game'");

        $result = $result->fetch_assoc();

        $teamid = $result['id'];



        //kapitan

        if ($polaczenie->query("INSERT INTO gamers VALUES (NULL, '$captain_name', '$captain_surname',  '$captain_email', '$captain_nick', '$captain_class', '$captain_steam', '$teamid')")){



        }

        else{

            throw new Exception($polaczenie->error);

        }



        //drugi gracz

        if ($polaczenie->query("INSERT INTO gamers VALUES (NULL, '$second_name', '$second_surname',  '$second_email', '$second_nick', '$second_class', '$second_steam', '$teamid')")){



        }

        else{

            throw new Exception($polaczenie->error);

        }



        //trzeci gracz

        if ($polaczenie->query("INSERT INTO gamers VALUES (NULL, '$third_name', '$third_surname', '$third_email', '$third_nick', '$third_class', '$third_steam', '$teamid')")){

        }

        else{

            throw new Exception($polaczenie->error);

        }



        //czwarty gracz

        if ($polaczenie->query("INSERT INTO gamers VALUES (NULL, '$fourth_name', '$fourth_surname', '$fourth_email', '$fourth_nick', '$fourth_class', '$fourth_steam', '$teamid')")){



        }

        else{

            throw new Exception($polaczenie->error);

        }



        //piaty gracz

        if(strlen($_POST['fifth_name']) != 0){

            $fifth_name = $_POST['fifth_name'];

            $fifth_surname = $_POST['fifth_surname'];

            $fifth_name->CharSet = "UTF-8";

            $fifth_surname->CharSet = "UTF-8";



            $fifth_email = $_POST['fifth_email'];

            $fifth_nick = $_POST['fifth_nick'];

            $fifth_class = $_POST['fifth_class'];

            $fifth_steam = $_POST['fifth_steam'];



            if ($polaczenie->query("INSERT INTO gamers VALUES (NULL, '$fifth_name', '$fifth_surname', '$fifth_email', '$fifth_nick', '$fifth_class', '$fifth_steam', '$teamid')")){



            }

            else{

                throw new Exception($polaczenie->error);

            }

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

		$mail -> setFrom("email");

		$mail -> addAddress($captain_email);

		$mail -> Subject = "DISCORD";

		$mail -> Body = file_get_contents('../PHPMailer/template.html');





		if($mail -> Send()){

		}

		else{

            

            //echo 'Mailer Error: ' . $mail->ErrorInfo;

		}

		

		$mail -> smtpClose();

		

        echo "work";

    }

    else{

        echo "not";

    }

?>