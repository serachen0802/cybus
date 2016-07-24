<?php
header("Content-Type:text/html; charset=utf-8");
require ('connect/connect.php');

//取出不重複資料
$a = $db->query("SELECT DISTINCT start FROM bus_schedule");
$d = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach ($d as $key => $val){
        $res .= sprintf("<option value='%s'>%s</option>", $val['start'], $val['start']);
    }
        echo $res;
?>


