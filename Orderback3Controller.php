<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$sid=$_POST['sid'];
$did=$_POST['did'];
$oid=$_POST['oid'];

// echo $sid,"<br>";
// echo $did,"<br>";
// echo $oid,"<br>";
// if($sid==""){
//         header("location:Index.php");
//     }

    $a = $db->query(" SELECT * FROM BusDate INNER JOIN BusSchedule ON BusDate.sid=BusSchedule.sid
    WHERE BusDate.sid='".$sid. "' and BusDate.did='".$did."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    
    $x = $db->query(" SELECT * FROM Corder INNER JOIN BusSchedule ON Corder.sid=BusSchedule.sid INNER JOIN BusDate ON
                    Corder.did=BusDate.did WHERE Corder.sid='".$sid."' AND Corder.did='".$did."'");
    $data2 =$x->fetchAll(PDO::FETCH_ASSOC);
    foreach($data2 as $k => $val){
        $res.=$val['seat'].",";
        // echo $res;
        // echo $val['seat'];
    }
    // echo $res;
    $res1=substr($res,0,-1);
    
    $a = $db->query(" SELECT * FROM Corder WHERE oid='".$oid."'");
    $d = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach($d as $key => $v){
        
        $TicketNumr=$v['number'];
       
    }

    




?>