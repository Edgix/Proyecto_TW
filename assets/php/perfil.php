<?php
session_start();
$_SESSION["perfil"]= $_POST["perfil"];
echo "alert('".$_SESSION["perfil"]."')";
?>