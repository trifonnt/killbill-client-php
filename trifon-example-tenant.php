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
$tenantData->username = 'PHP-Test-01';
$tenantData->password = 'PHP-Test-01';

var_dump( $tenantData );

// Create it
$createdTenant = $tenantData->createTenant('Trifon', 'PHP_TEST', 'PHP client - Tenant creation TEST.', $tenant->getTenantHeaders());

var_dump( $createdTenant );
