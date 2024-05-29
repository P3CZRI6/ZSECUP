<?php
    header("Location: ../");
?>

<!DOCTYPE html>
<html lang="pl">
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
                <li><a href="../">Strona Główna</a></li>
                <li><a href="../rejestracja">Rejestracja</a></li>
                <li><a class="active" href="#">Wyniki</a></li>
                <li><a href="../druzyny">Drużyny</a></li>
                <li><a href="../zsebet">Typowanie</a></li>
                <li><a href="../o_nas">O nas</a></li>
                <li><a href="../kontakt">Kontakt</a></li>
                <li><a href="../zseleague">ZSE LEAGUE</a></li>
                <li><a href="login"><i class="fas fa-user-lock text-red"></i></a></li>
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
            
        <div class="row">     
        <?php
                        require_once "connect.php";
                        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                        $polaczenie -> query ('SET NAMES utf8');
                        
                        if($_COOKIE['games']!=null){$games = $_COOKIE['games'];}
                        
                        else{$games=1;}
                        if($games==1){
                            $sql = "SELECT * FROM wyniki where game='cs'";
                        }
                        else if($games==2){
                            $sql = "SELECT * FROM wyniki where game='lol'";
                        }else{
                            $sql = "SELECT * FROM wyniki where game='mc'";
                        }
                        
                        
                        
                        $numTeams = $polaczenie -> query($sql); 

                        if($numTeams -> num_rows > 0){
                            while($row = $numTeams -> fetch_assoc()){

                                $team1_score_1=0;
                                $team1_score_2=0;
                                $team2_score_1=0;
                                $team2_score_2=0;
                                $team3_score_1=0;
                                $team3_score_2=0;
                                $team4_score_1=0;
                                $team4_score_2=0;
                                $team5_score_1=0;
                                $team5_score_2=0;
                                // Calculate
                                 // Team 1
                                 if($row['team1_match1']>$row['team2_match1']){
                                    $team1_score_1++;
                                 }else if($row['team1_match1']==$row['team2_match1']){

                                 }else $team1_score_2++;

                                 if($row['team1_match2']>$row['team3_match1']){
                                    $team1_score_1++;
                                 }else if($row['team1_match2']==$row['team3_match1']){
                                     
                                 }else $team1_score_2++;

                                 if($row['team4']!=null){
                                    if($row['team1_match3']>$row['team4_match1']){
                                        $team1_score_1++;
                                     }else if($row['team1_match3']==$row['team4_match1']){
                                     
                                    }else $team1_score_2++;
                                 }

                                 if($row['team5']!=null){
                                    if($row['team1_match4']>$row['team5_match1']){
                                        $team1_score_1++;
                                     }else if($row['team1_match4']==$row['team5_match1']){
                                        
                                     }else $team1_score_2++;
                                 }

                                 // Team 2
                                 if($row['team2_match1']>$row['team1_match1']){
                                    $team2_score_1++;
                                 }else if($row['team2_match1']==$row['team1_match1']){
                                    
                                 }else $team2_score_2++;
                                 
                                 if($row['team2_match2']>$row['team3_match2']){
                                    $team2_score_1++;
                                 }else if($row['team2_match2']==$row['team3_match2']){
                                    
                                 }else $team2_score_2++;

                                 if($row['team4']!=null){
                                    if($row['team2_match3']>$row['team4_match2']){
                                        $team2_score_1++;
                                     }else if($row['team2_match3']==$row['team4_match2']){
                                        
                                     }else $team2_score_2++;
                                 }

                                 if($row['team5']!=null){
                                    if($row['team2_match4']>$row['team5_match2']){
                                        $team2_score_1++;
                                     }else if($row['team2_match4']==$row['team5_match2']){
                                        
                                     }else $team2_score_2++;
                                 }

                                 // Team 3
                                 if($row['team3_match1']>$row['team1_match2']){
                                    $team3_score_1++;
                                 }else if($row['team3_match1']==$row['team1_match2']){
                                    
                                 }else $team3_score_2++;
                                 
                                 if($row['team3_match2']>$row['team2_match2']){
                                    $team3_score_1++;
                                 }else if($row['team3_match2']==$row['team2_match2']){
                                    
                                 }else $team3_score_2++;

                                 if($row['team4']!=null){
                                    if($row['team3_match3']>$row['team4_match3']){
                                        $team3_score_1++;
                                     }else if($row['team3_match3']==$row['team4_match3']){
                                        
                                     }else $team3_score_2++;
                                 }

                                 if($row['team5']!=null){
                                    if($row['team3_match4']>$row['team5_match3']){
                                        $team3_score_1++;
                                     }else if($row['team3_match4']==$row['team5_match3']){
                                        
                                     }else $team3_score_2++;
                                 }

                                 // Team 4
                                 if($row['team4_match1']>$row['team1_match3']){
                                    $team4_score_1++;
                                 }else if($row['team4_match1']==$row['team1_match3']){
                                    
                                 }else $team4_score_2++;
                                 
                                 if($row['team4_match2']>$row['team2_match3']){
                                    $team4_score_1++;
                                 }else if($row['team4_match2']==$row['team2_match3']){
                                    
                                 }else $team4_score_2++;

                                    if($row['team4_match3']>$row['team3_match3']){
                                        $team4_score_1++;
                                     }else if($row['team4_match3']==$row['team3_match3']){
                                        
                                     }else $team4_score_2++;

                                 if($row['team5']!=null){
                                    if($row['team4_match4']>$row['team5_match4']){
                                        $team4_score_1++;
                                     }else if($row['team4_match4']==$row['team5_match4']){
                                        
                                     }else $team4_score_2++;
                                 }

                                 // Team 5
                                 if($row['team5_match1']>$row['team1_match4']){
                                    $team5_score_1++;
                                 }else if($row['team5_match1']==$row['team1_match4']){
                                    
                                 }else $team5_score_2++;
                                 
                                 if($row['team5_match2']>$row['team2_match4']){
                                    $team5_score_1++;
                                 }else if($row['team5_match2']==$row['team2_match4']){
                                    
                                 }else $team5_score_2++;

                                    if($row['team5_match3']>$row['team3_match4']){
                                        $team5_score_1++;
                                     }else if($row['team5_match3']==$row['team3_match4']){
                                        
                                     }else $team5_score_2++;

                                    if($row['team5_match4']>$row['team4_match4']){
                                        $team5_score_1++;
                                     }else if($row['team5_match4']==$row['team4_match4']){
                                        
                                     }else $team5_score_2++;
                                 
                                 

                                 // Send
                                 $game = $row['game'];
                                 $group = $row['group'];
                                 if($game=='cs' && $group=='A') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=1");
                                 else if($game=='cs' && $group=='B') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=2");
                                 else if($game=='cs' && $group=='C') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=3");
                                 else if($game=='cs' && $group=='D') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=4");

                                 else if($game=='lol' && $group=='A') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=5");
                                 else if($game=='lol' && $group=='B') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=6");
                                 else if($game=='lol' && $group=='C') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=7");
                                 else if($game=='lol' && $group=='D') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=8");

                                 else if($game=='mc' && $group=='A') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=9");
                                 else if($game=='mc' && $group=='B') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=10");
                                 else if($game=='mc' && $group=='C') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=11");
                                 else if($game=='mc' && $group=='D') $polaczenie->query("UPDATE `wyniki` SET `team1_score_1`='$team1_score_1',`team1_score_2`='$team1_score_2',`team2_score_1`='$team2_score_1',`team2_score_2`='$team2_score_2',`team3_score_1`='$team3_score_1',`team3_score_2`='$team3_score_2', `team4_score_1`='$team4_score_1',`team4_score_2`='$team4_score_2', `team5_score_1`='$team5_score_1',`team5_score_2`='$team5_score_2'  WHERE id=12");
                                 

                                
                                 // Strona
                                     if($group=='A' ||$group=='C') echo '<div class="row">';
                                echo '
                                    <div class="columns">
                                    <div class="name text-center"><h1>GRUPA '.$row['group'].'</h1></div>

                                    <h3 class="accordion">'.$row['team1'].'<span class="text-red text-right">'.$row['team1_score_2'].'</span><span class="text-right">:</span><span class="text-green text-right">'.$row['team1_score_1'].'</span></h3>
                                    <div class="panel text-center">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team2_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team1_match1'].'</span>:<span class="text-red">'.$row['team2_match1'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team3_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team1_match2'].'</span>:<span class="text-red">'.$row['team3_match1'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team4']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team4_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team1_match3'].'</span>:<span class="text-red">'.$row['team4_match1'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team5']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team1_match4'].'</span>:<span class="text-red">'.$row['team5_match1'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                        </div>';
                                        echo'
                                    </div>

                                    <h3 class="accordion">'.$row['team2'].'<span class="text-red text-right">'.$row['team2_score_2'].'</span><span class="text-right">:</span><span class="text-green text-right">'.$row['team2_score_1'].'</span></h3>
                                    <div class="panel text-center">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team2_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team2_match1'].'</span>:<span class="text-red">'.$row['team1_match1'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team3_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team2_match2'].'</span>:<span class="text-red">'.$row['team3_match2'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team4']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team4_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team2_match3'].'</span>:<span class="text-red">'.$row['team4_match2'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team5']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team2_match4'].'</span>:<span class="text-red">'.$row['team5_match2'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                        </div>';
                                        echo '
                                    </div>

                                    <h3 class="accordion">'.$row['team3'].'<span class="text-red text-right">'.$row['team3_score_2'].'</span><span class="text-right">:</span><span class="text-green text-right">'.$row['team3_score_1'].'</span></h3>
                                    <div class="panel text-center">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team3_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team3_match1'].'</span>:<span class="text-red">'.$row['team1_match2'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team3_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team3_match2'].'</span>:<span class="text-red">'.$row['team2_match2'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team4']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team3_team4_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team3_match3'].'</span>:<span class="text-red">'.$row['team4_match3'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team5']!=null) echo '
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team3_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team3_match4'].'</span>:<span class="text-red">'.$row['team5_match3'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                        </div>';
                                        echo '
                                    </div>';
                                    if($row['team4']!=null) echo '
                                    <h4 class="accordion">'.$row['team4'].'<span class="text-red text-right">'.$row['team4_score_2'].'</span><span class="text-right">:</span><span class="text-green text-right">'.$row['team4_score_1'].'</span></h4>
                                    <div class="panel text-center">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center"><div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team4_date'].'</span>
                                            </div>
                                        </div></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team4_match1'].'</span>:<span class="text-red">'.$row['team1_match3'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team4_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team4_match2'].'</span>:<span class="text-red">'.$row['team2_match3'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team3_team4_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team4_match3'].'</span>:<span class="text-red">'.$row['team3_match3'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                        </div>';
                                        if($row['team5']!=null){ echo '
                                            <hr class="hr-match">
                                            <div class="row">
                                                <div class="date">
                                                    <span class="text-center">'.$row['team4_team5_date'].'</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="score">
                                                    <p>'.$row['team4'].'</p>
                                                </div>
                                                <div class="score">
                                                    <span class="text-green">'.$row['team4_match4'].'</span>:<span class="text-red">'.$row['team5_match4'].'</span>
                                                </div>
                                                <div class="score">
                                                    <p>'.$row['team5'].'</p>
                                                </div>
                                            </div>';
                                        }
                                    if($row['team4']!=null) echo '      
                                        </div>';
                                    
                                    if($row['team5']!=null) echo '
                                    <h4 class="accordion">'.$row['team5'].'<span class="text-red text-right">'.$row['team5_score_2'].'</span><span class="text-right">:</span><span class="text-green text-right">'.$row['team5_score_1'].'</span></h4>
                                    <div class="panel text-center">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center"><div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team1_team5_date'].'</span>
                                            </div>
                                        </div></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team5_match1'].'</span>:<span class="text-red">'.$row['team1_match4'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team1'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team2_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team5_match2'].'</span>:<span class="text-red">'.$row['team2_match4'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team2'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team3_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team5_match3'].'</span>:<span class="text-red">'.$row['team3_match4'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team3'].'</p>
                                            </div>
                                        </div>
                                        <hr class="hr-match">
                                        <div class="row">
                                            <div class="date">
                                                <span class="text-center">'.$row['team4_team5_date'].'</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="score">
                                                <p>'.$row['team5'].'</p>
                                            </div>
                                            <div class="score">
                                                <span class="text-green">'.$row['team5_match4'].'</span>:<span class="text-red">'.$row['team4_match4'].'</span>
                                            </div>
                                            <div class="score">
                                                <p>'.$row['team4'].'</p>
                                            </div>
                                        </div>
                                    </div>
                                

                                '; 
                                echo '</div>'; 
                                if($group=='B' ||$group=='D') echo '</div>';
                            }
                        }
                        else{
                            echo '<p class="center">Aktualnie nikt się jeszcze nie zapisał</p>';
                        }
                        
        ?>
        </div>
    </div>
    <footer>
        <p>
            Copyright &copy; 2022 <br>
            <a id="ft_od" href="https://esportwzse.pl/">ZSE5CUP</a><br>
            Created by: <a class="author" href="https://www.facebook.com/DuolyStudio" target="_blank">Duoly</a>
            <br>
            <a href="https://www.youtube.com/channel/UCdVYF9c0wAvLKOAI09adOsw/videos"><i class="fab fa-youtube"></i></a>
            <a href="https://www.facebook.com/esportwzse"><i class="fab fa-facebook-f"></i></a>
        </p>
    </footer>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script  src="script.js"></script>


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