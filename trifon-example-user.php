<?php
// Path to the library
require_once(dirname(__FILE__) . '/lib/killbill.php');

// Killbill server
Killbill_Client::$serverUrl = 'http://localhost:8080';
Killbill_Client::$apiPassword = '';

// Set these values for your particular tenant
$tenant = new Killbill_Tenant();
$tenant->apiKey    = '';
$tenant->apiSecret = '';

print('TRIFON');
var_dump( $tenant );

// Prepare the User data
$userData = new Killbill_Security();
$userData->username = 'PHP-Test-01';
$userData->password = 'PHP-Test-01';
$userData->roles = array('tenant_user');

var_dump( $userData );

// Create it
//                                  ($user, $reason, $comment, $headers = null
$createdUser = $userData->createUser('Trifon', 'PHP_TEST', 'Test for User creation.', $tenant->getTenantHeaders());

var_dump( $createdUser );