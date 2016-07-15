<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");


$o = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid INNER JOIN BusDate ON
                    Corder.did=BusDate.did WHERE Corder.oid=".$oid);
    $data = $o->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key => $oid){
        
    }
    
$o2 = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid INNER JOIN BusDate ON
                    Corder.did=BusDate.did WHERE Corder.oid=".$oid2);
    $da = $o2->fetchAll(PDO::FETCH_ASSOC);
    foreach($da as $key => $oid2){
        
    }




?>