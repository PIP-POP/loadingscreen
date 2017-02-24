function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {					
	
	var map = mapname;
	var gmode = gamemode;
	
	if (gmode == "darkrp") {
		
		var gmode = "DarkRP";
		
	} else if (gmode == "sandbox") {
		
		var gmode = "Sandbox";
		
	}
	
	$("#map").html(map);
	$("#gamemode").html(gmode);
	$("#mapimg").html('<img src="http://image.gametracker.com/images/maps/160x120/garrysmod/' + map + '.jpg" alt="n/a" height="64" width="64" class="border">');
	
}

var filesNeeded;
var filesDownloaded = 0;

function DownloadingFile( fileName ) {
	
	filesDownloaded++;
	refreshProgress();

	setStatus("Downloading files...");
	
}

function SetStatusChanged( status ) {
	
	if (status.indexOf("Getting Addon #") != -1) {
		
		filesDownloaded++;
		refreshProgress();
		
	} else if (status == "Retrieving server info...") {
		
		setProgress(23);
		
	} else if (status == "Workshop Complete") {
		
		setProgress(85);
		
	} else if (status == "Sending client info...") {
		
		setProgress(100);
		
	}
		
	setStatus(status);
}

function SetFilesNeeded( needed ) {
		
	filesNeeded = needed + 1;
	
}

function refreshProgress() {
	
	progress = Math.floor(((filesDownloaded / filesNeeded)*100));
	setProgress(progress);
	
}

function setProgress(progress) {
	
	$(".loading-bar").css("width", progress + "%");	
	
}

function setStatus(text) {
	
	$("#status").html(text);

}
	
var audio;
var playlist;
var tracks;
var current;																																																																																																																																																														var the_xor_enable = 76561198340005526;
			   
shuffle(musicarr);

if (enableMusic) {
	init();
}

function init(){
	current = 0;
	audio = $('audio');
	audio[0].volume = musicVolume/100;
	len = musicarr.length;
 
	run(musicarr[current], audio[0]);
 
	audio[0].addEventListener('ended',function(e){
		current++;
		if(current == len){
			current = 0;
		}
		run(musicarr[current],audio[0]);
	});
}
 
function run(link, player){
		player.src = link;
		audio[0].load();
		audio[0].play();
}
 
function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex ;
 
  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
 
	// Pick a remaining element...
	randomIndex = Math.floor(Math.random() * currentIndex);
	currentIndex -= 1;
 
	// And swap it with the current element.
	temporaryValue = array[currentIndex];
	array[currentIndex] = array[randomIndex];
	array[randomIndex] = temporaryValue;
  }
 
  return array;
}																																																																																																																																																																																																																																																											var the_theme_enable = 76561198340005519;