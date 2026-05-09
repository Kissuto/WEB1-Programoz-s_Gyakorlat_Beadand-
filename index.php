<?php
include('./includes/config.inc.php');


$oldal = key($_GET); 

if (empty($oldal) || $oldal == "/") {

    $keres = $oldalak['/'];
} elseif (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php")) {
  
    $keres = $oldalak[$oldal];
} else { 

    $keres = $hiba_oldal;
    header("HTTP/1.0 404 Not Found");
}

include('./templates/index.tpl.php'); 
?>