<?php
    date_default_timezone_set("Africa/Ouagadougou");
    session_start();
    define("URL", str_replace("index.php", "",
        (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

//    include controller object



//    Mapping all routes
    try {
        if (empty($_GET['page'])) {
            require "views/partials/template.php";
        } else {
            $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
            try {
                switch ($url[0]){
                    case 'home':

                    break;
                    }
                }catch (Exception $e){
                    echo $e->getMessage();
                }
            }
    }catch (Exception $e){
        echo $e->getMessage();
        }