<?php
require_once ('../../conf/config.php');

$server = "localhost";     // change if necessary
$port = 1883;                     // change if necessary
$username = "";                   // set your username
$password = "";                   // set your password
$client_id = "169746"; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);

//$mqtt->debug = true ;

if(!$mqtt->connect(true, NULL)) {
		//exit(1);
}

$topics['#'] = array("qos" => 0, "function" => "procmsg");

$mqtt->subscribe($topics, 0);

while($mqtt->proc()){

}


$mqtt->close();

function procmsg($topic, $msg){
			echo "Msg Recieved: " . date("r") ." Topic: {$topic} -> $msg\n";
}
