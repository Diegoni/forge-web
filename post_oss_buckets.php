<?php
session_start();
include_once "./vendor/autoload.php";
include_once "./server/oauthtoken.php";
include_once "./server/modelderivative.php";
include_once "./server/oss.php";
include_once "./server/config.php";
include_once "./server/oauth.php";

use Klein\Klein;
use Autodesk\ForgeServices\AccessToken;
use Autodesk\ForgeServices\ModelDerivative;
use Autodesk\ForgeServices\DataManagement;

$klein = new Klein();

//$accessToken = new AccessToken(); 
//$accessToken->getAccessToken();

// Create a new bucket

$dataManagement = new DataManagement();
return $dataManagement->createOneBucket();

$klein->dispatch();
/*
Fatal error: Uncaught Autodesk\Forge\Client\ApiException: [400] Error connecting to the API (https://developer.api.autodesk.com/oss/v2/buckets) in /var/www/html/forge-web/vendor/autodesk/forge-client/lib/ApiClient.php:261 Stack trace: 
#0 /var/www/html/forge-web/vendor/autodesk/forge-client/lib/Api/AbstractApi.php(89): Autodesk\Forge\Client\ApiClient->callApi() 
#1 /var/www/html/forge-web/vendor/autodesk/forge-client/lib/Api/BucketsApi.php(115): Autodesk\Forge\Client\Api\AbstractApi->callApi() 
#2 /var/www/html/forge-web/vendor/autodesk/forge-client/lib/Api/BucketsApi.php(55): Autodesk\Forge\Client\Api\BucketsApi->createBucketWithHttpInfo() 
#3 /var/www/html/forge-web/server/oss.php(29): Autodesk\Forge\Client\Api\BucketsApi->createBucket() 
#4 /var/www/html/forge-web/post_oss_buckets.php(23): Autodesk\ForgeServices\DataManagement->createOneBucket() 
#5 {main} thrown in /var/www/html/forge-web/vendor/autodesk/forge-client/lib/ApiClient.php on line 261
*/