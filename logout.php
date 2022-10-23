<?php
    session_start();
    unset($_SESSION['userName']);
    header('location:adminLogin.php?mes=Logout');
?>