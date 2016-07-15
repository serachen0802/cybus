<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$clientId=$_POST['clientId'];
$clientPhone=$_POST['clientPhone'];

$a = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid
    INNER JOIN BusDate ON Corder.did=BusDate.did
    WHERE Corder.clientId='".$clientId. "' and Corder.clientPhone='".$clientPhone."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
        
    
?>