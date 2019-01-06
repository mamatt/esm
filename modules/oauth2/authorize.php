<?php
// include our OAuth2 Server object
require_once '../../conf/config.php' ;

require_once 'server.php';


$request = OAuth2\Request::createFromGlobals();
$response = new OAuth2\Response();

// validate the authorize request
if (!$server->validateAuthorizeRequest($request, $response)) {
    $response->send();
    die;
}
// display an authorization form
if (empty($_POST)) {
	include __BASEDIR__.'/views/oauth2/authorize.php' ;
	exit() ;
}

// print the authorization code if the user has authorized your client
$is_authorized = ($_POST['authKey'] === 'sonoff');
$server->handleAuthorizeRequest($request, $response, $is_authorized);
if ($is_authorized) {
  // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
  $code = substr($response->getHttpHeader('Location'), strpos($response->getHttpHeader('Location'), 'code=')+5, 40);
  //exit("SUCCESS! Authorization Code: $code");
}
$response->send();
