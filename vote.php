<?php
if(!isset($_SESSION["vote_tables"]))
{
    require("scripts/rc_getvotes.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vote</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/styles/vote-style.css">
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
        <script>
            var voteTables = <?php echo json_encode($_SESSION["vote_tables"]); ?>;
        </script>
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
                            <a href="vote.php"><li class="current">VOTE</li></a>
                            <a href="bans.php"><li>BAN LIST</li></a>
                            <a href="applications.php"><li>APPLICATIONS</li></a>
                            <a href="about.php"><li>ABOUT</li></a>
                            <a id="loginHref" href="login.php"><li class="login">LOGIN</li></a>
                        </ul>
                        <div class="side-menu">
                          <!-- <div></div>
                          <div></div>
                          <div></div> -->
                          <label class="hamburger" for="toggle">&#9776;</label>
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
                <div class="vote-elements">

                    <div class="vote-links">
                        <h1>LINKS TO VOTE</h1>
                        <div class="links">
                        <a href="https://minecraft-mp.com/server/244779/vote/"><li>Minecraft-MP.com</li></a>
                        <a href="https://minecraftservers.org/vote/573789"><li>MinecraftServers.org</li></a>
                        <a href="https://topg.org/Minecraft/in-593617"><li>Topg.org</li></a>
                        <a href="https://minecraft-server-list.com/server/452065/vote/"><li>Minecraft-Server-List.com</li></a>
                        <a href="https://www.planetminecraft.com/server/rebrovocraft/vote/"><li>PlanetMinecraft.com</li></a>
                        </div>
                    </div>

                    <!-- <div class="voters-table">
                        <h1>TOP 10 VOTERS FOR THE MONTH</h1>
                    </div> -->
                    <h1 class="text2">TOP VOTERS</h1>
                    <table class="voters-table" style="width:100%">
                        <tr>
                          <th>Player</th>
                          <th class="sortBtn" onclick="sortBy('day')">Day ▲</th>
                          <th class="sortBtn" onclick="sortBy('week')">Week ▼</th>
                          <th class="sortBtn" onclick="sortBy('month')">Month ▼</th>
                          <th class="sortBtn" onclick="sortBy('total')">Total ▼</th>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                        <tr>
                          <td class="rowName">Name</td>
                          <td class="rowDay">0</td>
                          <td class="rowWeek">0</td>
                          <td class="rowMonth">0</td>
                          <td class="rowTotal">0</td>
                        </tr>
                      </table>

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
        <script src="scripts/rc_voters_table.js"></script>
        <script src="scripts/rc_clear_ads.js"></script>
        <script src="scripts/rc_loading.js"></script>
        <?php
        require("scripts/rc_menu_head.php");
        ?>
    </body>
</html>