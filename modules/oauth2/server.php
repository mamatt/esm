<?php
require_once ('../../conf/config.php') ;

require_once(__BASEDIR__.'/vendor/OAuth2/Autoloader.php');

// connection for SQLite
$pdo = new PDO('sqlite:'.__BASEDIR__.'/data/oauth2.db');

OAuth2\Autoloader::register();


$storage = new OAuth2\Storage\Pdo($pdo);
$server = new OAuth2\Server($storage,array('enforce_state' => false));

// configure your available scopes
$defaultScope = 'bridge';
$supportedScopes = array( 'bridge' );

$memory = new OAuth2\Storage\Memory(array(
  'default_scope' => $defaultScope,
  'supported_scopes' => $supportedScopes
));
$scopeUtil = new OAuth2\Scope($memory);

$server->setScopeUtil($scopeUtil);

// Add the "Client Credentials" grant type (it is the simplest of the grant types)
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));


$server->addGrantType(new OAuth2\GrantType\RefreshToken($storage, array(
    'always_issue_new_refresh_token' => true
)));

// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
