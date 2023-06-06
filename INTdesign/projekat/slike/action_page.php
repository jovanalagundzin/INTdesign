<?php

//funkcija za upisivanje u json fajl 
function addToJson($ime_fajla, $something){
    if(!file_exists($ime_fajla) or filesize($ime_fajla) == 0){
        $userArray = array($something);
        $json_data = json_encode($userArray);
        file_put_contents($ime_fajla,$json_data);
    }else{
        $json_content = file_get_contents($ime_fajla);
        $json_content = json_decode($json_content);
        array_push($json_content, $something);
        $json_content = json_encode($json_content);
        file_put_contents($ime_fajla,$json_content);
    }
}

//produkti su niz objekata pa tako i treba da deklarisemo
$product = array();

//ime json fajla
$file_name = '../usluge.json';

//sa post metodom saljemo informacije 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    //citamo iz forme razlicite unose
    $product['fname'] = $_POST['fname'];
    $product['lname'] = $_POST['lname'];
    $product['subject'] = $_POST['subject'];

}else{
    echo "nesto nije uredu";
}



//pozovemo funkciju
addToJson($file_name,$product);

//vrati nas na pocetni sajt
header("Location: usluge.php");
