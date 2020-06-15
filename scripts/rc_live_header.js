var line = document.getElementById("playerHeads");
var playerCount = 0;

if(online)
{
    if(list_players !== null)
    {   
        for(var i in list_players)
        {
            loadHeads(list_players[i]);
            playerCount++;
        }
    }
    else
    {
        line.innerHTML = '<span style="color:green">ONLINE</span>';
        line.style.fontFamily = "MinecraftiaRegular";
    }
}
else
{
    line.innerHTML = '<span style="color:red">OFFLINE</span>';
    line.style.fontFamily = "MinecraftiaRegular";
}

async function loadHeads(player)
{
    var url = 'https://minotar.net/avatar/' + player + '/50';
    var insert = '<img class="aHead" src="' + url + '" title="' + player +'"></img>';
    line.innerHTML += ' ' + insert + ' ';
    
    if(playerCount >= 10)
    {
        playerCount = 0;
        line.innerHTML += '<br>';
    }
}

function copyIP() 
{
   var ipname = "rebrovocraft.info";
   var el = document.createElement('textarea');

   el.value = ipname;
   el.setAttribute('readonly', '');
   el.style = {position: 'absolute', left: '-9999px'};
   document.body.appendChild(el);

   el.select();

   document.execCommand('copy');
   document.body.removeChild(el);

   var iptext = document.getElementsByClassName("ip")[0];
   if(!iptext.innerHTML.includes("COPIED"))
   {
    iptext.innerHTML += " (COPIED)";
   }
}

window.addEventListener('scroll', function(e) 
{
    document.getElementById("scrolldown").style.visibility = "hidden";
});