<?php
require_once "../../conf/config.php" ;

include "sync.php" ;
include "query.php" ;


//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true) ;

$request_id = $decoded["requestId"] ;
$intent = $decoded["inputs"][0]["intent"] ;

dbg("request.log",print_r($decoded,true)) ;

//$intent ="action.devices.SYNC" ;

switch ($intent) {
case "action.devices.SYNC":
		sync($request_id) ;
		break ;
case "action.devices.QUERY":
		$devices = $decoded["inputs"][0]["payload"]["devices"] ;
		query($request_id,$devices) ;
		break ;
case "action.devices.EXECUTE":
		//TODO ;
		break ;
case "action.devices.DISCONNECT":
		//TODO ;
		break ;
}


