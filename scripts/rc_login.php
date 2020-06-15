<?php
if (session_status() == PHP_SESSION_NONE){
    session_start(); 
}

include 'rc_recaptcha.php';

$host    = "88.203.208.126";
$port    = 18181;

$user = new stdClass();
$user->task = "rc_login";
$user->username = NoSpecial($_POST["input_user"]);
$password = NoSpecial($_POST["input_password"]);

$jsonuser = json_encode($user);

$captcha = CheckCaptcha($_POST['g-recaptcha-response']);

if($captcha['success']){
    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die();
    $connect = socket_connect($socket, $host, $port) or header("Location: ../api-error.php");
    socket_write($socket, $jsonuser, strlen($jsonuser)) or die();
    $result;
    
    while(socket_recv($socket, $buf, 1024, 0) >= 1)
    {
        $result .= $buf;
    }
    socket_close($socket);
    
    if($result != "LOGIN_FAILED")
    {
        if (password_verify($password, $result)) 
        {
          $_SESSION['username'] = $user->username;
          require_once('rc_getstats.php');
        } 
        else 
        {
          displayError('Wrong password!');
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
    $_SESSION['error'] = $param_error;
    header("Location: ../login.php"); 
}

function NoSpecial($value)
{
    $result  = preg_replace('/[^a-zA-Z0-9_ -]/s','',$value);
    return $result;
}
?>