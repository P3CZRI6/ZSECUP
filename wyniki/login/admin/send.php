<?php
    require 'connect.php';
    session_start();
    if (!isset($_SESSION['login']))
    {
        header('Location: ../../index.html');
        exit();
    }
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie -> query ('SET NAMES utf8');
    $games=$_SESSION['games'];
    if(isset($_POST)){

    $A_team1=$_POST['A_team1'];
    $A_team2=$_POST['A_team2'];
    $A_team3=$_POST['A_team3'];
    $A_team4=$_POST['A_team4'];
    $A_team5=$_POST['A_team5'];
    $A_team1_match1=$_POST['A_team1_match1;'];
    $A_team1_match2=$_POST['A_team1_match2;'];
    $A_team1_match3=$_POST['A_team1_match3;'];
    $A_team1_match4=$_POST['A_team1_match4;'];
    $A_team2_match1=$_POST['A_team2_match1;'];
    $A_team2_match2=$_POST['A_team2_match2;'];
    $A_team2_match3=$_POST['A_team2_match3;'];
    $A_team2_match4=$_POST['A_team2_match4;'];
    $A_team3_match1=$_POST['A_team3_match1;'];
    $A_team3_match2=$_POST['A_team3_match2;'];
    $A_team3_match3=$_POST['A_team3_match3;'];
    $A_team3_match4=$_POST['A_team3_match4;'];
    $A_team4_match1=$_POST['A_team4_match1;'];
    $A_team4_match2=$_POST['A_team4_match2;'];
    $A_team4_match3=$_POST['A_team4_match3;'];
    $A_team4_match4=$_POST['A_team4_match4;'];
    $A_team5_match1=$_POST['A_team5_match1;'];
    $A_team5_match2=$_POST['A_team5_match2;'];
    $A_team5_match3=$_POST['A_team5_match3;'];
    $A_team5_match4=$_POST['A_team5_match4;'];
    $A_team1_team2_date=$_POST['A_team1_team2_date;'];
    $A_team1_team3_date=$_POST['A_team1_team3_date;'];
    $A_team1_team4_date=$_POST['A_team1_team4_date;'];
    $A_team1_team5_date=$_POST['A_team1_team5_date;'];
    $A_team2_team3_date=$_POST['A_team2_team3_date;'];
    $A_team2_team4_date=$_POST['A_team2_team4_date;'];
    $A_team2_team5_date=$_POST['A_team2_team5_date;'];
    $A_team3_team4_date=$_POST['A_team3_team4_date;'];
    $A_team3_team5_date=$_POST['A_team3_team5_date;'];
    $A_team4_team5_date=$_POST['A_team4_team5_date;'];

    $B_team1=$_POST['B_team1'];
    $B_team2=$_POST['B_team2'];
    $B_team3=$_POST['B_team3'];
    $B_team4=$_POST['B_team4'];
    $B_team5=$_POST['B_team5'];
    $B_team1_match1=$_POST['B_team1_match1;'];
    $B_team1_match2=$_POST['B_team1_match2;'];
    $B_team1_match3=$_POST['B_team1_match3;'];
    $B_team1_match4=$_POST['B_team1_match4;'];
    $B_team2_match1=$_POST['B_team2_match1;'];
    $B_team2_match2=$_POST['B_team2_match2;'];
    $B_team2_match3=$_POST['B_team2_match3;'];
    $B_team2_match4=$_POST['B_team2_match4;'];
    $B_team3_match1=$_POST['B_team3_match1;'];
    $B_team3_match2=$_POST['B_team3_match2;'];
    $B_team3_match3=$_POST['B_team3_match3;'];
    $B_team3_match4=$_POST['B_team3_match4;'];
    $B_team4_match1=$_POST['B_team4_match1;'];
    $B_team4_match2=$_POST['B_team4_match2;'];
    $B_team4_match3=$_POST['B_team4_match3;'];
    $B_team4_match4=$_POST['B_team4_match4;'];
    $B_team5_match1=$_POST['B_team5_match1;'];
    $B_team5_match2=$_POST['B_team5_match2;'];
    $B_team5_match3=$_POST['B_team5_match3;'];
    $B_team5_match4=$_POST['B_team5_match4;'];
    $B_team1_team2_date=$_POST['B_team1_team2_date;'];
    $B_team1_team3_date=$_POST['B_team1_team3_date;'];
    $B_team1_team4_date=$_POST['B_team1_team4_date;'];
    $B_team1_team5_date=$_POST['B_team1_team5_date;'];
    $B_team2_team3_date=$_POST['B_team2_team3_date;'];
    $B_team2_team4_date=$_POST['B_team2_team4_date;'];
    $B_team2_team5_date=$_POST['B_team2_team5_date;'];
    $B_team3_team4_date=$_POST['B_team3_team4_date;'];
    $B_team3_team5_date=$_POST['B_team3_team5_date;'];
    $B_team4_team5_date=$_POST['B_team4_team5_date;'];


    
    $C_team1=$_POST['C_team1'];
    $C_team2=$_POST['C_team2'];
    $C_team3=$_POST['C_team3'];
    $C_team4=$_POST['C_team4'];
    $C_team5=$_POST['C_team5'];
    $C_team1_match1=$_POST['C_team1_match1;'];
    $C_team1_match2=$_POST['C_team1_match2;'];
    $C_team1_match3=$_POST['C_team1_match3;'];
    $C_team1_match4=$_POST['C_team1_match4;'];
    $C_team2_match1=$_POST['C_team2_match1;'];
    $C_team2_match2=$_POST['C_team2_match2;'];
    $C_team2_match3=$_POST['C_team2_match3;'];
    $C_team2_match4=$_POST['C_team2_match4;'];
    $C_team3_match1=$_POST['C_team3_match1;'];
    $C_team3_match2=$_POST['C_team3_match2;'];
    $C_team3_match3=$_POST['C_team3_match3;'];
    $C_team3_match4=$_POST['C_team3_match4;'];
    $C_team4_match1=$_POST['C_team4_match1;'];
    $C_team4_match2=$_POST['C_team4_match2;'];
    $C_team4_match3=$_POST['C_team4_match3;'];
    $C_team4_match4=$_POST['C_team4_match4;'];
    $C_team5_match1=$_POST['C_team5_match1;'];
    $C_team5_match2=$_POST['C_team5_match2;'];
    $C_team5_match3=$_POST['C_team5_match3;'];
    $C_team5_match4=$_POST['C_team5_match4;'];
    $C_team1_team2_date=$_POST['C_team1_team2_date;'];
    $C_team1_team3_date=$_POST['C_team1_team3_date;'];
    $C_team1_team4_date=$_POST['C_team1_team4_date;'];
    $C_team1_team5_date=$_POST['C_team1_team5_date;'];
    $C_team2_team3_date=$_POST['C_team2_team3_date;'];
    $C_team2_team4_date=$_POST['C_team2_team4_date;'];
    $C_team2_team5_date=$_POST['C_team2_team5_date;'];
    $C_team3_team4_date=$_POST['C_team3_team4_date;'];
    $C_team3_team5_date=$_POST['C_team3_team5_date;'];
    $C_team4_team5_date=$_POST['C_team4_team5_date;'];



    $D_team1=$_POST['D_team1'];
    $D_team2=$_POST['D_team2'];
    $D_team3=$_POST['D_team3'];
    $D_team4=$_POST['D_team4'];
    $D_team5=$_POST['D_team5'];
    $D_team1_match1=$_POST['D_team1_match1;'];
    $D_team1_match2=$_POST['D_team1_match2;'];
    $D_team1_match3=$_POST['D_team1_match3;'];
    $D_team1_match4=$_POST['D_team1_match4;'];
    $D_team2_match1=$_POST['D_team2_match1;'];
    $D_team2_match2=$_POST['D_team2_match2;'];
    $D_team2_match3=$_POST['D_team2_match3;'];
    $D_team2_match4=$_POST['D_team2_match4;'];
    $D_team3_match1=$_POST['D_team3_match1;'];
    $D_team3_match2=$_POST['D_team3_match2;'];
    $D_team3_match3=$_POST['D_team3_match3;'];
    $D_team3_match4=$_POST['D_team3_match4;'];
    $D_team4_match1=$_POST['D_team4_match1;'];
    $D_team4_match2=$_POST['D_team4_match2;'];
    $D_team4_match3=$_POST['D_team4_match3;'];
    $D_team4_match4=$_POST['D_team4_match4;'];
    $D_team5_match1=$_POST['D_team5_match1;'];
    $D_team5_match2=$_POST['D_team5_match2;'];
    $D_team5_match3=$_POST['D_team5_match3;'];
    $D_team5_match4=$_POST['D_team5_match4;'];
    $D_team1_team2_date=$_POST['D_team1_team2_date;'];
    $D_team1_team3_date=$_POST['D_team1_team3_date;'];
    $D_team1_team4_date=$_POST['D_team1_team4_date;'];
    $D_team1_team5_date=$_POST['D_team1_team5_date;'];
    $D_team2_team3_date=$_POST['D_team2_team3_date;'];
    $D_team2_team4_date=$_POST['D_team2_team4_date;'];
    $D_team2_team5_date=$_POST['D_team2_team5_date;'];
    $D_team3_team4_date=$_POST['D_team3_team4_date;'];
    $D_team3_team5_date=$_POST['D_team3_team5_date;'];
    $D_team4_team5_date=$_POST['D_team4_team5_date;'];
    

    if($games==1){
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$A_team1',`team2`='$A_team2',`team3`='$A_team3',`team4`='$A_team4',`team5`='$A_team5',`team1_match1`='$A_team1_match1',`team1_match2`='$A_team1_match2',`team1_match3`='$A_team1_match3',`team1_match4`='$A_team1_match4',`team2_match1`='$A_team2_match1',`team2_match2`='$A_team2_match2',`team2_match3`='$A_team2_match3',`team2_match4`='$A_team2_match4',`team3_match1`='$A_team3_match1',`team3_match2`='$A_team3_match2',`team3_match3`='$A_team3_match3',`team3_match4`='$A_team3_match4',`team4_match1`='$A_team4_match1',`team4_match2`='$A_team4_match2',`team4_match3`='$A_team4_match3',`team4_match4`='$A_team4_match4',`team5_match1`='$A_team5_match1',`team5_match2`='$A_team5_match2',`team5_match3`='$A_team5_match3',`team5_match4`='$A_team5_match4',`team1_team2_date`='$A_team1_team2_date',`team1_team3_date`='$A_team1_team3_date',`team1_team4_date`='$A_team1_team4_date',`team1_team5_date`='$A_team1_team5_date',`team2_team3_date`='$A_team2_team3_date',`team2_team4_date`='$A_team2_team4_date',`team2_team5_date`='$A_team2_team5_date',`team3_team4_date`='$A_team3_team4_date',`team3_team5_date`='$A_team3_team5_date',`team4_team5_date`='$A_team4_team5_date' WHERE id=1");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$B_team1',`team2`='$B_team2',`team3`='$B_team3',`team4`='$B_team4',`team5`='$B_team5',`team1_match1`='$B_team1_match1',`team1_match2`='$B_team1_match2',`team1_match3`='$B_team1_match3',`team1_match4`='$B_team1_match4',`team2_match1`='$B_team2_match1',`team2_match2`='$B_team2_match2',`team2_match3`='$B_team2_match3',`team2_match4`='$B_team2_match4',`team3_match1`='$B_team3_match1',`team3_match2`='$B_team3_match2',`team3_match3`='$B_team3_match3',`team3_match4`='$B_team3_match4',`team4_match1`='$B_team4_match1',`team4_match2`='$B_team4_match2',`team4_match3`='$B_team4_match3',`team4_match4`='$B_team4_match4',`team5_match1`='$B_team5_match1',`team5_match2`='$B_team5_match2',`team5_match3`='$B_team5_match3',`team5_match4`='$B_team5_match4',`team1_team2_date`='$B_team1_team2_date',`team1_team3_date`='$B_team1_team3_date',`team1_team4_date`='$B_team1_team4_date',`team1_team5_date`='$B_team1_team5_date',`team2_team3_date`='$B_team2_team3_date',`team2_team4_date`='$B_team2_team4_date',`team2_team5_date`='$B_team2_team5_date',`team3_team4_date`='$B_team3_team4_date',`team3_team5_date`='$B_team3_team5_date',`team4_team5_date`='$B_team4_team5_date' WHERE id=2");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$C_team1',`team2`='$C_team2',`team3`='$C_team3',`team4`='$C_team4',`team5`='$C_team5',`team1_match1`='$C_team1_match1',`team1_match2`='$C_team1_match2',`team1_match3`='$C_team1_match3',`team1_match4`='$C_team1_match4',`team2_match1`='$C_team2_match1',`team2_match2`='$C_team2_match2',`team2_match3`='$C_team2_match3',`team2_match4`='$C_team2_match4',`team3_match1`='$C_team3_match1',`team3_match2`='$C_team3_match2',`team3_match3`='$C_team3_match3',`team3_match4`='$C_team3_match4',`team4_match1`='$C_team4_match1',`team4_match2`='$C_team4_match2',`team4_match3`='$C_team4_match3',`team4_match4`='$C_team4_match4',`team5_match1`='$C_team5_match1',`team5_match2`='$C_team5_match2',`team5_match3`='$C_team5_match3',`team5_match4`='$C_team5_match4',`team1_team2_date`='$C_team1_team2_date',`team1_team3_date`='$C_team1_team3_date',`team1_team4_date`='$C_team1_team4_date',`team1_team5_date`='$C_team1_team5_date',`team2_team3_date`='$C_team2_team3_date',`team2_team4_date`='$C_team2_team4_date',`team2_team5_date`='$C_team2_team5_date',`team3_team4_date`='$C_team3_team4_date',`team3_team5_date`='$C_team3_team5_date',`team4_team5_date`='$C_team4_team5_date' WHERE id=3");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$D_team1',`team2`='$D_team2',`team3`='$D_team3',`team4`='$D_team4',`team5`='$D_team5',`team1_match1`='$D_team1_match1',`team1_match2`='$D_team1_match2',`team1_match3`='$D_team1_match3',`team1_match4`='$D_team1_match4',`team2_match1`='$D_team2_match1',`team2_match2`='$D_team2_match2',`team2_match3`='$D_team2_match3',`team2_match4`='$D_team2_match4',`team3_match1`='$D_team3_match1',`team3_match2`='$D_team3_match2',`team3_match3`='$D_team3_match3',`team3_match4`='$D_team3_match4',`team4_match1`='$D_team4_match1',`team4_match2`='$D_team4_match2',`team4_match3`='$D_team4_match3',`team4_match4`='$D_team4_match4',`team5_match1`='$D_team5_match1',`team5_match2`='$D_team5_match2',`team5_match3`='$D_team5_match3',`team5_match4`='$D_team5_match4',`team1_team2_date`='$D_team1_team2_date',`team1_team3_date`='$D_team1_team3_date',`team1_team4_date`='$D_team1_team4_date',`team1_team5_date`='$D_team1_team5_date',`team2_team3_date`='$D_team2_team3_date',`team2_team4_date`='$D_team2_team4_date',`team2_team5_date`='$D_team2_team5_date',`team3_team4_date`='$D_team3_team4_date',`team3_team5_date`='$D_team3_team5_date',`team4_team5_date`='$D_team4_team5_date' WHERE id=4");
        header("Location: index.php");
    }else if($games==2){
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$A_team1',`team2`='$A_team2',`team3`='$A_team3',`team4`='$A_team4',`team5`='$A_team5',`team1_match1`='$A_team1_match1',`team1_match2`='$A_team1_match2',`team1_match3`='$A_team1_match3',`team1_match4`='$A_team1_match4',`team2_match1`='$A_team2_match1',`team2_match2`='$A_team2_match2',`team2_match3`='$A_team2_match3',`team2_match4`='$A_team2_match4',`team3_match1`='$A_team3_match1',`team3_match2`='$A_team3_match2',`team3_match3`='$A_team3_match3',`team3_match4`='$A_team3_match4',`team4_match1`='$A_team4_match1',`team4_match2`='$A_team4_match2',`team4_match3`='$A_team4_match3',`team4_match4`='$A_team4_match4',`team5_match1`='$A_team5_match1',`team5_match2`='$A_team5_match2',`team5_match3`='$A_team5_match3',`team5_match4`='$A_team5_match4',`team1_team2_date`='$A_team1_team2_date',`team1_team3_date`='$A_team1_team3_date',`team1_team4_date`='$A_team1_team4_date',`team1_team5_date`='$A_team1_team5_date',`team2_team3_date`='$A_team2_team3_date',`team2_team4_date`='$A_team2_team4_date',`team2_team5_date`='$A_team2_team5_date',`team3_team4_date`='$A_team3_team4_date',`team3_team5_date`='$A_team3_team5_date',`team4_team5_date`='$A_team4_team5_date' WHERE id=5");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$B_team1',`team2`='$B_team2',`team3`='$B_team3',`team4`='$B_team4',`team5`='$B_team5',`team1_match1`='$B_team1_match1',`team1_match2`='$B_team1_match2',`team1_match3`='$B_team1_match3',`team1_match4`='$B_team1_match4',`team2_match1`='$B_team2_match1',`team2_match2`='$B_team2_match2',`team2_match3`='$B_team2_match3',`team2_match4`='$B_team2_match4',`team3_match1`='$B_team3_match1',`team3_match2`='$B_team3_match2',`team3_match3`='$B_team3_match3',`team3_match4`='$B_team3_match4',`team4_match1`='$B_team4_match1',`team4_match2`='$B_team4_match2',`team4_match3`='$B_team4_match3',`team4_match4`='$B_team4_match4',`team5_match1`='$B_team5_match1',`team5_match2`='$B_team5_match2',`team5_match3`='$B_team5_match3',`team5_match4`='$B_team5_match4',`team1_team2_date`='$B_team1_team2_date',`team1_team3_date`='$B_team1_team3_date',`team1_team4_date`='$B_team1_team4_date',`team1_team5_date`='$B_team1_team5_date',`team2_team3_date`='$B_team2_team3_date',`team2_team4_date`='$B_team2_team4_date',`team2_team5_date`='$B_team2_team5_date',`team3_team4_date`='$B_team3_team4_date',`team3_team5_date`='$B_team3_team5_date',`team4_team5_date`='$B_team4_team5_date' WHERE id=6");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$C_team1',`team2`='$C_team2',`team3`='$C_team3',`team4`='$C_team4',`team5`='$C_team5',`team1_match1`='$C_team1_match1',`team1_match2`='$C_team1_match2',`team1_match3`='$C_team1_match3',`team1_match4`='$C_team1_match4',`team2_match1`='$C_team2_match1',`team2_match2`='$C_team2_match2',`team2_match3`='$C_team2_match3',`team2_match4`='$C_team2_match4',`team3_match1`='$C_team3_match1',`team3_match2`='$C_team3_match2',`team3_match3`='$C_team3_match3',`team3_match4`='$C_team3_match4',`team4_match1`='$C_team4_match1',`team4_match2`='$C_team4_match2',`team4_match3`='$C_team4_match3',`team4_match4`='$C_team4_match4',`team5_match1`='$C_team5_match1',`team5_match2`='$C_team5_match2',`team5_match3`='$C_team5_match3',`team5_match4`='$C_team5_match4',`team1_team2_date`='$C_team1_team2_date',`team1_team3_date`='$C_team1_team3_date',`team1_team4_date`='$C_team1_team4_date',`team1_team5_date`='$C_team1_team5_date',`team2_team3_date`='$C_team2_team3_date',`team2_team4_date`='$C_team2_team4_date',`team2_team5_date`='$C_team2_team5_date',`team3_team4_date`='$C_team3_team4_date',`team3_team5_date`='$C_team3_team5_date',`team4_team5_date`='$C_team4_team5_date' WHERE id=7");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$D_team1',`team2`='$D_team2',`team3`='$D_team3',`team4`='$D_team4',`team5`='$D_team5',`team1_match1`='$D_team1_match1',`team1_match2`='$D_team1_match2',`team1_match3`='$D_team1_match3',`team1_match4`='$D_team1_match4',`team2_match1`='$D_team2_match1',`team2_match2`='$D_team2_match2',`team2_match3`='$D_team2_match3',`team2_match4`='$D_team2_match4',`team3_match1`='$D_team3_match1',`team3_match2`='$D_team3_match2',`team3_match3`='$D_team3_match3',`team3_match4`='$D_team3_match4',`team4_match1`='$D_team4_match1',`team4_match2`='$D_team4_match2',`team4_match3`='$D_team4_match3',`team4_match4`='$D_team4_match4',`team5_match1`='$D_team5_match1',`team5_match2`='$D_team5_match2',`team5_match3`='$D_team5_match3',`team5_match4`='$D_team5_match4',`team1_team2_date`='$D_team1_team2_date',`team1_team3_date`='$D_team1_team3_date',`team1_team4_date`='$D_team1_team4_date',`team1_team5_date`='$D_team1_team5_date',`team2_team3_date`='$D_team2_team3_date',`team2_team4_date`='$D_team2_team4_date',`team2_team5_date`='$D_team2_team5_date',`team3_team4_date`='$D_team3_team4_date',`team3_team5_date`='$D_team3_team5_date',`team4_team5_date`='$D_team4_team5_date' WHERE id=8");
        header("Location: index.php");
    }else if($games==3){
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$A_team1',`team2`='$A_team2',`team3`='$A_team3',`team4`='$A_team4',`team5`='$A_team5',`team1_match1`='$A_team1_match1',`team1_match2`='$A_team1_match2',`team1_match3`='$A_team1_match3',`team1_match4`='$A_team1_match4',`team2_match1`='$A_team2_match1',`team2_match2`='$A_team2_match2',`team2_match3`='$A_team2_match3',`team2_match4`='$A_team2_match4',`team3_match1`='$A_team3_match1',`team3_match2`='$A_team3_match2',`team3_match3`='$A_team3_match3',`team3_match4`='$A_team3_match4',`team4_match1`='$A_team4_match1',`team4_match2`='$A_team4_match2',`team4_match3`='$A_team4_match3',`team4_match4`='$A_team4_match4',`team5_match1`='$A_team5_match1',`team5_match2`='$A_team5_match2',`team5_match3`='$A_team5_match3',`team5_match4`='$A_team5_match4',`team1_team2_date`='$A_team1_team2_date',`team1_team3_date`='$A_team1_team3_date',`team1_team4_date`='$A_team1_team4_date',`team1_team5_date`='$A_team1_team5_date',`team2_team3_date`='$A_team2_team3_date',`team2_team4_date`='$A_team2_team4_date',`team2_team5_date`='$A_team2_team5_date',`team3_team4_date`='$A_team3_team4_date',`team3_team5_date`='$A_team3_team5_date',`team4_team5_date`='$A_team4_team5_date' WHERE id=9");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$B_team1',`team2`='$B_team2',`team3`='$B_team3',`team4`='$B_team4',`team5`='$B_team5',`team1_match1`='$B_team1_match1',`team1_match2`='$B_team1_match2',`team1_match3`='$B_team1_match3',`team1_match4`='$B_team1_match4',`team2_match1`='$B_team2_match1',`team2_match2`='$B_team2_match2',`team2_match3`='$B_team2_match3',`team2_match4`='$B_team2_match4',`team3_match1`='$B_team3_match1',`team3_match2`='$B_team3_match2',`team3_match3`='$B_team3_match3',`team3_match4`='$B_team3_match4',`team4_match1`='$B_team4_match1',`team4_match2`='$B_team4_match2',`team4_match3`='$B_team4_match3',`team4_match4`='$B_team4_match4',`team5_match1`='$B_team5_match1',`team5_match2`='$B_team5_match2',`team5_match3`='$B_team5_match3',`team5_match4`='$B_team5_match4',`team1_team2_date`='$B_team1_team2_date',`team1_team3_date`='$B_team1_team3_date',`team1_team4_date`='$B_team1_team4_date',`team1_team5_date`='$B_team1_team5_date',`team2_team3_date`='$B_team2_team3_date',`team2_team4_date`='$B_team2_team4_date',`team2_team5_date`='$B_team2_team5_date',`team3_team4_date`='$B_team3_team4_date',`team3_team5_date`='$B_team3_team5_date',`team4_team5_date`='$B_team4_team5_date' WHERE id=10");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$C_team1',`team2`='$C_team2',`team3`='$C_team3',`team4`='$C_team4',`team5`='$C_team5',`team1_match1`='$C_team1_match1',`team1_match2`='$C_team1_match2',`team1_match3`='$C_team1_match3',`team1_match4`='$C_team1_match4',`team2_match1`='$C_team2_match1',`team2_match2`='$C_team2_match2',`team2_match3`='$C_team2_match3',`team2_match4`='$C_team2_match4',`team3_match1`='$C_team3_match1',`team3_match2`='$C_team3_match2',`team3_match3`='$C_team3_match3',`team3_match4`='$C_team3_match4',`team4_match1`='$C_team4_match1',`team4_match2`='$C_team4_match2',`team4_match3`='$C_team4_match3',`team4_match4`='$C_team4_match4',`team5_match1`='$C_team5_match1',`team5_match2`='$C_team5_match2',`team5_match3`='$C_team5_match3',`team5_match4`='$C_team5_match4',`team1_team2_date`='$C_team1_team2_date',`team1_team3_date`='$C_team1_team3_date',`team1_team4_date`='$C_team1_team4_date',`team1_team5_date`='$C_team1_team5_date',`team2_team3_date`='$C_team2_team3_date',`team2_team4_date`='$C_team2_team4_date',`team2_team5_date`='$C_team2_team5_date',`team3_team4_date`='$C_team3_team4_date',`team3_team5_date`='$C_team3_team5_date',`team4_team5_date`='$C_team4_team5_date' WHERE id=11");
        $polaczenie -> query("UPDATE `wyniki` SET `team1`='$D_team1',`team2`='$D_team2',`team3`='$D_team3',`team4`='$D_team4',`team5`='$D_team5',`team1_match1`='$D_team1_match1',`team1_match2`='$D_team1_match2',`team1_match3`='$D_team1_match3',`team1_match4`='$D_team1_match4',`team2_match1`='$D_team2_match1',`team2_match2`='$D_team2_match2',`team2_match3`='$D_team2_match3',`team2_match4`='$D_team2_match4',`team3_match1`='$D_team3_match1',`team3_match2`='$D_team3_match2',`team3_match3`='$D_team3_match3',`team3_match4`='$D_team3_match4',`team4_match1`='$D_team4_match1',`team4_match2`='$D_team4_match2',`team4_match3`='$D_team4_match3',`team4_match4`='$D_team4_match4',`team5_match1`='$D_team5_match1',`team5_match2`='$D_team5_match2',`team5_match3`='$D_team5_match3',`team5_match4`='$D_team5_match4',`team1_team2_date`='$D_team1_team2_date',`team1_team3_date`='$D_team1_team3_date',`team1_team4_date`='$D_team1_team4_date',`team1_team5_date`='$D_team1_team5_date',`team2_team3_date`='$D_team2_team3_date',`team2_team4_date`='$D_team2_team4_date',`team2_team5_date`='$D_team2_team5_date',`team3_team4_date`='$D_team3_team4_date',`team3_team5_date`='$D_team3_team5_date',`team4_team5_date`='$D_team4_team5_date' WHERE id=12");
        header("Location: index.php");
    }
}
?>