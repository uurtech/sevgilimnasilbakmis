<?php

if(empty($_COOKIE['cook'])){
    die("Nope");
    exit;
}

if (!file_exists($_COOKIE['cook'].'.html')) { 
    $handle = fopen($_COOKIE['cook'].'.html','w+'); 
    fwrite($handle,'<html>'.$_POST['html'].'</html>'); 
    fclose($handle); 
}

?>