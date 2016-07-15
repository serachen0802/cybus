<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");




$sid=$_POST['sid'];
$did=$_POST['did'];
// $sid=1;
// $did=2;
$checkbox=$_POST['checkbox'];
$name=$_POST['name'];
$clientId=$_POST['clientId'];
$phone=$_POST['phone'];

// echo $sid;

    $a = $db->query(" SELECT * FROM BusDate INNER JOIN BusSchedule ON BusDate.sid=BusSchedule.sid
    WHERE BusDate.sid='".$sid. "'and BusDate.did='".$did."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
// foreach($data as $key => $value){

// echo $value['sid'].$value['did'].$value['time'];
// }


// echo $checkbox.$name.$clientId.$phone;






?>