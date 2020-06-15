<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

$online = $_SESSION["online"];
$players_list = $_SESSION["players_list"];

if(isset($_SESSION["username"]))
{
    $username = $_SESSION["username"];
    $uuid = $_SESSION['uuid'];
    $rank = $_SESSION['rank'];
    $pvp_kills = $_SESSION['pvp_kills'];
    $deaths = $_SESSION['deaths'];
    $damage_dealt = $_SESSION['damage_dealt'];
    $money = $_SESSION['money'];
    $exp = $_SESSION['exp'];
    $level = $_SESSION['level'];
    $play_time = $_SESSION['play_time'];
    $joined = $_SESSION['joined'];
    $last_played = $_SESSION['last_played'];
    $jobs = $_SESSION['jobs'];
    $res = $_SESSION['res'];
    $homes = $_SESSION['homes'];
    $votes_day = $_SESSION['votes_day'];
    $votes_week = $_SESSION['votes_week'];
    $votes_mont = $_SESSION['votes_month'];
    $votes_total = $_SESSION['votes_total'];
    $votes_points = $_SESSION['votes_points'];
    
    if(isset($_SESSION["nick"]))
        $nick = $_SESSION["nick"];
    if(isset($_SESSION["email"]))
        $email = $_SESSION["email"];
    if(isset($_SESSION["skin"]))
        $skin = $_SESSION["skin"]; 
}
else
{
    //header('Location: login.html');
    //exit;
} 
?>