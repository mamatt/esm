<?php
require_once "../../conf/config.php" ;
require_once __BASEDIR__."/data/devices.php" ;

function query($rid,$devices) {
	
	$dl = getDevicesList() ;
	
	$reponse = '{
				"requestId": "'.$rid.'",
			    "payload": {
				"devices": {
				' ;
	
	foreach ($devices as $device) {
		$stateMethod = $dl[$device["id"]]["state"] ;
		
		switch ($stateMethod) {
			case "MQTT":
				$state = getStateFromMQTT($dl[$device["id"]]["param"]) ;
				break ;
			case "fake":
				$state = fakeStateOn() ;
				break ;
		}		
		$reponse .= '"'.$device["id"].'" :{' .$state .'},' ;
	}
	
	$reponse=trim($reponse,",") ;
	$reponse.='}}}' ;
	
	dbg("reponse.log",$reponse) ;
	
	header("Content-Type: application/json;charset=UTF-8") ;
	echo $reponse ;
}
