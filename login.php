<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    set_time_limit(0);
    require 'vendor/autoload.php';

    $rankToken = \InstagramAPI\Signatures::generateUUID();

    \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;

    $username = '0a1s2d';
    $password = '16411903';

    $ig = new \InstagramAPI\Instagram();

    try {
        $ig->login($username,$password);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
?>