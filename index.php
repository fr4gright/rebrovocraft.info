<?php
require("scripts/rc_mcstats.php");
require("scripts/rc_session_vars.php");
require("scripts/rc_js_vars.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/style.css">
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
                        <a href="ranks.php"><li>RANKS</li></a>
                        <a href="vote.php"><li>VOTE</li></a>
                        <a href="bans.php"><li>BAN LIST</li></a>
                        <a href="applications.php"><li>APPLICATIONS</li></a>
                        <a href="about.php"><li>ABOUT</li></a>
                        <a id="loginHref" href="login.php"><li class="login">LOGIN</li></a>
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
                                    <a id="side-login" href="login.php"><li>LOGIN</li></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="top-text">
                <h4>WELCOME TO REBROVOCRAFT</h4>
                <br>
                <p id="playerHeads"></p>
                <br>
                <p class="ip">IP:<span style="cursor:pointer" onclick="copyIP()" title="Click to copy"> rebrovocraft.info</span></p>
                <img src="/pictures/scrolldown.gif" id="scrolldown" title="Scroll Down For More">
            </div>

            <div class="website-elements">

                <div class="player-stats">
                    <div class="player-skin">
                        <p class="statsList" id="user"></p>
                        <img id="skinImg" src="/pictures/skin.png">
                    </div>
                    <div class="statistics-text">
                        <h4 id="pStats">
                            PLAYER STATISTICS
                        </h4>
                        <a id="pLogin" href="login.php">CLICK TO LOGIN</a>
                        <div class="statsList">
                            <p id="rank"></p>
                            <p id="money"></p>
                            <p id="level"></p>
                            <p id="exp"></p>
                            <p id="joined"></p>
                            <p id="lastplayed"></p>
                            <p id="playtime"></p>
                            <h5><br>VOTES 
                            <p id="votes" style="display:inline" 
                            title="Today / This Week / This Month / Total / Points"></p></h5>
                            <h5>HOMES <p id="homes" style="display:inline"></p></h5>
                            <h5>RESIDENCES <p id="res" style="display:inline"></p></h5>
                            <h5>JOINED JOBS <p id="jobs" style="display:inline"></p></h5>
                            <h5>PVP <p id="pvp" title="Kills / Damage Dealt" style="display:inline"></p></h5>
                        </div>
                    </div>
                </div>


                <div class="content-container">

                <iframe class="discordWidget"
                src="https://discordapp.com/widget?id=665182096440033301&theme=dark" 
                width="350" height="500" allowtransparency="true" frameborder="0">
                </iframe>

                    <div class="anouncements">
                        <div class="text">
                            <h4 class="title">ANNOUNCEMENTS</h4>
                            <hr width="80%" style="background-color:white; height:5px; margin: -10px auto 5% auto">
                            
                            <iframe width="85%" height="30%" src="https://www.youtube.com/embed/09sw-DwuAbk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            
                            <hr width="60%" style="margin: 5% auto 5% auto">
                            
                            <h3>THE LOOTBOXES ARE HERE!</h3>
                            <p>VOTE FOR THE SERVER, GET A REWARD</p>
                            <img src="/pictures/lootboxes.png" title="/vote">
                            
                            <hr width="60%" style="margin: 5% auto 5% auto">
                            
                             <h3>FIGHT LIKE IN 1.8!</h3>
                            <p>EXPERIENCE THE OLD COMBAT SYSTEM</p>
                            <img src="/pictures/warzone.png" title="/warp WarZone" style="margin-bottom: 3%;">
                        </div>
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
        <script src="scripts/rc_live_header.js"></script>
        <script src="scripts/rc_show_stats.js"></script>
        <script src="scripts/rc_clear_ads.js"></script>
        <script src="scripts/rc_loading.js"></script>
        <?php
        require("scripts/rc_menu_head.php");
        ?>
    </body>
</html>