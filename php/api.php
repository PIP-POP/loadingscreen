<?php

	error_reporting( 0 );

	$id = $_GET["steamid"];
	
	
	$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $id;
	$json = file_get_contents($url);
	$table2 = json_decode($json, true);
	$table = $table2["response"]["players"][0];
	
	$username = $table['personaname'];
	$profileimg = '<img src="'.$table['avatarfull'].'" alt="n/a" height="64px" width="64px" class="border"></img>'; 
	
	
	
	$urls1 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid1;
	$jsons1 = file_get_contents($urls1);
	$table2s1 = json_decode($jsons1, true);
	$tables1 = $table2s1["response"]["players"][0];
	
	$usernames1 = $tables1['personaname'];
	$profileimgs1 = '<img id="staff" src="'.$tables1['avatarfull'].'" alt="N/A"></img>'; 
	
	
	
	$urls2 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid2;
	$jsons2 = file_get_contents($urls2);
	$table2s2 = json_decode($jsons2, true);
	$tables2 = $table2s2["response"]["players"][0];
	
	$usernames2 = $tables2['personaname'];
	$profileimgs2 = '<img id="staff" src="'.$tables2['avatarfull'].'" alt="N/A"></img>'; 
	
	
	
	$urls3 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid3;
	$jsons3 = file_get_contents($urls3);
	$table2s3 = json_decode($jsons3, true);
	$tables3 = $table2s3["response"]["players"][0];
	
	$usernames3 = $tables3['personaname'];
	$profileimgs3 = '<img id="staff" src="'.$tables3['avatarfull'].'" alt="N/A"></img>'; 
	
	
	
	$urls4 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid4;
	$jsons4 = file_get_contents($urls4);
	$table2s4 = json_decode($jsons4, true);
	$tables4 = $table2s4["response"]["players"][0];
	
	$usernames4 = $tables4['personaname'];
	$profileimgs4 = '<img id="staff" src="'.$tables4['avatarfull'].'" alt="N/A"></img>';
	
	
	
	$urls5 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid5;
	$jsons5 = file_get_contents($urls5);
	$table2s5 = json_decode($jsons5, true);
	$tables5 = $table2s5["response"]["players"][0];
	
	$usernames5 = $tables5['personaname'];
	$profileimgs5 = '<img id="staff" src="'.$tables5['avatarfull'].'" alt="N/A"></img>';
	
	
	
	$urls6 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid6;
	$jsons6 = file_get_contents($urls6);
	$table2s6 = json_decode($jsons6, true);
	$tables6 = $table2s6["response"]["players"][0];
	
	$usernames6 = $tables6['personaname'];
	$profileimgs6 = '<img id="staff" src="'.$tables6['avatarfull'].'" alt="N/A"></img>';
	
	
	
	$urls7 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid7;
	$jsons7 = file_get_contents($urls7);
	$table2s7 = json_decode($jsons7, true);
	$tables7 = $table2s7["response"]["players"][0];
	
	$usernames7 = $tables7['personaname'];
	$profileimgs7 = '<img id="staff" src="'.$tables7['avatarfull'].'" alt="N/A"></img>';
	
	
	
	$urls8 = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $sid8;
	$jsons8 = file_get_contents($urls8);
	$table2s8 = json_decode($jsons8, true);
	$tables8 = $table2s8["response"]["players"][0];
	
	$usernames8 = $tables8['personaname'];
	$profileimgs8 = '<img id="staff" src="'.$tables8['avatarfull'].'" alt="N/A"></img>';

?>