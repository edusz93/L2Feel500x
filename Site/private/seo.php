<?php

# Titles & descriptions

switch ($p) {
	
	case "404":
		$SEO['title'] = "404 | ".$server_name;
		$SEO['description'] = $LANG[12132];
	break;
		
	case "boss":
		$SEO['title'] = "Boss Status | ".$server_name;
		$SEO['description'] = $LANG[12133];
	break;
		
	case "changepass":
		$SEO['title'] = $LANG[12022]." | ".$server_name;
		$SEO['description'] = $LANG[12134];
	break;
		
	case "donations":
		$SEO['title'] = $LANG[12039]." | ".$server_name;
		$SEO['description'] = $LANG[12135];
	break;
		
	case "download":
		$SEO['title'] = "Downloads | ".$server_name;
		$SEO['description'] = $LANG[12136];
	break;
		
	case "forgot":
		$SEO['title'] = $LANG[12040]." | ".$server_name;
		$SEO['description'] = $LANG[12137];
	break;
		
	case "forgot_confirm":
		$SEO['title'] = $LANG[12040]." | ".$server_name;
	break;
		
	case "gallery":
		$SEO['title'] = $LANG[12026]." | ".$server_name;
		$SEO['description'] = $LANG[12138];
	break;
		
	case "info":
		$SEO['title'] = $LANG[12996]." | ".$server_name;
		$SEO['description'] = $LANG[12139];
	break;
		
	case "news":
		$SEO['title'] = $LANG[13001]." | ".$server_name;
		$SEO['description'] = $LANG[12140];
	break;
		
	case "oly_allheroes":
		$SEO['title'] = "Grand Olympiad | ".$LANG[12025]." | ".$server_name;
		$SEO['description'] = $LANG[12141];
	break;
		
	case "oly_heroes":
		$SEO['title'] = "Grand Olympiad | ".$LANG[12999]." | ".$server_name;
		$SEO['description'] = $LANG[12142];
	break;
		
	case "oly_rank":
		$SEO['title'] = "Grand Olympiad | Ranking | ".$server_name;
		$SEO['description'] = $LANG[12143];
	break;
		
	case "register":
		$SEO['title'] = $LANG[12032]." | ".$server_name;
		$SEO['description'] = $LANG[12144];
	break;
		
	case "rules":
		$SEO['title'] = $LANG[12108]." | ".$server_name;
		$SEO['description'] = $LANG[12145];
	break;
		
	case "siege":
		$SEO['title'] = "Castle & Siege | ".$server_name;
		$SEO['description'] = $LANG[12146];
	break;
		
	case "support":
		$SEO['title'] = $LANG[13005]." | ".$server_name;
		$SEO['description'] = $LANG[12147];
	break;
		
	case "topclan":
		$SEO['title'] = "Top Clan | ".$server_name;
		$SEO['description'] = $LANG[12148];
	break;
		
	case "toponline":
		$SEO['title'] = "Top Online | ".$server_name;
		$SEO['description'] = $LANG[12149];
	break;
		
	case "toppk":
		$SEO['title'] = "Top Pk | ".$server_name;
		$SEO['description'] = $LANG[12150];
	break;
		
	case "toppvp":
		$SEO['title'] = "Top PvP | ".$server_name;
		$SEO['description'] = $LANG[12151];
	break;
		
	case "ucp_changepass":
		$SEO['title'] = $LANG[12022]." | ".$server_name;
	break;
		
	case "ucp_unstuck":
		$SEO['title'] = "Unstuck | ".$server_name;
	break;
		
	default:
		$SEO['title'] = $server_name." - ".$server_chronicle;
		$SEO['description'] = $LANG[12152];
	break;
	
}