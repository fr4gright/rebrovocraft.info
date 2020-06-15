function startLoading(){
    let overlay = document.getElementsByClassName("overlay")[0];
	let loading = document.getElementById("loading-text");
	let random = Math.floor(Math.random() * 10); 
	
	overlay.style.display = "block";
		
	switch(random)
	{
		case 0: 
			loading.innerHTML = "Mining for some diamonds"; 
			break;
		case 1: 
			loading.innerHTML = "Waking up the Ender Dragon";
			break;
		case 3: 
			loading.innerHTML = "Crafting a pickaxe";
			break;
		case 4: 
			loading.innerHTML = "Running away from the damn creeper";
			break;
		case 5: 
			loading.innerHTML = "Chopping trees";
			break;
		case 6: 
			loading.innerHTML = "Digging up some snow";
			break;
		case 7: 
			loading.innerHTML = "Breaking the ice";
			break;
		case 8: 
			loading.innerHTML = "Waiting for 1.16 to release";
			break;
		default: 
			loading.innerHTML = "Loading";
	}
	
	//myLoop(loading, "", 0);
}
	
function myLoop(loading, last, dots) {      
  setTimeout(function() {
  
	switch(dots)
	{
		case 1:
			last = loading.innerHTML;
			loading.innerHTML = '&nbsp;' + last + '.';
			break;
		case 2:
			loading.innerHTML = '&nbsp;&nbsp;' + last + '..';
			break;
		case 3:
			loading.innerHTML = '&nbsp;&nbsp;&nbsp;' + last + '...';
			break;
		case 4:
			dots = 0;
			loading.innerHTML = last;
			break;
	}
	dots++;
 
	myLoop(loading, last, dots)
  }, 600)
}

window.onbeforeunload = function(e) 
{
    startLoading();
}