<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$sid=$_POST['sid'];
$did=$_POST['did'];
$name=$_POST['name'];
$clientId=$_POST['clientId'];
$phone=$_POST['phone'];

    $a = $db->query(" SELECT * FROM bus_date INNER JOIN bus_schedule ON bus_date.sid=
    bus_schedule.sid WHERE bus_date.sid='".$sid. "'and bus_date.did='".$did."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);

?>