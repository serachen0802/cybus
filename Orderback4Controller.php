<?php
header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");

$oid=$_POST['oid'];
$sid=$_POST['sid'];
$did=$_POST['did'];
$seat=$_POST['snum'];

// echo $oid,"<br>";
// echo $sid,"<br>";
// echo $did,"<br>";
// echo $seat,"<br>";

$a = $db->query(" SELECT * FROM Corder WHERE oid='".$oid."'");
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
    
// echo $clientId,"<br>";
// echo $name,"<br>";
// echo $phone,"<br>";
// echo $ordertime,"<br>";
// echo $ticket,"<br>";
// echo $TicketNumr,"<br>";
// echo $TotalPrice,"<br>";
// echo $ticrand,"<br>";
    


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
        
        $oid2 = $db->lastInsertId();



header('location:Orderback4.php?oid2='.$oid2.'&oid='.$oid);

?>