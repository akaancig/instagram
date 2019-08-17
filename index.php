<?php

    error_reporting(E_ALL);
    ini_set('display_errors',1);
    set_time_limit(0);
    require 'vendor/autoload.php';

    function recursive($array){
        foreach($array as $key => $value){
            //If $value is an array.
            if(is_array($value)){
                //We need to loop through it.
                recursive($value);
            } else{
                //It is not an array, so print it out.
                echo "<br>" ;
                print_r($key);
                echo  " => ";
                print_r($value);
                echo "<br>";
            }
        }
    }

    \InstagramAPI\Instagram::$allowDangerousWebUsageAtMyOwnRisk = true;

    $username = '0a1s2d';
    $password = '16411903';

    $ig = new \InstagramAPI\Instagram();

     try {
      $ig->login($username,$password);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }

    $json = $ig->account->getCurrentUser();
    $arr = json_decode($json,true);
    //print_r($arr);

    recursive($arr);

?>
