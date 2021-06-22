<?php 
//FrontController
error_reporting(E_ALL);
ini_set("display_errors", 1);

require "vendor/autoload.php";
//après la ligne 6, à partir de la ligne 7 Toutes mes librariries sont chargées ! 


require "model/model.php";

//analyser l'url afin de rediriger vers le bon
// controller
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if($uri == "/index.php/list") {
    require "controller/listController.php";
} else if ($uri == "/index.php/show" && isset($_GET['id'])){
    require "controller/showController.php";
} else if ($uri == "/index.php/generatepdf") {
    require "controller/generatePdfController.php";
} else if ($uri == "/index.php/logsomething") {
    require "controller/logsomethingController.php";
}
else {
    echo "404";
}