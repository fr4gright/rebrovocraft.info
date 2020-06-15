<?php
$statsof = new stdClass();
$statsof->task = "rc_getstats";
$statsof->username = $user->username;

$sendrequest = json_encode($statsof);

$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die();
$connect = socket_connect($socket, $host, $port) or header("Location: ../api-error.php");
socket_write($socket, $sendrequest, strlen($sendrequest)) or die();
$result = socket_read ($socket, 1024) or die();
socket_close($socket);

$recvstats = json_decode($result);

if($recvstats != "USER_NOT_FOUND")
{
    $_SESSION['uuid'] = $recvstats->uuid;
    $_SESSION['rank'] = $recvstats->rank;
    $_SESSION['pvp_kills'] = $recvstats->pvp_kills;
    $_SESSION['deaths'] = $recvstats->deaths;
    $_SESSION['damage_dealt'] = $recvstats->damage_dealt;
    $_SESSION['money'] = $recvstats->money;
    $_SESSION['exp'] = $recvstats->exp;
    $_SESSION['level'] = $recvstats->level;
    $_SESSION['play_time'] = $recvstats->play_time;
    $_SESSION['joined'] = date('d_m_Y-H-i-s', strtotime($recvstats->joined));
    $_SESSION['last_played'] = date('d_m_Y-H-i-s', strtotime($recvstats->last_played));
    $_SESSION['jobs'] = $recvstats->jobs;
    $_SESSION['res'] = $recvstats->res;
    $_SESSION['homes'] = $recvstats->homes;
    $_SESSION['votes_day'] = $recvstats->vote_day;
    $_SESSION['votes_week'] = $recvstats->vote_week;
    $_SESSION['votes_month'] = $recvstats->vote_month;
    $_SESSION['votes_total'] = $recvstats->vote_total;
    $_SESSION['votes_points'] = $recvstats->vote_points;
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    
    if($recvstats->nick)
        $_SESSION['nick'] = $recvstats->nick;
    if($recvstats->email)
        $_SESSION['email'] = $recvstats->email;
    if($recvstats->skin)
        $_SESSION['skin'] = $recvstats->skin;
    
    if(isset($_SESSION['redirect']))
    header('Location: ../'. $_SESSION['redirect']);
    else
    header('Location: ../index.php');
}
else
{
    session_destroy();
    session_start();
   $_SESSION['error'] = "No stats found! Maybe your account is too old?";
   header("Location: ../login.php");
}
?>