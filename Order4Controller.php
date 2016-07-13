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
//張數
$TicketNumr=$_POST['TicketNum'];
//總金額
$TotalPrice=$_POST['TotalPrice'];
//取票代碼
$date=date("Y-m-d");
$ticrand=strtotime($date).substr($clientId,0,3);
echo $ticrand;

// mysql_query("INSERT INTO Corder (sid, did, clientId,clientName,clientPhone,,seat,orderTime,type,number,total) 
// VALUES ('$sid', '$did', '$clientId','$name','$phone','$seat','$ordertime','$ticket','$TicketNumr','$TotalPrice')");

// 新增
// 將購買資料存入資料庫
$tins = $db->prepare("insert into `Corder` " .
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

    
        


        
        
        // https://lab-sera-chen.c9users.io/cyBus/Order4.php


// $oid =mysql_insert_id();

header('location:Order4.php?oid='.$oid);


?>
