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
$tenantData = new Killbill_Tenant();
//$tenantData->externalKey = '';
$tenantData->apiKey = 'PHP-Test-01';
$tenantData->apiSecret = 'PHP-Test-01';
  
var_dump( 'Request data = '. $tenantData );

// Create it
// create($user, $reason, $comment)
$createdTenant = $tenantData->create('Trifon', 'PHP_TEST', 'PHP client - Tenant creation TEST.');

var_dump( 'CREATED Tenant = '. $createdTenant );
