<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$city1 = $_POST['city1'];
$city2 = $_POST['city2'];
$nowtime = strtotime(date('Y-m-d'));//現在時間
$ordertimef = $_POST['ordertime1'];
$ordertimes = $_POST['ordertime2'];
$date = $_POST['orderdate'];


        if ($ordertimef != "") {
            $timeSql1 = " AND bus_date.time >= '".$ordertimef."'";
        }
        if ($ordertimes != "") {
            $timeSql2 = " AND bus_date.time <= '".$ordertimes."'";
            //  輸入時間後面需要比較大
        }

    $a = $db->query(" SELECT *, (SELECT SUM(number) FROM bus_corder where sid=bus_date.sid AND 
    did=bus_date.did) AS Seated FROM bus_date INNER JOIN bus_schedule ON bus_date.sid=bus_schedule.sid
    WHERE bus_schedule.start =  '".$city1."' AND bus_schedule.end =  '".$city2."' 
    AND bus_date.date='".$date."'".$timeSql1.$timeSql2);
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
?>
