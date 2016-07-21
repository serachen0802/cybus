<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");


$o = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid INNER JOIN bus_date ON
                    bus_corder.did=bus_date.did WHERE bus_corder.oid=".$oid);
    $data = $o->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key => $oid){
        
    }
    
$o2 = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid INNER JOIN bus_date ON
                    bus_corder.did=bus_date.did WHERE bus_corder.oid=".$oid2);
    $da = $o2->fetchAll(PDO::FETCH_ASSOC);
    foreach($da as $key => $oid2){
        
    }


if($oid['type']="來回票-去程"){
    $type="來回票";
}

?>