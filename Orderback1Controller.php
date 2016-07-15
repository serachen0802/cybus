<?php
    header("Content-Type:text/html; charset=utf-8");
    require("connect/connect.php");
// 
    // if($backdate==""){
    //     header("location:Index.php");
    // }
    $a = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid 
    INNER JOIN BusDate ON Corder.did=BusDate.did
    WHERE oid='".$oid."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($data as $key => $value){

        $start=$value['start'];
        $end=$value['end'];
    }
    
    

?>