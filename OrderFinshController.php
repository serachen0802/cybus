<?php
// session_start();
require("connect/connect.php");
// $_SESSION["oid"]=$_GET['oid'];


    $o = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid INNER JOIN bus_date ON
                    bus_corder.did=bus_date.did WHERE bus_corder.oid=".$oid);
    $data = $o->fetchAll(PDO::FETCH_ASSOC);
    
    
   
        
    
?>