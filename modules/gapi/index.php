<?php
include "../../conf/config.php" ;

include __BASEDIR__."/data/devices.php" ;


//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true) ;

$request_id = $decoded["requestId"] ;
$intent = $decoded["inputs"][0]["intent"] ;

switch ($intent) {
case "action.devices.SYNC":
		sync($request_id) ;
		break ;
case "action.devices.QUERY":
		//TODO
		//query($request_id) ;
		break ;
case "action.devices.EXECUTE":
		//TODO ;
		break ;
case "action.devices.DISCONNECT":
		//TODO ;
		break ;
}

function sync($rid) {
	$fakedevices ='
{
	"requestId": "'.$rid.'",
	"payload" : {
		"agentUserId": "1234567890",
		"devices": [{
			"id": "1" ,
			"type": "action.devices.types.OUTLET",
			"traits": [
					"action.devices.traits.OnOff"
			],
			"name": {
				"defaultNames": ["Ma prise 1"],
				"name": "SO 1",
				"nicknames": ["tasmota sonoff"]
			},
			"willReportState": false
		}]
	}
}' ;
	 
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
   
	foreach ($dl as $device) {
		$reponse .= $device ;
		$reponse .="," ;
	} ;
 	
	$reponse=trim($reponse,",") ;
	$reponse .= $footer ;
	
		
	header("Content-Type: application/json;charset=UTF-8") ;
	echo $reponse ;
}
