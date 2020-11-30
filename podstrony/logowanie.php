<!DOCTYPE html>

<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Optical Fiber Documentation <?php echo $_SESSION['zal']; ?> </title>
        <link rel="stylesheet" href="style/logowanie.css" type="text/css" />
    </head>
    <body>
        <div class="screen">
            <div class="okno">
                <div class="ramka">
                    <div class="ramka_tlo">
                        <b class="logowanie_b"> LOGOWANIE </b>
                    </div>
                    <div class="ramka_logowanie">
                        <form action="logowanie.php" method="post">
                            Login <br />
                            <input type="text" name="login" class="pole" /> <br />
                            Hasło <br />
                            <input type="password" name="haslo" class="pole" /> <br />
                            <input type="submit" value="Zaloguj" name="zaloguj" class="przycisk" />
                        </form>
                        <?php
                        include 'logowanieS.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>