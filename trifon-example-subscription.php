<?php
// Path to the library
require_once(dirname(__FILE__) . '/lib/killbill.php');

// Killbill server
Killbill_Client::$serverUrl = "http://localhost:8080";
Killbill_Client::$apiPassword = "test";

// Set these values for your particular tenant
$tenant = new Killbill_Tenant();
$tenant->apiKey    = '';
$tenant->apiSecret = '';

print('TRIFON');
var_dump( $tenant ); //@Trifon

// Unique id for this account
$externalAccountId = uniqid();
var_dump( $externalAccountId ); //@Trifon

// Prepare the account data
$accountData = new Killbill_Account();
$accountData->name = "Killbill php test";
$accountData->externalKey = $externalAccountId;
$accountData->email = "test-" . $externalAccountId . "@kill-bill.org";
$accountData->currency = "USD";
$accountData->paymentMethodId = null;
$accountData->address1 = "12 rue des ecoles";
$accountData->address2 = "Poitier";
$accountData->company = "Renault";
$accountData->state = "Poitou";
$accountData->country = "France";
$accountData->phone = "81 53 26 56";
$accountData->length = 4;
$accountData->billCycleDay = 12;
$accountData->timeZone = "UTC";
var_dump( $accountData ); //@Trifon

// Create it
$createdAccount = $accountData->create("pierre", "PHP_TEST", "Test for " . $externalAccountId, $tenant->getTenantHeaders());

var_dump( $createdAccount );
