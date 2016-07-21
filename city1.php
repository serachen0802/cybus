<?php
header("Content-Type:text/html; charset=utf-8");
require ('connect/connect.php');

$city=$_POST['city1'];
//取出資料不重複
$a = $db->query("SELECT DISTINCT start FROM bus_schedule");
$d = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach ($d as $key => $val){
        $res .= sprintf("<option value='%s'>%s</option>", $val['start'], $val['start']);
    }
        echo $res;
?>