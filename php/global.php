<?php

	$get = file_get_contents("param.xml");
	$arr = simplexml_load_string($get);
					
	$getapi = file_get_contents("security.xml");
	$arrapi = simplexml_load_string($getapi);
	
	$apikey = $arrapi -> security -> apikey;
	$servername = $arr -> servername -> text;
	$description = $arr -> description -> text;
	
	$about = $arr -> about -> text;
	
	$website = $arr -> website -> text;
	$store = $arr -> store -> text;
	$voiceserver = $arr -> voiceserver -> text;
	
	$background = $arr -> background -> text;
	
	$sid1 = $arr -> sid1 -> text;
	$sid2 = $arr -> sid2 -> text;
	$sid3 = $arr -> sid3 -> text;
	$sid4 = $arr -> sid4 -> text;
	$sid5 = $arr -> sid5 -> text;
	$sid6 = $arr -> sid6 -> text;
	$sid7 = $arr -> sid7 -> text;
	$sid8 = $arr -> sid8 -> text;
	
	$ranks1 = $arr -> rank1 -> text;
	$ranks2 = $arr -> rank2 -> text;
	$ranks3 = $arr -> rank3 -> text;
	$ranks4 = $arr -> rank4 -> text;
	$ranks5 = $arr -> rank5 -> text;
	$ranks6 = $arr -> rank6 -> text;
	$ranks7 = $arr -> rank7 -> text;
	$ranks8 = $arr -> rank8 -> text;
	
	$cbox1 = $arr -> cbox1 -> text;
	$cbox2 = $arr -> cbox2 -> text;
	$cbox3 = $arr -> cbox3 -> text;
	$cbox4 = $arr -> cbox4 -> text;
	$cbox5 = $arr -> cbox5 -> text;
	
	$music1 = $arr -> music1 -> text;
	$mname1 = $arr -> mname1 -> text;
	
	$music2 = $arr -> music2 -> text;
	$mname2 = $arr -> mname2 -> text;
	
	$music3 = $arr -> music3 -> text;
	$mname3	= $arr -> mname3 -> text;
	
	$music_volume =  $arr -> volume -> text;
	
	$enable_music = $arr -> emusic -> text;
	
	$enable_staff = $arr -> estaff -> text;
	$enable_st1	= $arr -> est1 -> text;
	$enable_st2	= $arr -> est2 -> text;
	$enable_st3	= $arr -> est3 -> text;
	$enable_st4	= $arr -> est4 -> text;
	$enable_st5	= $arr -> est5 -> text;
	$enable_st6	= $arr -> est6 -> text;
	$enable_st7	= $arr -> est7 -> text;
	$enable_st8	= $arr -> est8 -> text;
	
	$enable_cbox = $arr -> ecbox -> text;
	$enable_cbox1 = $arr -> ecb1 -> text;
	$enable_cbox2 = $arr -> ecb2 -> text;
	$enable_cbox3 = $arr -> ecb3 -> text;
	$enable_cbox4 = $arr -> ecb4 -> text;
	$enable_cbox5 = $arr -> ecb5 -> text;
	
	$enable_website = $arr -> ewebsite -> text;
	$enable_store = $arr -> estore -> text;
	$enable_voiceserver = $arr -> evs -> text;
	$enable_welcome = $arr -> ewel -> text;
	
	$enable_loader = $arr -> eload -> text;
	
	$enable_description = $arr -> edesc -> text;
	
	$enable_about = $arr -> eabout -> text;

?>

<script>
	var enableMusic = <?php echo $enable_music ?>;
	var musicVolume = <?php echo $music_volume ?>
 
	var musicarr = ["<?php echo $music1 ?>",
				"<?php echo $music2 ?>",
				"<?php echo $music3 ?>"
			   ];	
</script>

<style>
	body {
		background-image: url('<?php echo $background ?>');
	}
</style>