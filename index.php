<?php 
require 'fonksiyonlar.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri==='/websitem') {
    require __DIR__.'/../controllers/index.php'; // sayfayı içeri yüklemiyor  
}
elseif($uri==="controllers/about.php"){
     echo "rota?";
     require '/websitem/controllers/about.php';
}
elseif($uri==="controllers/contact.php")
{
    require "/controllers/contact.php";
} 
?>