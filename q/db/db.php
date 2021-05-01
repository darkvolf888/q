<?php
    
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "b";

    $db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpassword);
    if($db->connect_error){
        die ("Ошибка соединения".$db->connect_error);
    }
//Получение всех статей
    function get_info_all() {
        global $db;
        $info = $db->query("SELECT * FROM new ORDER BY id DESC");
        return $info; 
    }
?>