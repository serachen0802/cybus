<?php
    header("Content-Type:text/html; charset=utf-8");
    require("connect/connect.php");

    $a = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid 
    INNER JOIN bus_date ON bus_corder.did=bus_date.did
    WHERE oid='".$oid."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $key => $value){

        $start=$value['start'];
        $end=$value['end'];
    }
?>