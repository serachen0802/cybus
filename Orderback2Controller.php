<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$backdate = $_POST['backdate'];
$oid = $_POST['oid'];
$backstart=$_POST['backstart'];
$backend=$_POST['backend'];

    $a = $db->query(" SELECT *, (SELECT SUM(number) FROM bus_corder where sid=bus_date.sid AND did=bus_date.did) AS Seated
    FROM bus_date INNER JOIN bus_schedule ON bus_schedule.sid=bus_date.sid WHERE bus_date.date='".$backdate."' 
    AND bus_schedule.start='".$backstart."'
    AND bus_schedule.end='".$backend."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);

?>