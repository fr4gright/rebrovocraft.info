<?php
if (session_status() == PHP_SESSION_NONE){
    session_start(); 
}

include 'rc_recaptcha.php';

$host    = "rebrovocraft.info";
$port    = 18181;

$user = new stdClass();
$user->task = "rc_get_email";
$user->username = $_POST["input_user"];
$email = $_POST["input_email"];

$jsonuser = json_encode($user);

$captcha = CheckCaptcha($_POST['g-recaptcha-response']);

if($captcha['success']){
    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die();
    $connect = socket_connect($socket, $host, $port) or die();  
    socket_write($socket, $jsonuser, strlen($jsonuser)) or die();
    $result = socket_read ($socket, 1024) or die();
    socket_close($socket);
    
    $unjasoned = json_decode($result);
    
    if($unjasoned != "USERNAME_NOT_FOUND")
    {
        if($unjasoned != "EMAIL_NOT_FOUND")
        {
            
        }
        else
        {
            displayError('E-mail Address not found!');
        }
    }
    else
    {
     displayError('User not found!');   
    }
}
else{
    displayError('Invalid Re-Captcha!');
}

function displayError($param_error){
    $_SESSION['email_error'] = $param_error;
    header("Location: ../login.php"); 
}
?>