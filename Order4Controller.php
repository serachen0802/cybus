<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$sid=$_POST['sid'];
$did=$_POST['did'];
$clientId=$_POST['clientId'];
$name=$_POST['name'];
$phone=$_POST['phone'];
//被選擇的座位
$seat=$_POST['snum'];
$ordertime=date("Y-m-d h:i:s");
//全票.半票.來回
$ticket=$_POST['ticket'];
$ticket1=$_POST['ticket'];
//張數
$TicketNumr=$_POST['TicketNum'];
//總金額
$TotalPrice=$_POST['TotalPrice'];
//取票代碼
$date=date("Y-m-d H:i");
$ticrand=substr(strtotime($date),-7).substr($clientId,-3);
$backstart=$_POST['backstart'];
$backend=$_POST['backend'];

// echo $ticket,"</br>";

// mysql_query("INSERT INTO Corder (sid, did, clientId,clientName,clientPhone,,seat,orderTime,type,number,total) 
// VALUES ('$sid', '$did', '$clientId','$name','$phone','$seat','$ordertime','$ticket','$TicketNumr','$TotalPrice')");

// 新增
// 將購買資料存入資料庫
//     $a = $db->query(" SELECT *
//     FROM BusDate INNER JOIN BusSchedule ON BusSchedule.sid=BusDate.sid WHERE BusDate.date='".$backdate."' 
//     AND BusSchedule.start='".$backstart."'
//     AND BusSchedule.end='".$backend."'");
//     $data = $a->fetchAll(PDO::FETCH_ASSOC);
//     foreach($data as $key => $value){
//         $backdate = $value['date'];
//             }
//             if($backdate== ""){
//         echo "<script>alert('此班車無回程,請購買單程票');</script>";
//         header('location:Order2.php');
//             }else{

// if($ticket="來回票-去程"){
//     $ticket="來回票";
// }
// echo $ticket,"</br>";

$tins = $db->prepare("insert into `bus_corder` " .
            "(`sid`,`did`,`clientId`,`clientName`,`clientPhone`,`seat`,`orderTime`,`type`,`number`,`total`,`ticrand`)".
            "values(:sid,:did,:clientId,:clientName,:clientPhone,:seat,:orderTime,:type,:number,:total,:ticrand)"
          );
$tins->execute(array(
            ':sid' =>$sid,
            ':did' =>$did,
            ':clientId' =>$clientId,
            ':clientName'=>$name,
            ':clientPhone'=>$phone,
            ':seat'=>$seat,
            ':orderTime'=>$ordertime,
            ':type'=>$ticket,
            ':number'=>$TicketNumr,
            ':total'=>$TotalPrice,
            ':ticrand'=>$ticrand
        ));
        
        $oid = $db->lastInsertId();

    

if($ticket1=="來回票-去程"){
  header('location:Orderback1.php?oid='.$oid);
    }else{
        header('location:Order4.php?oid='.$oid);
    }
?>
