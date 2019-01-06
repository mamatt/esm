<?php
function getDevicesList() {
//$devices= array() ;
	
$devices[1]["name"] = "so-homestudio" ;
$devices[1]["type"] = "OUTLET"        ;
$devices[1]["traits"] = "OnOff"       ;
$devices[3]["attributes"] = ""		  ;
$devices[1]["state"] = "fake"         ;   
$devices[1]["param"] = "/topic/mqtt"  ;

$devices[2]["name"] = "vo-homestudio" ;
$devices[2]["type"] = "BLINDS"        ;
$devices[2]["traits"] = "OpenClose"   ;
$devices[3]["attributes"] = ""		  ;
$devices[2]["state"] = "fake"         ;   
$devices[2]["param"] = "/topic/mqtt"  ;

$devices[3]["name"] = "mi-homestudio" ;
$devices[3]["type"] = "SWITCH"        ;
$devices[3]["traits"] = "OnOff|Modes"  ;
$devices[3]["attributes"] ='{
  "availableModes": [{
    "name": "source",
    "name_values": [{
      "name_synonym": ["source", "entrée" ],
      "lang": "fr"
    }],
    "settings": [{
      "setting_name": "radio",
      "setting_values": [{
        "setting_synonym": ["radio", "fm"],
        "lang": "fr"
       }]
     },
     {
       "setting_name": "cd",
       "setting_values": [{
         "setting_synonym": ["cd", "disc"],
         "lang": "fr"
       }]
     }],
     "ordered": true
  }]
}'		  ;
$devices[3]["state"] = "fake"         ;   
$devices[3]["param"] = "/topic/mqtt"  ;
	
/* 
$devices[3]["name"] = "XXXXXXXXX" ;
$devices[3]["type"] = "LIGHT"     ;
$devices[3]["traits"] = "OnOff"   ; 
*/

return $devices ;
}
