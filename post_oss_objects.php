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

// Upload a file to a bucket

$dataManagement = new DataManagement();
return $dataManagement->uploadFile();

$klein->dispatch();