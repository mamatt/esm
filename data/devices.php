<?php
function getDevicesList() {
//$devices= array() ;
	
$devices[1]["name"] = "so-homestudio" ;
$devices[1]["type"] = "OUTLET"        ;
$devices[1]["traits"] = "OnOff"       ;
$devices[1]["state"] = "fake"         ;   
$devices[1]["param"] = "/topic/mqtt"  ;

$devices[2]["name"] = "vo-homestudio" ;
$devices[2]["type"] = "BLINDS"        ;
$devices[2]["traits"] = "OpenClose"   ;
$devices[2]["state"] = "fake"         ;   
$devices[2]["param"] = "/topic/mqtt"  ;

$devices[3]["name"] = "mi-homestudio" ;
$devices[3]["type"] = "SWITCH"        ;
$devices[3]["traits"] = "OnOff"       ;
$devices[3]["state"] = "fake"         ;   
$devices[3]["param"] = "/topic/mqtt"  ;
	
/* 
$devices[3]["name"] = "XXXXXXXXX" ;
$devices[3]["type"] = "LIGHT"     ;
$devices[3]["traits"] = "OnOff"   ; 
*/

return $devices ;
}
