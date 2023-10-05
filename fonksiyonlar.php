<?php 
function dd($value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die();
    }
function urldogrulama($value){
        return $_SERVER["REQUEST_URI"]===$value;
}

?>