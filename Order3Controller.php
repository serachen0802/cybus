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
// echo $total;
// echo $num;
// echo $sid.$did;
// echo $phone;

// var_dump($Iprice);

    $a = $db->query(" SELECT * FROM BusDate INNER JOIN BusSchedule ON BusDate.sid=BusSchedule.sid
    WHERE BusDate.sid='".$sid. "' and BusDate.did='".$did."'");
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
    // echo $value['onePrice'];    

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
    // var_dump ($res1);
    $output = explode(",", $res1);
    // var_dump($output);
    // echo json_encode($output);  
   



?>