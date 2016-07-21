<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$clientId=$_POST['clientId'];
$clientPhone=$_POST['clientPhone'];

$a = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid
    INNER JOIN bus_date ON bus_corder.did=bus_date.did
    WHERE bus_corder.clientId='".$clientId. "' and bus_corder.clientPhone='".$clientPhone."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
        
    
?>