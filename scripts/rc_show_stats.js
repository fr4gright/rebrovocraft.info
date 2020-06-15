if(username)
{
    if(uuid)
    {
        var _img = document.getElementById('skinImg');
        var newImg = new Image();
        
        if(skin !== null)
        {
            newImg.src = "https://minotar.net/body/" + skin + "/170.png";
            _img.title = "Skin of " + skin;
        }
        else
        {
          newImg.src = "https://minotar.net/body/" + username + "/170.png";  
        }
        
        newImg.onload = function() 
        {
            _img.src = this.src;
        }
        
        document.getElementById('pStats').remove();
        document.getElementById('pLogin').remove();
        
        var usp = document.getElementById("user");
        if(nick)
            usp.innerHTML = username + " (" + nick + ")<br><br>";
        else
            usp.innerHTML = username + "<br><br>";
        usp.title = "UUID: " + uuid;
        
        if(res.includes("%")){
            res = "NOT FOUND";
        }
        
        if(jobs.includes("%")){
            jobs = "NOT FOUND";
        }
        
        if(homes == "/"){
            homes = "NOT FOUND";
        }
        
        document.getElementById("rank").innerHTML = "<br>Rank: " + rank;
        document.getElementById("money").innerHTML = "Money: $" + money;
        document.getElementById("level").innerHTML = "Level: " + level;
        document.getElementById("exp").innerHTML = "EXP: " + exp;
        document.getElementById("joined").innerHTML = "<br>Joined On: "+ joined.split('-')[0].replace(/_/g, '/');
        document.getElementById("lastplayed").innerHTML = "Last Played: "+ lastPlayed.split('-')[0].replace(/_/g, '/');
        document.getElementById("playtime").innerHTML = "Play Time: "+ playTime + " Hours";
        document.getElementById("votes").innerHTML = 
        String(votes_day + ", " + votes_week + ", " + votes_month  + ", " + votes_total + ", " + votes_points).replace(/null/g, "0");
        document.getElementById("homes").innerHTML = homes;
        document.getElementById("res").innerHTML = res;
        document.getElementById("jobs").innerHTML = jobs;
        document.getElementById("pvp").innerHTML = pvp_kills + ", " + damage_dealt;
        
        // if (typeof window.orientation === 'undefined')
        // {
        //     document.getElementsByClassName("player-stats")[0].style.paddingLeft = 150;
        // }
    }
}
else
{
    var toHide = document.getElementsByClassName('statsList');

    for(var e in toHide)
    {
      toHide[e].style.display = 'none';
    }
}