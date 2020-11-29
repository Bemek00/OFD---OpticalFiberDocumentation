<?php

session_start();

if(@$_SESSION['zal'] == NULL)
    $_SESSION['zal'] = 0;

if($_SESSION['zal'] == 0)
    header('Location: logowanie.php');

?>