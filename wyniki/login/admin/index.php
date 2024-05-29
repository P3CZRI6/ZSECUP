<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: ../index.html');
    }
    require 'connect.php';
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    $polaczenie -> query ('SET NAMES utf8');
    if($_COOKIE['games']!=null){$games = $_COOKIE['games'];}
    else{$games=1;}
    if($games==1){
        $_SESSION['games'] = $games;
        $sql = "SELECT * FROM wyniki where game='cs'";
        $numTeams = $polaczenie -> query($sql); 
        if($numTeams -> num_rows > 0){
            while($row = $numTeams -> fetch_assoc()){
                if($row['group']=='A'){
                    $A_team1=$row['team1'];
                    $A_team2=$row['team2'];
                    $A_team3=$row['team3'];
                    $A_team4=$row['team4'];
                    $A_team5=$row['team5'];
                    $A_team1_match1=$row['team1_match1'];
                    $A_team1_match2=$row['team1_match2'];
                    $A_team1_match3=$row['team1_match3'];
                    $A_team1_match4=$row['team1_match4'];
                    $A_team2_match1=$row['team2_match1'];
                    $A_team2_match2=$row['team2_match2'];
                    $A_team2_match3=$row['team2_match3'];
                    $A_team2_match4=$row['team2_match4'];
                    $A_team3_match1=$row['team3_match1'];
                    $A_team3_match2=$row['team3_match2'];
                    $A_team3_match3=$row['team3_match3'];
                    $A_team3_match4=$row['team3_match4'];
                    $A_team4_match1=$row['team4_match1'];
                    $A_team4_match2=$row['team4_match2'];
                    $A_team4_match3=$row['team4_match3'];
                    $A_team4_match4=$row['team4_match4'];
                    $A_team5_match1=$row['team5_match1'];
                    $A_team5_match2=$row['team5_match2'];
                    $A_team5_match3=$row['team5_match3'];
                    $A_team5_match4=$row['team5_match4'];
                    $A_team1_team2_date=$row['team1_team2_date'];
                    $A_team1_team3_date=$row['team1_team3_date'];
                    $A_team1_team4_date=$row['team1_team4_date'];
                    $A_team1_team5_date=$row['team1_team5_date'];
                    $A_team2_team3_date=$row['team2_team3_date'];
                    $A_team2_team4_date=$row['team2_team4_date'];
                    $A_team2_team5_date=$row['team2_team5_date'];
                    $A_team3_team4_date=$row['team3_team4_date'];
                    $A_team3_team5_date=$row['team3_team5_date'];
                    $A_team4_team5_date=$row['team4_team5_date'];

                }else if($row['group']=='B'){
                    $B_team1=$row['team1'];
                    $B_team2=$row['team2'];
                    $B_team3=$row['team3'];
                    $B_team4=$row['team4'];
                    $B_team5=$row['team5'];
                    $B_team1_match1=$row['team1_match1'];
                    $B_team1_match2=$row['team1_match2'];
                    $B_team1_match3=$row['team1_match3'];
                    $B_team1_match4=$row['team1_match4'];
                    $B_team2_match1=$row['team2_match1'];
                    $B_team2_match2=$row['team2_match2'];
                    $B_team2_match3=$row['team2_match3'];
                    $B_team2_match4=$row['team2_match4'];
                    $B_team3_match1=$row['team3_match1'];
                    $B_team3_match2=$row['team3_match2'];
                    $B_team3_match3=$row['team3_match3'];
                    $B_team3_match4=$row['team3_match4'];
                    $B_team4_match1=$row['team4_match1'];
                    $B_team4_match2=$row['team4_match2'];
                    $B_team4_match3=$row['team4_match3'];
                    $B_team4_match4=$row['team4_match4'];
                    $B_team5_match1=$row['team5_match1'];
                    $B_team5_match2=$row['team5_match2'];
                    $B_team5_match3=$row['team5_match3'];
                    $B_team5_match4=$row['team5_match4'];
                    $B_team1_team2_date=$row['team1_team2_date'];
                    $B_team1_team3_date=$row['team1_team3_date'];
                    $B_team1_team4_date=$row['team1_team4_date'];
                    $B_team1_team5_date=$row['team1_team5_date'];
                    $B_team2_team3_date=$row['team2_team3_date'];
                    $B_team2_team4_date=$row['team2_team4_date'];
                    $B_team2_team5_date=$row['team2_team5_date'];
                    $B_team3_team4_date=$row['team3_team4_date'];
                    $B_team3_team5_date=$row['team3_team5_date'];
                    $B_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='C'){
                    $C_team1=$row['team1'];
                    $C_team2=$row['team2'];
                    $C_team3=$row['team3'];
                    $C_team4=$row['team4'];
                    $C_team5=$row['team5'];
                    $C_team1_match1=$row['team1_match1'];
                    $C_team1_match2=$row['team1_match2'];
                    $C_team1_match3=$row['team1_match3'];
                    $C_team1_match4=$row['team1_match4'];
                    $C_team2_match1=$row['team2_match1'];
                    $C_team2_match2=$row['team2_match2'];
                    $C_team2_match3=$row['team2_match3'];
                    $C_team2_match4=$row['team2_match4'];
                    $C_team3_match1=$row['team3_match1'];
                    $C_team3_match2=$row['team3_match2'];
                    $C_team3_match3=$row['team3_match3'];
                    $C_team3_match4=$row['team3_match4'];
                    $C_team4_match1=$row['team4_match1'];
                    $C_team4_match2=$row['team4_match2'];
                    $C_team4_match3=$row['team4_match3'];
                    $C_team4_match4=$row['team4_match4'];
                    $C_team5_match1=$row['team5_match1'];
                    $C_team5_match2=$row['team5_match2'];
                    $C_team5_match3=$row['team5_match3'];
                    $C_team5_match4=$row['team5_match4'];
                    $C_team1_team2_date=$row['team1_team2_date'];
                    $C_team1_team3_date=$row['team1_team3_date'];
                    $C_team1_team4_date=$row['team1_team4_date'];
                    $C_team1_team5_date=$row['team1_team5_date'];
                    $C_team2_team3_date=$row['team2_team3_date'];
                    $C_team2_team4_date=$row['team2_team4_date'];
                    $C_team2_team5_date=$row['team2_team5_date'];
                    $C_team3_team4_date=$row['team3_team4_date'];
                    $C_team3_team5_date=$row['team3_team5_date'];
                    $C_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='D'){
                    $D_team1=$row['team1'];
                    $D_team2=$row['team2'];
                    $D_team3=$row['team3'];
                    $D_team4=$row['team4'];
                    $D_team5=$row['team5'];
                    $D_team1_match1=$row['team1_match1'];
                    $D_team1_match2=$row['team1_match2'];
                    $D_team1_match3=$row['team1_match3'];
                    $D_team1_match4=$row['team1_match4'];
                    $D_team2_match1=$row['team2_match1'];
                    $D_team2_match2=$row['team2_match2'];
                    $D_team2_match3=$row['team2_match3'];
                    $D_team2_match4=$row['team2_match4'];
                    $D_team3_match1=$row['team3_match1'];
                    $D_team3_match2=$row['team3_match2'];
                    $D_team3_match3=$row['team3_match3'];
                    $D_team3_match4=$row['team3_match4'];
                    $D_team4_match1=$row['team4_match1'];
                    $D_team4_match2=$row['team4_match2'];
                    $D_team4_match3=$row['team4_match3'];
                    $D_team4_match4=$row['team4_match4'];
                    $D_team5_match1=$row['team5_match1'];
                    $D_team5_match2=$row['team5_match2'];
                    $D_team5_match3=$row['team5_match3'];
                    $D_team5_match4=$row['team5_match4'];
                    $D_team1_team2_date=$row['team1_team2_date'];
                    $D_team1_team3_date=$row['team1_team3_date'];
                    $D_team1_team4_date=$row['team1_team4_date'];
                    $D_team1_team5_date=$row['team1_team5_date'];
                    $D_team2_team3_date=$row['team2_team3_date'];
                    $D_team2_team4_date=$row['team2_team4_date'];
                    $D_team2_team5_date=$row['team2_team5_date'];
                    $D_team3_team4_date=$row['team3_team4_date'];
                    $D_team3_team5_date=$row['team3_team5_date'];
                    $D_team4_team5_date=$row['team4_team5_date'];
                }
            }
        }
    }
    else if($games==2){
        $_SESSION['games'] = $games;
        $sql = "SELECT * FROM wyniki where game='lol'";
        $numTeams = $polaczenie -> query($sql); 
        if($numTeams -> num_rows > 0){
            while($row = $numTeams -> fetch_assoc()){
                if($row['group']=='A'){
                    $A_team1=$row['team1'];
                    $A_team2=$row['team2'];
                    $A_team3=$row['team3'];
                    $A_team4=$row['team4'];
                    $A_team5=$row['team5'];
                    $A_team1_match1=$row['team1_match1'];
                    $A_team1_match2=$row['team1_match2'];
                    $A_team1_match3=$row['team1_match3'];
                    $A_team1_match4=$row['team1_match4'];
                    $A_team2_match1=$row['team2_match1'];
                    $A_team2_match2=$row['team2_match2'];
                    $A_team2_match3=$row['team2_match3'];
                    $A_team2_match4=$row['team2_match4'];
                    $A_team3_match1=$row['team3_match1'];
                    $A_team3_match2=$row['team3_match2'];
                    $A_team3_match3=$row['team3_match3'];
                    $A_team3_match4=$row['team3_match4'];
                    $A_team4_match1=$row['team4_match1'];
                    $A_team4_match2=$row['team4_match2'];
                    $A_team4_match3=$row['team4_match3'];
                    $A_team4_match4=$row['team4_match4'];
                    $A_team5_match1=$row['team5_match1'];
                    $A_team5_match2=$row['team5_match2'];
                    $A_team5_match3=$row['team5_match3'];
                    $A_team5_match4=$row['team5_match4'];
                    $A_team1_team2_date=$row['team1_team2_date'];
                    $A_team1_team3_date=$row['team1_team3_date'];
                    $A_team1_team4_date=$row['team1_team4_date'];
                    $A_team1_team5_date=$row['team1_team5_date'];
                    $A_team2_team3_date=$row['team2_team3_date'];
                    $A_team2_team4_date=$row['team2_team4_date'];
                    $A_team2_team5_date=$row['team2_team5_date'];
                    $A_team3_team4_date=$row['team3_team4_date'];
                    $A_team3_team5_date=$row['team3_team5_date'];
                    $A_team4_team5_date=$row['team4_team5_date'];

                }else if($row['group']=='B'){
                    $B_team1=$row['team1'];
                    $B_team2=$row['team2'];
                    $B_team3=$row['team3'];
                    $B_team4=$row['team4'];
                    $B_team5=$row['team5'];
                    $B_team1_match1=$row['team1_match1'];
                    $B_team1_match2=$row['team1_match2'];
                    $B_team1_match3=$row['team1_match3'];
                    $B_team1_match4=$row['team1_match4'];
                    $B_team2_match1=$row['team2_match1'];
                    $B_team2_match2=$row['team2_match2'];
                    $B_team2_match3=$row['team2_match3'];
                    $B_team2_match4=$row['team2_match4'];
                    $B_team3_match1=$row['team3_match1'];
                    $B_team3_match2=$row['team3_match2'];
                    $B_team3_match3=$row['team3_match3'];
                    $B_team3_match4=$row['team3_match4'];
                    $B_team4_match1=$row['team4_match1'];
                    $B_team4_match2=$row['team4_match2'];
                    $B_team4_match3=$row['team4_match3'];
                    $B_team4_match4=$row['team4_match4'];
                    $B_team5_match1=$row['team5_match1'];
                    $B_team5_match2=$row['team5_match2'];
                    $B_team5_match3=$row['team5_match3'];
                    $B_team5_match4=$row['team5_match4'];
                    $B_team1_team2_date=$row['team1_team2_date'];
                    $B_team1_team3_date=$row['team1_team3_date'];
                    $B_team1_team4_date=$row['team1_team4_date'];
                    $B_team1_team5_date=$row['team1_team5_date'];
                    $B_team2_team3_date=$row['team2_team3_date'];
                    $B_team2_team4_date=$row['team2_team4_date'];
                    $B_team2_team5_date=$row['team2_team5_date'];
                    $B_team3_team4_date=$row['team3_team4_date'];
                    $B_team3_team5_date=$row['team3_team5_date'];
                    $B_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='C'){
                    $C_team1=$row['team1'];
                    $C_team2=$row['team2'];
                    $C_team3=$row['team3'];
                    $C_team4=$row['team4'];
                    $C_team5=$row['team5'];
                    $C_team1_match1=$row['team1_match1'];
                    $C_team1_match2=$row['team1_match2'];
                    $C_team1_match3=$row['team1_match3'];
                    $C_team1_match4=$row['team1_match4'];
                    $C_team2_match1=$row['team2_match1'];
                    $C_team2_match2=$row['team2_match2'];
                    $C_team2_match3=$row['team2_match3'];
                    $C_team2_match4=$row['team2_match4'];
                    $C_team3_match1=$row['team3_match1'];
                    $C_team3_match2=$row['team3_match2'];
                    $C_team3_match3=$row['team3_match3'];
                    $C_team3_match4=$row['team3_match4'];
                    $C_team4_match1=$row['team4_match1'];
                    $C_team4_match2=$row['team4_match2'];
                    $C_team4_match3=$row['team4_match3'];
                    $C_team4_match4=$row['team4_match4'];
                    $C_team5_match1=$row['team5_match1'];
                    $C_team5_match2=$row['team5_match2'];
                    $C_team5_match3=$row['team5_match3'];
                    $C_team5_match4=$row['team5_match4'];
                    $C_team1_team2_date=$row['team1_team2_date'];
                    $C_team1_team3_date=$row['team1_team3_date'];
                    $C_team1_team4_date=$row['team1_team4_date'];
                    $C_team1_team5_date=$row['team1_team5_date'];
                    $C_team2_team3_date=$row['team2_team3_date'];
                    $C_team2_team4_date=$row['team2_team4_date'];
                    $C_team2_team5_date=$row['team2_team5_date'];
                    $C_team3_team4_date=$row['team3_team4_date'];
                    $C_team3_team5_date=$row['team3_team5_date'];
                    $C_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='D'){
                    $D_team1=$row['team1'];
                    $D_team2=$row['team2'];
                    $D_team3=$row['team3'];
                    $D_team4=$row['team4'];
                    $D_team5=$row['team5'];
                    $D_team1_match1=$row['team1_match1'];
                    $D_team1_match2=$row['team1_match2'];
                    $D_team1_match3=$row['team1_match3'];
                    $D_team1_match4=$row['team1_match4'];
                    $D_team2_match1=$row['team2_match1'];
                    $D_team2_match2=$row['team2_match2'];
                    $D_team2_match3=$row['team2_match3'];
                    $D_team2_match4=$row['team2_match4'];
                    $D_team3_match1=$row['team3_match1'];
                    $D_team3_match2=$row['team3_match2'];
                    $D_team3_match3=$row['team3_match3'];
                    $D_team3_match4=$row['team3_match4'];
                    $D_team4_match1=$row['team4_match1'];
                    $D_team4_match2=$row['team4_match2'];
                    $D_team4_match3=$row['team4_match3'];
                    $D_team4_match4=$row['team4_match4'];
                    $D_team5_match1=$row['team5_match1'];
                    $D_team5_match2=$row['team5_match2'];
                    $D_team5_match3=$row['team5_match3'];
                    $D_team5_match4=$row['team5_match4'];
                    $D_team1_team2_date=$row['team1_team2_date'];
                    $D_team1_team3_date=$row['team1_team3_date'];
                    $D_team1_team4_date=$row['team1_team4_date'];
                    $D_team1_team5_date=$row['team1_team5_date'];
                    $D_team2_team3_date=$row['team2_team3_date'];
                    $D_team2_team4_date=$row['team2_team4_date'];
                    $D_team2_team5_date=$row['team2_team5_date'];
                    $D_team3_team4_date=$row['team3_team4_date'];
                    $D_team3_team5_date=$row['team3_team5_date'];
                    $D_team4_team5_date=$row['team4_team5_date'];
                }
            }
        }
    }else{
        $_SESSION['games'] = $games;
        $sql = "SELECT * FROM wyniki where game='mc'";
        $numTeams = $polaczenie -> query($sql); 
        if($numTeams -> num_rows > 0){
            while($row = $numTeams -> fetch_assoc()){
                if($row['group']=='A'){
                    $A_team1=$row['team1'];
                    $A_team2=$row['team2'];
                    $A_team3=$row['team3'];
                    $A_team4=$row['team4'];
                    $A_team5=$row['team5'];
                    $A_team1_match1=$row['team1_match1'];
                    $A_team1_match2=$row['team1_match2'];
                    $A_team1_match3=$row['team1_match3'];
                    $A_team1_match4=$row['team1_match4'];
                    $A_team2_match1=$row['team2_match1'];
                    $A_team2_match2=$row['team2_match2'];
                    $A_team2_match3=$row['team2_match3'];
                    $A_team2_match4=$row['team2_match4'];
                    $A_team3_match1=$row['team3_match1'];
                    $A_team3_match2=$row['team3_match2'];
                    $A_team3_match3=$row['team3_match3'];
                    $A_team3_match4=$row['team3_match4'];
                    $A_team4_match1=$row['team4_match1'];
                    $A_team4_match2=$row['team4_match2'];
                    $A_team4_match3=$row['team4_match3'];
                    $A_team4_match4=$row['team4_match4'];
                    $A_team5_match1=$row['team5_match1'];
                    $A_team5_match2=$row['team5_match2'];
                    $A_team5_match3=$row['team5_match3'];
                    $A_team5_match4=$row['team5_match4'];
                    $A_team1_team2_date=$row['team1_team2_date'];
                    $A_team1_team3_date=$row['team1_team3_date'];
                    $A_team1_team4_date=$row['team1_team4_date'];
                    $A_team1_team5_date=$row['team1_team5_date'];
                    $A_team2_team3_date=$row['team2_team3_date'];
                    $A_team2_team4_date=$row['team2_team4_date'];
                    $A_team2_team5_date=$row['team2_team5_date'];
                    $A_team3_team4_date=$row['team3_team4_date'];
                    $A_team3_team5_date=$row['team3_team5_date'];
                    $A_team4_team5_date=$row['team4_team5_date'];

                }else if($row['group']=='B'){
                    $B_team1=$row['team1'];
                    $B_team2=$row['team2'];
                    $B_team3=$row['team3'];
                    $B_team4=$row['team4'];
                    $B_team5=$row['team5'];
                    $B_team1_match1=$row['team1_match1'];
                    $B_team1_match2=$row['team1_match2'];
                    $B_team1_match3=$row['team1_match3'];
                    $B_team1_match4=$row['team1_match4'];
                    $B_team2_match1=$row['team2_match1'];
                    $B_team2_match2=$row['team2_match2'];
                    $B_team2_match3=$row['team2_match3'];
                    $B_team2_match4=$row['team2_match4'];
                    $B_team3_match1=$row['team3_match1'];
                    $B_team3_match2=$row['team3_match2'];
                    $B_team3_match3=$row['team3_match3'];
                    $B_team3_match4=$row['team3_match4'];
                    $B_team4_match1=$row['team4_match1'];
                    $B_team4_match2=$row['team4_match2'];
                    $B_team4_match3=$row['team4_match3'];
                    $B_team4_match4=$row['team4_match4'];
                    $B_team5_match1=$row['team5_match1'];
                    $B_team5_match2=$row['team5_match2'];
                    $B_team5_match3=$row['team5_match3'];
                    $B_team5_match4=$row['team5_match4'];
                    $B_team1_team2_date=$row['team1_team2_date'];
                    $B_team1_team3_date=$row['team1_team3_date'];
                    $B_team1_team4_date=$row['team1_team4_date'];
                    $B_team1_team5_date=$row['team1_team5_date'];
                    $B_team2_team3_date=$row['team2_team3_date'];
                    $B_team2_team4_date=$row['team2_team4_date'];
                    $B_team2_team5_date=$row['team2_team5_date'];
                    $B_team3_team4_date=$row['team3_team4_date'];
                    $B_team3_team5_date=$row['team3_team5_date'];
                    $B_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='C'){
                    $C_team1=$row['team1'];
                    $C_team2=$row['team2'];
                    $C_team3=$row['team3'];
                    $C_team4=$row['team4'];
                    $C_team5=$row['team5'];
                    $C_team1_match1=$row['team1_match1'];
                    $C_team1_match2=$row['team1_match2'];
                    $C_team1_match3=$row['team1_match3'];
                    $C_team1_match4=$row['team1_match4'];
                    $C_team2_match1=$row['team2_match1'];
                    $C_team2_match2=$row['team2_match2'];
                    $C_team2_match3=$row['team2_match3'];
                    $C_team2_match4=$row['team2_match4'];
                    $C_team3_match1=$row['team3_match1'];
                    $C_team3_match2=$row['team3_match2'];
                    $C_team3_match3=$row['team3_match3'];
                    $C_team3_match4=$row['team3_match4'];
                    $C_team4_match1=$row['team4_match1'];
                    $C_team4_match2=$row['team4_match2'];
                    $C_team4_match3=$row['team4_match3'];
                    $C_team4_match4=$row['team4_match4'];
                    $C_team5_match1=$row['team5_match1'];
                    $C_team5_match2=$row['team5_match2'];
                    $C_team5_match3=$row['team5_match3'];
                    $C_team5_match4=$row['team5_match4'];
                    $C_team1_team2_date=$row['team1_team2_date'];
                    $C_team1_team3_date=$row['team1_team3_date'];
                    $C_team1_team4_date=$row['team1_team4_date'];
                    $C_team1_team5_date=$row['team1_team5_date'];
                    $C_team2_team3_date=$row['team2_team3_date'];
                    $C_team2_team4_date=$row['team2_team4_date'];
                    $C_team2_team5_date=$row['team2_team5_date'];
                    $C_team3_team4_date=$row['team3_team4_date'];
                    $C_team3_team5_date=$row['team3_team5_date'];
                    $C_team4_team5_date=$row['team4_team5_date'];
                }else if($row['group']=='D'){
                    $D_team1=$row['team1'];
                    $D_team2=$row['team2'];
                    $D_team3=$row['team3'];
                    $D_team4=$row['team4'];
                    $D_team5=$row['team5'];
                    $D_team1_match1=$row['team1_match1'];
                    $D_team1_match2=$row['team1_match2'];
                    $D_team1_match3=$row['team1_match3'];
                    $D_team1_match4=$row['team1_match4'];
                    $D_team2_match1=$row['team2_match1'];
                    $D_team2_match2=$row['team2_match2'];
                    $D_team2_match3=$row['team2_match3'];
                    $D_team2_match4=$row['team2_match4'];
                    $D_team3_match1=$row['team3_match1'];
                    $D_team3_match2=$row['team3_match2'];
                    $D_team3_match3=$row['team3_match3'];
                    $D_team3_match4=$row['team3_match4'];
                    $D_team4_match1=$row['team4_match1'];
                    $D_team4_match2=$row['team4_match2'];
                    $D_team4_match3=$row['team4_match3'];
                    $D_team4_match4=$row['team4_match4'];
                    $D_team5_match1=$row['team5_match1'];
                    $D_team5_match2=$row['team5_match2'];
                    $D_team5_match3=$row['team5_match3'];
                    $D_team5_match4=$row['team5_match4'];
                    $D_team1_team2_date=$row['team1_team2_date'];
                    $D_team1_team3_date=$row['team1_team3_date'];
                    $D_team1_team4_date=$row['team1_team4_date'];
                    $D_team1_team5_date=$row['team1_team5_date'];
                    $D_team2_team3_date=$row['team2_team3_date'];
                    $D_team2_team4_date=$row['team2_team4_date'];
                    $D_team2_team5_date=$row['team2_team5_date'];
                    $D_team3_team4_date=$row['team3_team4_date'];
                    $D_team3_team5_date=$row['team3_team5_date'];
                    $D_team4_team5_date=$row['team4_team5_date'];
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ZSE5CUP</title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <nav class="navbar sticky">
        <div class="content">
            <div class="logo">
                <a href="../">ZSE5CUP</a>
            </div>
            <ul class="menu-list">
                <div class="icon cancel-btn">
                    <i class="fas fa-times"></i>
                </div>

                <li><a href="#">ZSE LEAGUE</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt text-red"></i></a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="banner">
        <h1 >Wyniki</h1>
    </div>

    <div class="container" style="padding-top: 20px;">

        <div class="row">
            <!--GRY-->
            <div class="columns_game">
                <div id="game1" class="text-center games"><h3>Counter-Strike:Global Offensive</h3></div>
            </div>

            <div class="columns_game">
                <div id="game2" class="text-center games"><h3>League of Legends</h3></div>
            </div>

            <div class="columns_game">
                <div id="game3" class="text-center games"><h3>Minecraft</h3></div>
            </div>
            <div class="text-center mobile_columns_game">
                    <select name="games" id="games">
                        <option value="cs">Counter-Strike:Global Offensive</option>
                        <option value="lol">Leauge of Legneds</option>
                        <option value="mc">Minecraft</option>
                    </select>
            </div>

        </div>
        <form action="send.php" method="post">   
            <div class="row"> 
                <!--GRY-->
                <div class="row">
                    <!--GRUPA A-->
                    <div class="columns">
                        <div class="name text-center"><h1>GRUPA A</h1></div>
                        <!--TEAM 1-->
                        <h3 class="accordion"><input type="text" value="<?php echo $A_team1;?>" name="A_team1"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team2_date));?>" name="A_team1_team2_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $A_team1_match1;?>" name="A_team1_match1;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $A_team2_match1;?>" name="A_team2_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team2;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team3_date));?>" name="A_team1_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $A_team1_match2;?>" class="pkt" name="A_team1_match2;"></span>:<span class="text-red"><input type="number" class="pkt" value="<?php echo $A_team3_match1;?>" name="A_team3_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team3;?></p>
                            </div>
                        </div>
                        <?php if($A_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team1_team4_date)).'" name="A_team1_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team1_match3.'" class="pkt" name="A_team1_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team4_match1.'" name="A_team4_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($A_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team1_team5_date)).'" name="A_team1_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team1_match4.'" class="pkt" name="A_team1_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team5_match1.'" name="A_team5_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 2-->
                        <h3 class="accordion"><input type="text" value="<?php echo $A_team2;?>" name="A_team2"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team2_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team2_match1;?></span>:<span class="text-red"><?php echo $A_team1_match1;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($A_team2_team3_date));?>" name="A_team2_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $A_team2_match2;?>" name="A_team2_match2;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $A_team3_match2;?>" name="A_team3_match2;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team3;?></p>
                            </div>
                        </div>
                        <?php if($A_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team4!=null) echo  date('Y-m-d\TH:i:s', strtotime($A_team2_team4_date)).'" name="A_team2_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team2_match3.'" class="pkt" name="A_team2_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team4_match2.'" name="A_team4_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($A_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team2_team5_date)).'" name="A_team2_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team2_match4.'" class="pkt" name="A_team2_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team5_match2.'" name="A_team5_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 3-->
                        <h3 class="accordion"><input type="text" value="<?php echo $A_team3;?>" name="A_team3"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team3_match1;?></span>:<span class="text-red"><?php echo $A_team1_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team2_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team3_match2;?></span>:<span class="text-red"><?php echo $A_team2_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team2;?></p>
                            </div>
                        </div>
                        <?php if($A_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team3_team4_date)).'" name="A_team3_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team3_match3.'" class="pkt" name="A_team3_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team4_match3.'" name="A_team4_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($A_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team3_team5_date)).'" name="A_team3_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team3_match4.'" class="pkt" name="A_team3_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team5_match3.'" name="A_team5_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 4-->
                         
                        
                        <h3 class="accordion"><input type="text" value="<?php echo $A_team4; ?>" name="A_team4"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team4_match1; ?></span>:<span class="text-red"><?php echo $A_team1_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team1; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team2_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team4_match2; ?></span>:<span class="text-red"><?php echo $A_team2_match3;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team2; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team3_team4_date)); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $A_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $A_team4_match3; ?></span>:<span class="text-red"><?php echo $A_team3_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $A_team3; ?></p>
                            </div>
                        </div>
                        <?php if($A_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($A_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($A_team4_team5_date)).'" name="A_team4_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$A_team4.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$A_team4_match4.'" class="pkt" name="A_team4_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$A_team5_match4.'" name="A_team5_match4;"></span>
                            </div>
                            <div class="score">
                                <p>'.$A_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>

                        <!--TEAM 5-->
                        <h3 class="accordion"><input type="text" value="<?php echo $A_team5; ?>" name="A_team5"></h3>
                        <div class="panel text-center">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team1_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $A_team5;?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $A_team5_match1; ?></span>:<span class="text-red"><?php echo $A_team1_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $A_team1; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team2_team5_date)); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $A_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $A_team5_match2; ?></span>:<span class="text-red"><?php echo $A_team2_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $A_team2; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team3_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $A_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $A_team5_match3; ?></span>:<span class="text-red"><?php echo $A_team3_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $A_team3; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($A_team4_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $A_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $A_team5_match4;?></span>:<span class="text-red"><?php echo $A_team4_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $A_team4; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--GRUPA B-->
                    <div class="columns">
                        <div class="name text-center"><h1>GRUPA B</h1></div>
                        <!--TEAM 1-->
                        <h3 class="accordion"><input type="text" value="<?php echo $B_team1;?>" name="B_team1"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team2_date));?>" name="B_team1_team2_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $B_team1_match1;?>" name="B_team1_match1;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $B_team2_match1;?>" name="B_team2_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team2;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team3_date));?>" name="B_team1_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $B_team1_match2;?>" class="pkt" name="B_team1_match2;"></span>:<span class="text-red"><input type="number" class="pkt" value="<?php echo $B_team3_match1;?>" name="B_team3_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team3;?></p>
                            </div>
                        </div>
                        <?php if($B_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team1_team4_date)).'" name="B_team1_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team1_match3.'" class="pkt" name="B_team1_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team4_match1.'" name="B_team4_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($B_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team1_team5_date)).'" name="B_team1_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team1_match4.'" class="pkt" name="B_team1_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team5_match1.'" name="B_team5_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 2-->
                        <h3 class="accordion"><input type="text" value="<?php echo $B_team2;?>" name="B_team2"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team2_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team2_match1;?></span>:<span class="text-red"><?php echo $B_team1_match1;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($B_team2_team3_date));?>" name="B_team2_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $B_team2_match2;?>" name="B_team2_match2;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $B_team3_match2;?>" name="B_team3_match2;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team3;?></p>
                            </div>
                        </div>
                        <?php if($B_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team4!=null) echo  date('Y-m-d\TH:i:s', strtotime($B_team2_team4_date)).'" name="B_team2_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team2_match3.'" class="pkt" name="B_team2_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team4_match2.'" name="B_team4_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($B_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team2_team5_date)).'" name="B_team2_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team2_match4.'" class="pkt" name="B_team2_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team5_match2.'" name="B_team5_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 3-->
                        <h3 class="accordion"><input type="text" value="<?php echo $B_team3;?>" name="B_team3"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team3_match1;?></span>:<span class="text-red"><?php echo $B_team1_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team2_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team3_match2;?></span>:<span class="text-red"><?php echo $B_team2_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team2;?></p>
                            </div>
                        </div>
                        <?php if($B_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team3_team4_date)).'" name="B_team3_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team3_match3.'" class="pkt" name="B_team3_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team4_match3.'" name="B_team4_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($B_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team3_team5_date)).'" name="B_team3_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team3_match4.'" class="pkt" name="B_team3_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team5_match3.'" name="B_team5_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 4-->
                         
                        
                        <h3 class="accordion"><input type="text" value="<?php echo $B_team4; ?>" name="B_team4"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team4_match1; ?></span>:<span class="text-red"><?php echo $B_team1_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team1; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team2_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team4_match2; ?></span>:<span class="text-red"><?php echo $B_team2_match3;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team2; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team3_team4_date)); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $B_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $B_team4_match3; ?></span>:<span class="text-red"><?php echo $B_team3_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $B_team3; ?></p>
                            </div>
                        </div>
                        <?php if($B_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($B_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($B_team4_team5_date)).'" name="B_team4_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$B_team4.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$B_team4_match4.'" class="pkt" name="B_team4_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$B_team5_match4.'" name="B_team5_match4;"></span>
                            </div>
                            <div class="score">
                                <p>'.$B_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>

                        <!--TEAM 5-->
                        <h3 class="accordion"><input type="text" value="<?php echo $B_team5; ?>" name="B_team5"></h3>
                        <div class="panel text-center">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team1_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $B_team5;?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $B_team5_match1; ?></span>:<span class="text-red"><?php echo $B_team1_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $B_team1; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team2_team5_date)); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $B_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $B_team5_match2; ?></span>:<span class="text-red"><?php echo $B_team2_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $B_team2; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team3_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $B_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $B_team5_match3; ?></span>:<span class="text-red"><?php echo $B_team3_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $B_team3; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($B_team4_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $B_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $B_team5_match4;?></span>:<span class="text-red"><?php echo $B_team4_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $B_team4; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <!--GRUPA C-->
                    <div class="columns">
                        <div class="name text-center"><h1>GRUPA C</h1></div>
                        <!--TEAM 1-->
                        <h3 class="accordion"><input type="text" value="<?php echo $C_team1;?>" name="C_team1"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team2_date));?>" name="C_team1_team2_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $C_team1_match1;?>" name="C_team1_match1;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $C_team2_match1;?>" name="C_team2_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team2;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team3_date));?>" name="C_team1_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $C_team1_match2;?>" class="pkt" name="C_team1_match2;"></span>:<span class="text-red"><input type="number" class="pkt" value="<?php echo $C_team3_match1;?>" name="C_team3_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team3;?></p>
                            </div>
                        </div>
                        <?php if($C_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team1_team4_date)).'" name="C_team1_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team1_match3.'" class="pkt" name="C_team1_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team4_match1.'" name="C_team4_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($C_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team1_team5_date)).'" name="C_team1_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team1_match4.'" class="pkt" name="C_team1_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team5_match1.'" name="C_team5_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 2-->
                        <h3 class="accordion"><input type="text" value="<?php echo $C_team2;?>" name="C_team2"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team2_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team2_match1;?></span>:<span class="text-red"><?php echo $C_team1_match1;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($C_team2_team3_date));?>" name="C_team2_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $C_team2_match2;?>" name="C_team2_match2;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $C_team3_match2;?>" name="C_team3_match2;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team3;?></p>
                            </div>
                        </div>
                        <?php if($C_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team4!=null) echo  date('Y-m-d\TH:i:s', strtotime($C_team2_team4_date)).'" name="C_team2_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team2_match3.'" class="pkt" name="C_team2_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team4_match2.'" name="C_team4_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($C_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team2_team5_date)).'" name="C_team2_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team2_match4.'" class="pkt" name="C_team2_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team5_match2.'" name="C_team5_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 3-->
                        <h3 class="accordion"><input type="text" value="<?php echo $C_team3;?>" name="C_team3"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team3_match1;?></span>:<span class="text-red"><?php echo $C_team1_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team2_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team3_match2;?></span>:<span class="text-red"><?php echo $C_team2_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team2;?></p>
                            </div>
                        </div>
                        <?php if($C_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team3_team4_date)).'" name="C_team3_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team3_match3.'" class="pkt" name="C_team3_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team4_match3.'" name="C_team4_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($C_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team3_team5_date)).'" name="C_team3_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team3_match4.'" class="pkt" name="C_team3_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team5_match3.'" name="C_team5_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 4-->
                         
                        
                        <h3 class="accordion"><input type="text" value="<?php echo $C_team4; ?>" name="C_team4"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team4_match1; ?></span>:<span class="text-red"><?php echo $C_team1_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team1; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team2_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team4_match2; ?></span>:<span class="text-red"><?php echo $C_team2_match3;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team2; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team3_team4_date)); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $C_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $C_team4_match3; ?></span>:<span class="text-red"><?php echo $C_team3_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $C_team3; ?></p>
                            </div>
                        </div>
                        <?php if($C_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($C_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($C_team4_team5_date)).'" name="C_team4_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$C_team4.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$C_team4_match4.'" class="pkt" name="C_team4_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$C_team5_match4.'" name="C_team5_match4;"></span>
                            </div>
                            <div class="score">
                                <p>'.$C_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>

                        <!--TEAM 5-->
                        <h3 class="accordion"><input type="text" value="<?php echo $C_team5; ?>" name="C_team5"></h3>
                        <div class="panel text-center">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team1_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $C_team5;?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $C_team5_match1; ?></span>:<span class="text-red"><?php echo $C_team1_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $C_team1; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team2_team5_date)); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $C_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $C_team5_match2; ?></span>:<span class="text-red"><?php echo $C_team2_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $C_team2; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team3_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $C_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $C_team5_match3; ?></span>:<span class="text-red"><?php echo $C_team3_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $C_team3; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($C_team4_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $C_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $C_team5_match4;?></span>:<span class="text-red"><?php echo $C_team4_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $C_team4; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--GRUPA D-->
                    <div class="columns">
                        <div class="name text-center"><h1>GRUPA D</h1></div>
                        <!--TEAM 1-->
                        <h3 class="accordion"><input type="text" value="<?php echo $D_team1;?>" name="D_team1"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team2_date));?>" name="D_team1_team2_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $D_team1_match1;?>" name="D_team1_match1;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $D_team2_match1;?>" name="D_team2_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team2;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team3_date));?>" name="D_team1_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team1;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $D_team1_match2;?>" class="pkt" name="D_team1_match2;"></span>:<span class="text-red"><input type="number" class="pkt" value="<?php echo $D_team3_match1;?>" name="D_team3_match1;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team3;?></p>
                            </div>
                        </div>
                        <?php if($D_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team1_team4_date)).'" name="D_team1_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team1_match3.'" class="pkt" name="D_team1_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team4_match1.'" name="D_team4_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($D_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team1_team5_date)).'" name="D_team1_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team1.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team1_match4.'" class="pkt" name="D_team1_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team5_match1.'" name="D_team5_match1;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 2-->
                        <h3 class="accordion"><input type="text" value="<?php echo $D_team2;?>" name="D_team2"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team2_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team2_match1;?></span>:<span class="text-red"><?php echo $D_team1_match1;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="<?php echo date('Y-m-d\TH:i:s', strtotime($D_team2_team3_date));?>" name="D_team2_team3_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team2;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="<?php echo $D_team2_match2;?>" name="D_team2_match2;" class="pkt"></span>:<span class="text-red"><input class="pkt" type="number" value="<?php echo $D_team3_match2;?>" name="D_team3_match2;"></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team3;?></p>
                            </div>
                        </div>
                        <?php if($D_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team4!=null) echo  date('Y-m-d\TH:i:s', strtotime($D_team2_team4_date)).'" name="D_team2_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team2_match3.'" class="pkt" name="D_team2_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team4_match2.'" name="D_team4_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($D_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team2_team5_date)).'" name="D_team2_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team2.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team2_match4.'" class="pkt" name="D_team2_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team5_match2.'" name="D_team5_match2;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 3-->
                        <h3 class="accordion"><input type="text" value="<?php echo $D_team3;?>" name="D_team3"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team3_match1;?></span>:<span class="text-red"><?php echo $D_team1_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team1;?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team2_team3_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team3;?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team3_match2;?></span>:<span class="text-red"><?php echo $D_team2_match2;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team2;?></p>
                            </div>
                        </div>
                        <?php if($D_team4!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team4!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team3_team4_date)).'" name="D_team3_team4_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team3_match3.'" class="pkt" name="D_team3_match3;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team4_match3.'" name="D_team4_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team4.'</p>
                            </div>
                        </div>
                        ';?>
                        <?php if($D_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team3_team5_date)).'" name="D_team3_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team3.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team3_match4.'" class="pkt" name="D_team3_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team5_match3.'" name="D_team5_match3;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>
                        <!--TEAM 4-->
                         
                        
                        <h3 class="accordion"><input type="text" value="<?php echo $D_team4; ?>" name="D_team4"></h3>
                        <div class="panel text-center">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team4_match1; ?></span>:<span class="text-red"><?php echo $D_team1_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team1; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team2_team4_date));?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team4_match2; ?></span>:<span class="text-red"><?php echo $D_team2_match3;?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team2; ?></p>
                            </div>
                        </div>
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team3_team4_date)); ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p><?php echo $D_team4; ?></p>
                            </div>
                            <div class="score">
                                <span class="text-green"><?php echo $D_team4_match3; ?></span>:<span class="text-red"><?php echo $D_team3_match3; ?></span>
                            </div>
                            <div class="score">
                                <p><?php echo $D_team3; ?></p>
                            </div>
                        </div>
                        <?php if($D_team5!=null) echo '
                        <hr class="hr-match">
                        <div class="row">
                            <div class="date">
                                <span class="text-center"><input type="datetime-local" value="'; if($D_team5!=null) echo date('Y-m-d\TH:i:s', strtotime($D_team4_team5_date)).'" name="D_team4_team5_date;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="score">
                                <p>'.$D_team4.'</p>
                            </div>
                            <div class="score">
                                <span class="text-green"><input type="number" value="'.$D_team4_match4.'" class="pkt" name="D_team4_match4;"></span>:<span class="text-red"><input type="number" class="pkt" value="'.$D_team5_match4.'" name="D_team5_match4;"></span>
                            </div>
                            <div class="score">
                                <p>'.$D_team5.'</p>
                            </div>
                        </div>
                        
                        ';?>
                        </div>

                        <!--TEAM 5-->
                        <h3 class="accordion"><input type="text" value="<?php echo $D_team5; ?>" name="D_team5"></h3>
                        <div class="panel text-center">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team1_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $D_team5;?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $D_team5_match1; ?></span>:<span class="text-red"><?php echo $D_team1_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $D_team1; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team2_team5_date)); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $D_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $D_team5_match2; ?></span>:<span class="text-red"><?php echo $D_team2_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $D_team2; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team3_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $D_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $D_team5_match3; ?></span>:<span class="text-red"><?php echo $D_team3_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $D_team3; ?></p>
                                </div>
                            </div>
                            <hr class="hr-match">
                            <div class="row">
                                <div class="date">
                                    <span class="text-center"><?php echo date('Y-m-d\TH:i:s', strtotime($D_team4_team5_date));?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="score">
                                    <p><?php echo $D_team5; ?></p>
                                </div>
                                <div class="score">
                                    <span class="text-green"><?php echo $D_team5_match4;?></span>:<span class="text-red"><?php echo $D_team4_match4; ?></span>
                                </div>
                                <div class="score">
                                    <p><?php echo $D_team4; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <input id="accept" type="submit" value="Zastosuj">
    </form>
                                    
                                

                               
        
    </div>
    
    <footer>
        <p>
            Copyright &copy; 2022 <br>
            <a id="ft_od" href="https://esportwzse.pl/">ZSE5CUP</a><br>
            Created by: <a class="author" href="https://www.facebook.com/DuolyStudio" target="_blank">Duoly</a>
            <br>
            <a href="https://www.youtube.com/c/ZSECUP"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/esportwzse"><i class="fab fa-facebook-f"></i></a>
        </p>
    </footer>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("actived");

                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                    
                }
            });
        }
        
        window.onload = function () {
            <?php
                echo '$games='.$games.';';    
            ?>
            if($games==1){
                var value = "Counter-Strike:Global Offensive";
                $('#games option:contains(' + value + ')').prop({selected: true});
                $('#game1').addClass("active_game");
            }else if($games==2){
                var value = "Leauge of Legneds";
                $('#games option:contains(' + value + ')').prop({selected: true});
                $('#game2').addClass("active_game");
            }else if($games==3){
                var value = "Minecraft";
                $('#games option:contains(' + value + ')').prop({selected: true});
                $('#game3').addClass("active_game");
            }
        }

        $('#games').change(function(){ 
            if($('#games').val()=="cs"){
                document.cookie="games=1";
                location.reload(true);
            }else if($('#games').val()=="lol"){
                document.cookie="games=2";
                location.reload(true);
            }else {
                document.cookie="games=3";
                location.reload(true);
                var value = "Minecraft";
            }
        });
        



        $('#game1').click(function(){
            document.cookie="games=1";
                location.reload(true);
        });
        $('#game2').click(function(){
            document.cookie="games=2";
                location.reload(true);
        });
        $('#game3').click(function(){
            document.cookie="games=3";
                location.reload(true);
        });

    </script>

</body>
</html>