<?php
 
    session_start();
    require_once "connect.php";
 
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    
    if ($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        @$login = $_POST['login'];
        @$haslo = $_POST['password'];
         
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
     
        if ($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM admin WHERE login='%s' AND password='%s'",
        mysqli_real_escape_string($polaczenie,$login),
        mysqli_real_escape_string($polaczenie,$haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                header('Location: admin/');
                $_SESSION['login'] = true;
                 
            } else {    
                echo '<img src="nie.jpg" style="width:100%;"></img>';
                
            }
        }  
    }
?>