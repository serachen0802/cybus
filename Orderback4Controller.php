<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$oid=$_POST['oid'];
$sid=$_POST['sid'];
$did=$_POST['did'];
$seat=$_POST['snum'];

$a = $db->query(" SELECT * FROM bus_corder WHERE oid='".$oid."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    foreach($data as $key => $value){
        $clientId=$value['clientId'];
        $name=$value['clientName'];
        $phone=$value['clientPhone'];
        $ordertime=$value['orderTime'];
        $ticket=$value['type'];
        $TicketNumr=$value['number'];
        $TotalPrice=$value['total'];
        $ticrand=$value['ticrand'];
    }

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
            ':type'=>"來回票-回程",
            ':number'=>$TicketNumr,
            ':total'=>$TotalPrice,
            ':ticrand'=>$ticrand
        ));
        
        $oid2 = $db->lastInsertId();

header('location:Orderback4.php?oid2='.$oid2.'&oid='.$oid);

?>