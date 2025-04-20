
<?php

function create_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "socmed_ciro_c";
        
    return new mysqli($host,$username,$password,$database);
}