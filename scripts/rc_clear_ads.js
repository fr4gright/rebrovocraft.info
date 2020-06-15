var interval = setInterval(function(){ clear(); }, 100);
var attempts = 0;

function clear()
{
var imgs = document.getElementsByTagName("img");

attempts++;
if(attempts > 20)
clearInterval(interval);

    for (i = 0; i < imgs.length; i++) 
    {
      if(imgs[i].src === "https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png")
      {
          imgs[i].style.display = "none";
          clearInterval(interval);
          break;
      }
    }
}