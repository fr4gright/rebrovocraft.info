<?php
$status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/88.203.208.126:37787'));

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$_SESSION['online'] = $status->online;
$_SESSION['players_list'] = $status->players->list;
?>