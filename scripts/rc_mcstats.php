<?php
$status = json_decode(file_get_contents(/* API URL */));

if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$_SESSION['online'] = $status->online;
$_SESSION['players_list'] = $status->players->list;
?>