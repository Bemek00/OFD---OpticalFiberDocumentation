<?php

include 'polaczenie_baza.php';

if(isset($_POST['zaloguj'])){
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
                            
    if(mysqli_num_rows(mysqli_query($polacz, "SELECT login, haslo FROM konto WHERE login='$login' AND haslo='$haslo'")) > 0)
    {
        $zap = mysqli_fetch_row(mysqli_query($polacz, "SELECT uprawnienia FROM konto WHERE login='$login' AND haslo='$haslo'"));

        $_SESSION['zal'] = $zap[0];

        header('Location: ../podstrony/str_glowna.php');
    }
    else
        echo "<a class='npdane'> Błędny login lub hasło </a>";
        
}

mysqli_close($polacz);

?>