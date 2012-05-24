<?php

include("globals.php");

$db = new MySQL();

$consulta = $db->consulta("SELECT * FROM users");

if($db->num_rows($consulta)>0){
  while($resultados = $db->fetch_array($consulta)){
   
 }
}


$foo =  new vista();

echo $foo->get_content();
