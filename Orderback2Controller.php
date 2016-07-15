<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");
// if($backdate==""){
//         header("location:Index.php");
//     }

$backdate = $_POST['backdate'];
$oid = $_POST['oid'];
$backstart=$_POST['backstart'];
$backend=$_POST['backend'];
// echo $backstart,"<br>";
// echo $backend,"<br>";

    $a = $db->query(" SELECT *, (SELECT SUM(number) FROM Corder where sid=BusDate.sid AND did=BusDate.did) AS Seated
    FROM BusDate INNER JOIN BusSchedule ON BusSchedule.sid=BusDate.sid WHERE BusDate.date='".$backdate."' 
    AND BusSchedule.start='".$backstart."'
    AND BusSchedule.end='".$backend."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);

?>