<?php
function getDevicesList() {
	
$devices_list = Array (
'{	"id": "1" ,
	"type": "action.devices.types.OUTLET",
	"traits": [
			"action.devices.traits.OnOff"
	],
	"name": {
		"defaultNames": ["Ma prise 1"],
		"name": "so-XXX",
		"nicknames": ["SonOff Tasmota"]
	},
	"willReportState": false }'
,
'{	"id": "2" ,
	"type": "action.devices.types.BLINDS",
	"traits": [
			"action.devices.traits.OpenClose"
	],
	"name": {
		"defaultNames": ["Mon volet 1"],
		"name": "vo-XXX",
		"nicknames": ["Volet SonOff"]
	},
	"willReportState": false }'
) ;


	return $devices_list ;
}
