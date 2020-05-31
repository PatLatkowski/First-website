<?php
require_once '../business.php';
require '../../vendor/autoload.php';
// Array with names
$db = get_db();
$pictures = $db->pictures->find();
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($pictures as $picture) {
        if (stristr($q, substr($picture['tytul'], 0, $len))) {
            if ($hint === "") {
                $hint = '<div style="display:block" class="gal"><a target="_blank" href="images/water/'.$picture['name'].'"><img src="images/mini/' .$picture['name']. '" /></a><br/>
				Autor: '.$picture['autor'].'<br/>
				Tytul: '.$picture['tytul'].'</div>';
            } else {
                $hint .= '<div style="display:block" class="gal"><a target="_blank" href="images/water/'.$picture['name'].'"><img src="images/mini/' .$picture['name']. '" /></a><br/>
				Autor: '.$picture['autor'].'<br/>
				Tytul: '.$picture['tytul'].'</div>';
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "Brak dopasowań" : $hint;
?>