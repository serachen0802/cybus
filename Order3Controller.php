<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

if($_POST['price']==""){
  echo "<script>alert('請選擇票種張數');</script>";
    header("Refresh:0;url=Index.php");
}



$price=$_POST['price'];
$sid=$_POST['sid'];
$did=$_POST['did'];
$date=$_POST['date'];
$time=$_POST['time'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$num=$_POST['num'];//張數

$Inum=(Int)$num;
$Iprice=(Int)$price;
$total=$Inum * $Iprice ;//總金額

// var_dump($Iprice);

    $a = $db->query(" SELECT * FROM bus_date INNER JOIN bus_schedule ON bus_date.sid=bus_schedule.sid
    WHERE bus_date.sid='".$sid. "' and bus_date.did='".$did."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    $ticket="";
    foreach($data as $key => $value){
        if($price==$value['onePrice']){
            $ticket="全票";
        }else if($price==$value['halfFare']){
            $ticket="半票";
        }else if($price==$value['backAndForth']){
            $ticket="來回票-去程";
        }
    }

    $x = $db->query(" SELECT * FROM bus_corder INNER JOIN bus_schedule ON bus_corder.sid=bus_schedule.sid INNER JOIN bus_date ON
                    bus_corder.did=bus_date.did WHERE bus_corder.sid='".$sid."' AND bus_corder.did='".$did."'");
    $data2 =$x->fetchAll(PDO::FETCH_ASSOC);
    foreach($data2 as $k => $val){
        $res.=$val['seat'].",";
    }
    // echo $res;
    $res1=substr($res,0,-1);
    // var_dump ($res1);
    $output = explode(",", $res1);

?>