<?php
// KISS :)
// RTM :) 
// NTU :| 
// DRY WORK IN PROGRESS 


//récupérer l'id dans l'url
$id = filter_var($_GET["id"], FILTER_VALIDATE_INT); //NTU
$post = getPostById($id);

//afficher le post
require "view/showView.php";
?>
