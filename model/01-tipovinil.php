<?php
session_start();
$aplicacionvinil = $_POST["aplicacionvinil"];
$_SESSION["aplicacionvinil"] = $aplicacionvinil;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>