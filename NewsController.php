<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");


    $a = $db->query(" SELECT * FROM bus_news WHERE nid = '".$nid."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key => $value){
        
    }
?>