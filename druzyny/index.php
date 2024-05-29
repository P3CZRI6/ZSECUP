<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZSE7CUP</title>
        <link rel="icon" href="IMG/logo.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>
        <nav class="navbar sticky">
            <div class="content">
                <div class="logo">
                    <a href="../">ZSE7CUP</a>
                    &nbsp;&nbsp;&nbsp;<a href="https://www.youtube.com/@esportwzse"><i class="fab fa-youtube"></i></a>
                &nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/esportzsecup"><i class="fab fa-facebook-f"></i></a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="../">Strona Główna</a></li>
                    <li><a href="../rejestracja">Rejestracja</a></li>
                    <li><a class="active" href="../druzyny">Drużyny</a></li>
                    <li><a href="../zsebet">Typowanie</a></li>
                    <li><a href="../kontakt">Kontakt</a></li>
                    <li><a href="../wyniki.html">Wyniki</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        <div class="banner">
            <h1>Drużyny</h1>
        </div>
        <div class="about">
            <!--CS GO-->
            <h2 class="gra color">Counter-Strike 2<br>
                Liczba drużyn: <?php
                    require_once "../rejestracja/connect.php";
                    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                    $polaczenie -> query ('SET NAMES utf8');
                    
                    $teams = $polaczenie -> query("SELECT * FROM teams WHERE Game='csgo'");
                    $team = $teams -> num_rows;
                    echo $team;
                ?>
            </h2>
            <div class="content-text">
                <div class="row">
                <?php
                        require_once "../rejestracja/connect.php";
                        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                        $polaczenie -> query ('SET NAMES utf8');
                    
                        $sql = "SELECT * FROM teams where Game='csgo'";
                        $numTeams = $polaczenie -> query($sql); 

                        if($numTeams -> num_rows > 0){
                            while($row = $numTeams -> fetch_assoc()){
                                echo '
                                <div class="column">
                                    <h2>'. $row['Team_name'].'<span class="name">'. $row['Team_tag'].'</span></h2>
                                    <ul class="team">
                                ';

                                $help = 1;
                                $players_ask = "SELECT * FROM gamers where team_ID='".$row['id']." ORDER BY `id` ASC'";
                                $players_num = $polaczenie -> query($players_ask);
                                while($player_row = $players_num -> fetch_assoc()){
                                    if($help == 1){
                                        echo '
                                        <li class="team-player capitan">'.$player_row['Name'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Surname'].' <span class="klasa">'.$player_row['Class'].'</span></li>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <li class="team-player">'.$player_row['Name'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Surname'].' <span class="klasa">'.$player_row['Class'].'</span></li>
                                        ';
                                    }
                                    $help++;
                                }

                                echo '
                                    </ul>
                                </div>
                                ';
                            }
                        }
                        else{
                            echo '<p class="center">Aktualnie nikt się jeszcze nie zapisał</p>';
                        }
                    ?>
                </div>
            </div>
            <!--Lol-->
            <h2 class="gra color">League of Legends<br>
                Liczba drużyn: <?php
                    require_once "../rejestracja/connect.php";
                    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                    $polaczenie -> query ('SET NAMES utf8');
                    
                    $teams = $polaczenie -> query("SELECT * FROM teams WHERE Game='lol'");
                    $team = $teams -> num_rows;
                    echo $team;
                ?>
            </h2>
            <div class="content-text">
                <div class="row">
                    <?php
                        require_once "../rejestracja/connect.php";
                        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                        $polaczenie -> query ('SET NAMES utf8');
                    
                        $sql = "SELECT * FROM teams where Game='lol'";
                        $numTeams = $polaczenie -> query($sql); 

                        if($numTeams -> num_rows > 0){
                            while($row = $numTeams -> fetch_assoc()){
                                echo '
                                <div class="column">
                                    <h2>'. $row['Team_name'].'<span class="name">'. $row['Team_tag'].'</span></h2>
                                    <ul class="team">
                                ';

                                $help = 1;
                                $players_ask = "SELECT * FROM gamers where team_ID='".$row['id']." ORDER BY `id` ASC'";
                                $players_num = $polaczenie -> query($players_ask);
                                while($player_row = $players_num -> fetch_assoc()){
                                    if($help == 1){
                                        echo '
                                        <li class="team-player capitan">'.$player_row['Name'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Surname'].' <span class="klasa">'.$player_row['Class'].'</span></li>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <li class="team-player">'.$player_row['Name'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Surname'].' <span class="klasa">'.$player_row['Class'].'</span></li>
                                        ';
                                    }
                                    $help++;
                                }

                                echo '
                                    </ul>
                                </div>
                                ';
                            }
                        }
                        else{
                            echo '<p class="center">Aktualnie nikt się jeszcze nie zapisał</p>';
                        }
                    ?>
                </div>
            </div>
            <!--Minecraft-->
             <h2 class="gra color">Dirt 2.0<br>
                Liczba Kierowców: <?php
                    require_once "../rejestracja/connect.php";
                    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                    $polaczenie -> query ('SET NAMES utf8');
                    
                    $teams = $polaczenie -> query("SELECT * FROM zsecup_dirt");
                    $team = $teams -> num_rows;
                    echo $team;
                ?>
            </h2>
            <div class="content-text">
                <div class="row">
                <?php
                        require_once "../rejestracja/connect.php";
                        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                        $polaczenie -> query ('SET NAMES utf8');
                    
                        $sql = "SELECT * FROM zsecup_dirt";
                        $numTeams = $polaczenie -> query($sql); 
                        $licznik=1;
                         if($numTeams -> num_rows > 0){
                             while($row = $numTeams -> fetch_assoc()){
                                
                                 echo '
                                 <div class="column">
                                 <h2>'."Kierowca ". $licznik.'</h2>
                                     <ul class="team">
                                 ';

                                $licznik++;

                                $help = 1;
                                $players_ask = "SELECT * FROM zsecup_dirt where id='".$row['id']." ORDER BY `id` ASC'";
                                $players_num = $polaczenie -> query($players_ask);
                                while($player_row = $players_num -> fetch_assoc()){
                                    if($help == 1){
                                        echo '
                                        <li class="team-player capitan">'.$player_row['Imie'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Nazwisko'].' <span class="klasa">'.$player_row['Klasa'].'</span></li>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <li class="team-player">'.$player_row['Imie'].' <span class="color">'.$player_row['Nick'].'</span> '.$player_row['Nazwisko'].' <span class="klasa">'.$player_row['Klasa'].'</span></li>
                                        ';
                                    }
                                    $help++;
                                }

                                echo '
                                    </ul>
                                </div>
                                ';
                            }
                        }
                        else{
                            echo '<p class="center">Aktualnie nikt się jeszcze nie zapisał</p>';
                        }
                    ?>
                </div> 
            </div>
        </div>
        <footer>
            <p>
                Copyright &copy; 2024 <br>
                <a id="ft_od" href="https://esportwzse.pl/">ZSE7CUP</a><br>
                Created by: <a class="author" href="https://www.facebook.com/DuolyStudio" target="_blank">Duoly</a><br>
                Logo designed by: <a class="author" href="https://www.instagram.com/kurdzieljakub/">@kurdzieljakub</a><br>
            </p>
        </footer>
        <script src="main.js"></script>
    </body>
</html>