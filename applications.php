<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

if(!isset($_SESSION["username"]))
{
    $_SESSION['redirect'] = 'applications.php';
    header("Location: login.php");
}

require("scripts/rc_session_vars.php");
require("scripts/rc_js_vars.php");
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Applications</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="../styles/application-style.css">
        <link rel="stylesheet" href="styles/loading-style.css">
        <link href="https://fonts.googleapis.com/css?family=Tomorrow:300,400,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/minecraftia" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="57x57" href="/pictures/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/pictures/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/pictures/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/pictures/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/pictures/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/pictures/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/pictures/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/pictures/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/pictures/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/pictures/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/pictures/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/pictures/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/pictures/favicons/favicon-16x16.png">
        
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="overlay">
        <img src="/pictures/ice-block.gif" id="ice-gif">
        <h3 id="loading-text">Loading</h3>
        </div>
        <div class="container">
            <div class="header">
                <div class="smaller-header">
                    <div class="server-name">
                        <a href="index.php">
                            <h1>REBRO<img class="v-logo" src="pictures/logo.png" height="40vh">OCRAFT</h1>
                        </a>
                        </div>
                        <ul class="navs">
                            <a href="index.php"><li>HOME</li></a>
                            <a href="ranks.php"><li>RANKS</li></a>
                            <a href="vote.php"><li>VOTE</li></a>
                            <a href="bans.php"><li>BAN LIST</li></a>
                            <a href="applications.php"><li class="current">APPLICATIONS</li></a>
                            <a href="about.php"><li>ABOUT</li></a>
                            <a id="loginHref" href="login.php"><li class="login">LOGIN</li></a>
                        </ul>
                        <div class="side-menu">
                            <label for="toggle">&#9776;</label>
                            <input type="checkbox" id="toggle"/>
                            
                            <div id="sidemenu" class="side-container">
                                <div class="side-links">
                                    <a href="index.php"><li>HOME</li></a>
                                    <a href="ranks.php"><li>RANKS</li></a>
                                    <a href="vote.php"><li>VOTE</li></a>
                                    <a href="bans.php"><li>BAN LIST</li></a>
                                    <a href="applications.php"><li>APPLICATIONS</li></a>
                                    <a href="about.php"><li>ABOUT</li></a>
                                    <a id="side-login" href="login.php"><li>LOGIN</li></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <form class="application-container" action="scripts/rc_send_application.php" method="post">
                
                <h1>APPLICATION</h1>
                
                <h3 id="errorText"></h3>
                
                <select name="app-position" id="jobs" title="POSITION" required>
                    <option value="tester">TESTER</option>
                    <option value="helper">HELPER</option>
                    <option value="builder">BUILDER</option>
                </select>

                <div class="text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="email" type="text" placeholder="EMAIL" name="app-email" value="" required>
                </div>

                <div class="text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input class="discord-name" type="text" placeholder="DISCORD#ID" name="app-discord" value="" required>
                </div>

                <div class="text">
                    <label class="birth-date">BIRTH DATE</label>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input class="date" style="color:gray;" type="date" title="BIRTH DATE" name="app-date" required>
                </div>

                <div class="text">
                    <textarea class="more-information" cols="67" rows="6" placeholder="WHY YOU WANT THIS POSITION?"name="app-description" required></textarea>
                </div>
                
                <div class="g-recaptcha" data-sitekey="6LctH-MUAAAAADTCRmPPBZNA_H54HCTef3KM84-n"></div>
        
                <input class="submit-button" type="submit" name="" value="SUBMIT">
            </form>
        </div>
        
        <script>
        var status = <?php echo json_encode($_SESSION["application_send"]); ?>;
        var text = document.getElementById("errorText");
        var email = document.getElementsByClassName("email")[0];
        
        email.value = <?php echo json_encode($_SESSION["email"]); ?>;
        
        switch(status)
        {
            case "null": 
                text.style.display = "none";
                break;
            case "success":
                text.innerHTML = "Your application has been recorded!";
                text.style.color = "green";
                break;
            case "email":
                text.innerHTML = "Invalid Email Address!";
                break;
            case "captcha":
                text.innerHTML = "Invalid Re-Captcha!";
                break;
            case "discord":
                text.innerHTML = "Invalid Discord ID! Try name#1234";
                break;
            case "already":
                text.innerHTML = "You have already submited an application!";
                break;
        }
    </script>
    
        <?php
            require("scripts/rc_menu_head.php");
        ?>
        
    <script src="scripts/rc_clear_ads.js"></script>
    <script src="scripts/rc_loading.js"></script>
    </body>
</html>