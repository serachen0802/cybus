<?php
// session_start();
require("connect/connect.php");
// $_SESSION["oid"]=$_GET['oid'];


    $o = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid INNER JOIN BusDate ON
                    Corder.did=BusDate.did WHERE Corder.oid=".$_SESSION["oid"]);
    $data = $o->fetchAll(PDO::FETCH_ASSOC);
    
    
   
        
    
?>