<?php

session_start();

$polacz = mysqli_connect('localhost', 'root', '', 'ofd');

mysqli_set_charset($polacz ,"UTF8" );

if(isset($_POST['zaloguj'])){
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
                            
    if(mysqli_num_rows(mysqli_query($polacz, "SELECT login, haslo FROM konto WHERE login='$login' AND haslo='$haslo'")) > 0)
    {
        header('Location: str_glowna.php');
    }
    else
        echo "<p id='niepoprawnedane'> Błędny login lub hasło <p>"; 
}

mysqli_close($polacz);

?>