<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["applied"])){
    include 'rc_recaptcha.php';
    $captcha = CheckCaptcha($_POST['g-recaptcha-response']);
    
    if($captcha['success']){
        
        if(!(strpos($_POST["app-email"], '@') !== false)){
            $_SESSION["application_send"] = "email";
            header("Location: ../applications.php");
            exit();
        }
        
        if(!(strpos($_POST["app-discord"], '#') !== false)){
            $_SESSION["application_send"] = "discord";
            header("Location: ../applications.php");
            exit();
        }
    
        $msg = "Username: " . $_SESSION["username"];
        $msg .= "\nIP: " . $_SESSION["ip"];
        $msg .= "\nPlay Time: " . $_SESSION['play_time'] . " hours";
        $msg .= "\nPosition: " . $_POST["app-position"];
        $msg .= "\nEmail: " . $_POST["app-email"];
        $msg .= "\nDiscord: " . $_POST["app-discord"];
        $msg .= "\nBirth Date: " . $_POST["app-date"];
        $msg .= "\nDiscription: " . $_POST["app-description"];
        
        $msg = wordwrap($msg,70);
        
        mail("applications@rebrovocraft.info",$_SESSION["username"],$msg);
    
        $_SESSION["application_send"] = "success";
        $_SESSION["applied"] = true;
        header("Location: ../applications.php");
    }
    else{
        $_SESSION["application_send"] = "captcha";
        header("Location: ../applications.php"); 
    }
}
    else{
        $_SESSION["application_send"] = "already";
        header("Location: ../applications.php"); 
    }
?>