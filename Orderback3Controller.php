<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$sid=$_POST['sid'];
$did=$_POST['did'];
$oid=$_POST['oid'];

    $a = $db->query(" SELECT * FROM bus_date INNER JOIN bus_schedule ON bus_date.sid=bus_schedule.sid
    WHERE bus_date.sid='".$sid. "' and bus_date.did='".$did."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
    $x = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid INNER JOIN bus_date ON
                    bus_corder.did=bus_date.did WHERE bus_corder.sid='".$sid."' AND bus_corder.did='".$did."'");
    $data2 =$x->fetchAll(PDO::FETCH_ASSOC);
    foreach($data2 as $k => $val){
        $res.=$val['seat'].",";
        // echo $res;
        // echo $val['seat'];
    }
    // echo $res;
    $res1=substr($res,0,-1);
    
    $a = $db->query(" SELECT * FROM bus_corder WHERE oid='".$oid."'");
    $d = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach($d as $key => $v){
        
        $TicketNumr=$v['number'];
       
    }

    




?>