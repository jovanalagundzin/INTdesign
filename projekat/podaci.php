<?php

 $user=array("način izrade projekta"=>"3D","kvadratura"=>"110 metara kvadratnih");
 $fileName="user.json";

 function addToJson($file_name,$new_element){

    if(!file_exists($file_name) or filesize($filre_name)==0 ){
        $user=array($new_element);
        $userJson=json_encode($user);
        file_put_contents($file_name,$userJson);
    }else{
        $jsonContent=file_get_contents($file_name);
        $jsonContent=json_decode($jsonContent);
        array_push($jsonContent,$new_element);
        $jsonContent=json_encode($jsonContent);
        file_put_contents($file_name,$jsonContent);
    }
 }
 addToJson($fileName,$user);