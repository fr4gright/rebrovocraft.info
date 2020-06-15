<?php
require("scripts/rc_session_vars.php");
require("scripts/rc_js_vars.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/styles/about-style.css">
        <link rel="stylesheet" href="styles/loading-style.css">
        <link href="https://fonts.googleapis.com/css?family=Tomorrow:300,400,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/minecraftia" type="text/css"/>
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
                                <a href="about.php"><li class="current">ABOUT</li></a>
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

            <div class="website-elements">
                <div class="new-container">
                    <div class="server-rules">
                        <h1>WHAT IS REBROVOCRAFT?</h1>
                        
                        <h3 class="what-is-it">&emsp;&emsp;RebrovoCraft is a small project, started back in January 2020 by a group of three very passionate people. It aims to deliver the best possible Minecraft Multiplayer experience, by offering you the quality of a Private Server. Featuring Vanilla Survival, the most essential Warps, nonstop Performance Improvements, Daily Updates and a Staff, always willing to help.</h3>
                        
                        <h1 style="margin-top:50px">RULES</h1>
                        <p><span style="color:red; font-weight:bold">I</span>. RESPECT everyone!</p>
                        <p><span style="color:red; font-weight:bold">II</span>. DO NOT beg to be part of the STAFF!</p>
                        <p><span style="color:red; font-weight:bold">III</span>. DO NOT beg for ranks/op/gm/items/exp/money!</p>
                        <p><span style="color:red; font-weight:bold">IV</span>. DO NOT cheat!</p>
                        <p><span style="color:red; font-weight:bold">V</span>. DO NOT TRAP/BAIT other players!</p>
                        <p><span style="color:red; font-weight:bold">VI</span>. DO NOT pretend that you are part of the STAFF!</p>
                        <p><span style="color:red; font-weight:bold">VII</span>. DO NOT swear and talk about politics!</p>
                        <p><span style="color:red; font-weight:bold">VIII</span>. RACISM and SEXISM are not tolerated!</p>
                        <p><span style="color:red; font-weight:bold">IX</span>. DO NOT advertise servers/URLs!</p>
                        <p><span style="color:red; font-weight:bold">X</span>. DO NOT abuse the Ticket System!</p>
                    </div>
                    <div class="server-staff">
                        
                    </div>

                    <div class="server-testers">

                    </div>
                </div>

                <div class="footer">
                    <div class="logo-text">
                        <h4>© REBROVOCRAFT 2020</h4>
                        <p class="designed">
                            <br>DESIGNED BY RETL!X
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require("scripts/rc_menu_head.php");
        ?>
        
    <script src="scripts/rc_clear_ads.js"></script>
    <script src="scripts/rc_loading.js"></script>
    </body>
</html>