<?php 

function post($_rut){
             $RUT = "http://localhost:3000/rut/".$_rut;
             $verificarut_json=file_get_contents($RUT);
             $ver_rut =json_decode($verificarut_json, TRUE);
             var_dump($ver_rut);
         }
         
 if($_POST){
     $_rut=$_POST['rut'];
     post($_rut);
     }
?>