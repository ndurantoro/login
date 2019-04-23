<?php
include ("../Clases/usuario.php");
include ("../Lib/constantes.php");
include ("../Lib/db.php");
include ("../validaAcceso.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$clave=$_POST["clave2"];
if (isset($_SESSION["Usuario"])){
    $oUsr=$_SESSION["Usuario"];
    $oUsr->setClave($clave);
    
    if($oUsr->ActualizaClave()){
        echo "Actualizado";
    }
   
}