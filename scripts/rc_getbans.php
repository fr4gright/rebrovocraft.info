<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["bans"]))
{
    $host = /* IP */;
    $port = /* PORT */;
    
    $voterequest = new stdClass();
    $voterequest->task = "rc_getbans";
    
    $sendrequest = json_encode($voterequest);
    
    $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die();
    $connect = socket_connect($socket, $host, $port) or header("Location: ../api-error.php");
    socket_write($socket, $sendrequest, strlen($sendrequest)) or die();
    
    $result;
    while(socket_recv($socket, $buf, 1024, 0) >= 1)
    {
        $result .= $buf;
    }
    
    socket_close($socket);
    
    $_SESSION["bans"] = json_decode($result);
}
?>