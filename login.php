<?php
if (session_status() == PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION["username"]))
{
    header("Location: index.php");
}

if(isset($_SESSION["error"])){
    $errormsg = $_SESSION['error'];
}
?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/styles/login-style.css">
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
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
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
                        <a href="/index.php">
                            <h1>REBRO<img class="v-logo" src="pictures/logo.png" height="40vh">OCRAFT</h1>
                        </a>
                        </div>
                        <ul class="navs">
                            <a href="index.php"><li>HOME</li></a>
                            <a href="ranks.php"><li>RANKS</li></a>
                            <a href="vote.php"><li>VOTE</li></a>
                            <a href="bans.php"><li>BAN LIST</li></a>
                            <a href="applications.php"><li>APPLICATIONS</li></a>
                            <a href="about.php"><li>ABOUT</li></a>
                        </ul>
                        <div class="side-menu">
                            <!-- <div></div>
                            <div></div>
                            <div></div> -->
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
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <!-- <div class="overlay"></div> -->

            <div class="login-container">
                <form action="scripts/rc_login.php" method="post" class="login-container">
                <h1>LOGIN<br><h3 id="errorText"><h3></h1>
                <div class="text">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input class="user" type="text" placeholder="IN-GAME USERNAME" name="input_user">
                </div>

                <div class="text">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input class="pass" type="password" placeholder="IN-GAME PASSWORD" name="input_password">
                </div>

                <div class="g-recaptcha" style="margin: 20px auto 0 auto;" data-sitekey="6LctH-MUAAAAADTCRmPPBZNA_H54HCTef3KM84-n"></div>
            
                <input class="login-button" type="submit" name="" value="LOGIN">
                <!--
                <h4 class="forgotten" style="margin: 20px auto 0 auto;"><a href="restore-password.php">
                    I'VE FORGOTTEN MY PASSWORD</a></h4>
                    -->
                </form>
            </div>
        </div>
    <script>
        var errorMsg = <?php echo json_encode($errormsg); ?>;
        if(errorMsg)
        {
            var text = document.getElementById("errorText");
            text.style.display="block";
            text.innerHTML = errorMsg;
        }
    </script>
    <script src="scripts/rc_clear_ads.js"></script>
    <script src="scripts/rc_loading.js"></script>
    </body>
</html>