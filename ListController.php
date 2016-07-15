<?php


header("Content-Type:text/html; charset=utf-8");
require("connect/connect.php");
// $btn=$_POST['btnok'];
$city1=$_POST['city1'];
$city2=$_POST['city2'];
$orderdate=strtotime($_POST['orderdate']);
$ordertime1=strtotime($_POST['ordertime1']);
$ordertime2=strtotime($_POST['ordertime2']);
$nowtime=strtotime(date('Y-m-d'));//現在時間
$ordertimef=$_POST['ordertime1'];
$ordertimes=$_POST['ordertime2'];
$date1=$_POST['orderdate'];
    // 抓取所選取時間的id
    
   

        if ($ordertimef != "") {
            $timeSql1= " AND BusDate.time >= '".$ordertimef."'";
        }
        
        if ($ordertimes != "") {
            $timeSql2= " AND BusDate.time <= '".$ordertimes."'";
            //  輸入時間後面需要比較大
            
        }
    // $se = $x -> query("SELECT * FROM Corder")    
        

    $a = $db->query(" SELECT *, (SELECT SUM(number) FROM Corder where sid=BusDate.sid AND did=BusDate.did) AS Seated FROM BusDate
    INNER JOIN BusSchedule ON BusDate.sid=BusSchedule.sid WHERE BusSchedule.start =  '".$city1."'
    AND BusSchedule.end =  '".$city2."' AND BusDate.date='".$date1."'".$timeSql1.$timeSql2);
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    

            
            // sprintf("<td>%s</td>",$value['time'])
   //輸入時間後面需要比較大
//   if($ordertime1>$ordertime2){
//         echo "<script>alert('請輸入正確的時間範圍');</script>";
//         header("Refresh:0.2;url=Index.php");
//     }else{
//         $timeSql1 = "";
//         $timeSql2 = "";
//         if ($ordertime1 != "") {
//             $timeSql1 = " AND BusDate.time >= '".$ordertime1."'";
//         }
        
//         if ($ordertime2 != "") {
//             $timeSql2 = " AND BusDate.time <= '".$ordertime2."'";
//         }

// header("location:List.php");
?>
