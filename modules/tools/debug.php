<?php

function dbg($file,$string) {
	if ( __DBG__ == "true") {			
		$content = $string ;
		file_put_contents(__BASEDIR__."/log/".$file,$content,FILE_APPEND) ;
	}
}

function fakeStateOn() {
	return '
		"on": true,
        "online": true
		' ;
}