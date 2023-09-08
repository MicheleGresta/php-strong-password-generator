<?php 
$inputPassword = intval($_GET["user-password"] ?? false) ;


$simboli["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
$simboli["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$simboli["numeri"] = '1234567890';
$simboli["speciali"] = '!?~@#-_+<>[]{}';

$arrayChars = "";

$minuscole = $_GET['minuscole'] ?? false;
$maiuscole = $_GET['maiuscole'] ?? false;
$numeri = $_GET['numeri'] ?? false;
$speciali = $_GET['speciali'] ?? false;

if ($minuscole == true){
    $arrayChars .= $simboli['minuscole'];
}
if ($maiuscole == true){
    $arrayChars .= $simboli['maiuscole'];
}
if ($numeri == true){
    $arrayChars .= $simboli['numeri'];
}
if ($speciali == true){
    $arrayChars .= $simboli['speciali'];
}

$pwgen = substr(str_shuffle($arrayChars), 0, $inputPassword);
$_SESSION['pwstamp'] = $pwgen;


?>