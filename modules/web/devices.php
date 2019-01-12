<?php
require_once "../../conf/global.php" ;
require_once __BASEDIR__."/data/devices.php" ;

include(__BASEDIR__."/views/web/devices.php") ;
use views\web\devices as view;

$dl = getDevicesList() ;
 
view\render_view($dl) ;
 
