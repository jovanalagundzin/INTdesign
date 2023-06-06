<?php

 if($_SERVER[`REQEST_METHOD`]=="POST"){
   $načinIzradeProjekta=$_POST[`način_izrade_projekta`];
   echo $načinizradeprojekta;
   $kvadratura=$_POST[`kvadratura`];
   echo $kvadratura;
 }else{
    echo "nesto nije u redu"
 }