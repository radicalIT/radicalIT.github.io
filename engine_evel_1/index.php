<?php

include_once 'pages/header.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
    $path = "pages/" . $page . ".php";
    
    if(file_exists($path)){
        include_once $path;
    }else{
        echo "Nie posiadamy takiej strony";
    }
    

}else{
    echo"Błędne odwołanie";
}



include_once 'pages/footer.php';
