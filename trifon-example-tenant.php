<?php
// Path to the library
require_once(dirname(__FILE__) . '/lib/killbill.php');

// Killbill server
Killbill_Client::$serverUrl = 'http://localhost:8080';
Killbill_Client::$apiPassword = '';

// Set these values for your particular tenant
//$tenant = new Killbill_Tenant();
//$tenant->apiKey    = '';
//$tenant->apiSecret = '';

//print('TRIFON');
//var_dump( $tenant );

// Prepare the User data
$tenantData = new Killbill_Tenant();
//$tenantData->externalKey = '';
$tenantData->apiKey = 'PHP-Test-01';
$tenantData->apiSecret = 'PHP-Test-01';

print('Request data = ');
var_dump( $tenantData );

// Create it
$createdTenant = $tenantData->create('Trifon', 'PHP_TEST', 'PHP client - Tenant creation TEST.');

print('CREATED Tenant = ');
var_dump( $createdTenant );
