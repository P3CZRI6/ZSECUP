

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZSE7CUP</title>
    <link rel="icon" href="IMG/logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <li><a class="active" href="../rejestracja">Rejestracja</a></li>
                <li><a href="../druzyny">Drużyny</a></li>
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
        <h1>Rejestracja</h1>
    </div>
    <div class="about">
        <form class="flp" id="registerForm" name="register" onsubmit="event.preventDefault(); myValidation();">
         
            <div>
                <select id="gra" name="gra" onchange="zmien()" required>
                    <option value="">--Wybierz gre--</option>
                    <option value="csgo">Counter-Strike 2</option>
                    <option value="lol">League of Legends</option>
                    <option value="dirt">Dirt 2.0</option>

                </select>


            </div>
                <!--Kapitan-->
                <div class="game">
                    <div class="title color">Dane zawodnika:</div>
                    <div>
                        <input type="text" id="kname"  name="kname" required>
                        <label for="kname">Imie:</label>
                    </div>
                    <div>
                        <input type="text" id="ksurname"  name="ksurname" required>
                        <label for="ksurname">Nazwisko:</label>
                    </div>
                    <div>
                        <input type="text" id="kpseudo"  name="kpseudo" required>
                        <label for="kpseudo">Pseudonim:</label>
                    </div>
                    <div>
                        <input type="email" id="kemail" name="kemail" required>
                        <label for="kemail">Email:</label>
                    </div>
                    <div>
                        <input type="text" id="kclass" maxlength="3" name="kclass" required>
                        <label for="kclass">Klasa:</label>
                    </div>
                </div>
                
<script>






        $('select').click(function () {
            check_game();
        });

        function check_game() {
            var game = document.getElementById("gra").value;
            if (game == "csgo") {
                location.href = "../rejestracja";



            }
            else if (game == "lol") {
                location.href = "../rejestracja";
            }}

</script>
                
                <p class="red-text" id="captain-name">Wprowadź poprawnie imie!</p>
                <p class="red-text" id="captain-surname">Wprowadź poprawnie nazwisko!</p>
                <p class="red-text" id="captain-nick">Wprowadź poprawnie pseudonim!</p>
                <p class="red-text" id="captain-steamid">Wprowadź poprawnie SteamID!</p>
                <p class="red-text" id="captain-email">Wprowadź poprawnie email! Musi być z domeny ZSE!</p>
                <p class="red-text" id="captain-class">Wprowadź poprawnie klase!</p>

            
                <div id="btn_srodek">
                    <button type='button' id="submit" class="btn_wyslij">Wyślij</button>
                </div>
            </form>
        </div>
        <footer>
            <p>
                Copyright &copy; 2024 <br>
                <a id="ft_od" href="https://esportwzse.pl/">ZSE7CUP</a><br>
                Created by: <a class="author" href="https://www.facebook.com/DuolyStudio" target="_blank">Duoly</a>
                <br>
                Logo designed by: <a class="author" href="https://www.instagram.com/kurdzieljakub/">@kurdzieljakub</a><br>
            </p>
        </footer>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script><script  src="script.js">
            
        </script>
    </body>
</html>