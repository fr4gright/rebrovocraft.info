<?php
if(isset($_SESSION["username"]))
    $user = $_SESSION["username"];
if(isset($_SESSION["email"]))
    $email = $_SESSION["email"];
?>
<script>
var user = <?php echo json_encode($user); ?>;
var email = <?php echo json_encode($email); ?>;

var isShown = false;

if(user)
{
    var login = document.getElementsByClassName("login")[0];
    var loginSide = document.getElementById("side-login");
    var loginHref = document.getElementById("loginHref");
    var url = 'https://minotar.net/avatar/' + user + '/50';
    var insert = '<img src="' + url + '"></img>';

    if(email)
         login.innerHTML = insert + '<div id="myDropdown" class="dropdown-content"><a href="#" style="color:green;" title="'+email+'">'+email+'</a><a style="color: gray;">Change Password</a><a href="" onclick="logOut()">Log Out</a></div>';
    else
         login.innerHTML = insert + '<div id="myDropdown" class="dropdown-content"><a href="" style="color: gray;">Set Email</a><a style="color: gray;">Change Password</a><a href="" onclick="logOut()">Log Out</a></div>';
        
    loginHref.removeAttribute("href");
    loginHref.setAttribute('onclick', 'showDropDown()');
    
    loginSide.innerHTML = "<li>LOG OUT</li>";
    loginSide.setAttribute("href", "");
    loginSide.setAttribute('onclick', 'logOut()');
}

function showDropDown() {
    var myDropDown = document.getElementById("myDropdown");

    if(isShown)
        myDropDown.style.display = "none";
    else
        myDropDown.style.display = "block";
    isShown = !isShown;
}

function logOut()
{
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

window.onclick = function(event) {
  if (!event.target.matches('img'))
  {
      if(isShown){
        document.getElementById("myDropdown").style.display = "none";
        isShown = false;
      }
  }
}

</script>