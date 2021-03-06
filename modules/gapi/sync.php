<?php
require_once "../../conf/global.php" ;
require_once __BASEDIR__."/data/devices.php" ;

function sync($rid) {
	$header ='{
		"requestId": "'.$rid.'",
		"payload" : {
		"agentUserId": "1234567890",
		"devices": [
	 ' ;
	 
	 $footer='		]
	}
}' ;
	$reponse = $header ;
  
    $dl = getDevicesList() ;
	
	foreach ($dl as $num => $device) {
		$reponse .= '{	"id": "'.$num.'" ,
		"type": "action.devices.types.'.$device["type"].'",
		"traits": [
				"action.devices.traits.'.
				str_replace('|','","action.devices.traits.',$device["traits"]) 		
		.'"],
		"name": { 
			"name": "'.$device["name"].'" 
		},'; 
		
		if ( $device["attributes"] != "" ) {
			$reponse.= '"attributes": '.$device["attributes"]."," ;
		}
		$reponse .= '"willReportState": false },' ;
	}
 	
	$reponse=trim($reponse,",") ;
	$reponse .= $footer ;
	
		
	header("Content-Type: application/json;charset=UTF-8") ;
	echo $reponse ;
}