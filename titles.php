<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$a = $db->query(" SELECT * FROM bus_news ORDER BY date DESC limit 5");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key => $value){
        
       $res .= sprintf("<a value='%s' ></a>", $value['title']);
    }
?>