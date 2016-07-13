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
        

    $a = $db->query(" SELECT * FROM BusDate
    INNER JOIN BusSchedule ON BusDate.sid=BusSchedule.sid WHERE BusSchedule.start =  '".$city1."'
    AND BusSchedule.end =  '".$city2."' AND BusDate.date='".$date1."'".$timeSql1.$timeSql2);
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
   
  
   
//   BusDate.did,BusSchedule.sid,BusSchedule.start,BusSchedule.end,BusSchedule.onePrice,
    // BusSchedule.halfFare,BusSchedule.backAndForth,BusDate.date,BusDate.time
        //  foreach($data as $key => $value){
            
//              $result .= $value['start'].$value['end'],$value['date'],$val['time'],
//              $value['onePrice'],$value['halfFare'],$value['backAndForth']); 
//           $result.=$value['time'];
//             }
 
//  echo $result;

    // echo $result;
            
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
       
       // sql . $timeSql1 . $timeSql2 
    // }
   
    // if($ordertime1=="") {
    //     if($ordertime2==""){
    //         all();
    //     }else {
    //         before();
    //     }
    // }else{
    //     if($ordertime2==""){
    //         later();
    //     }else{
    //         if($ordertime1>$ordertime2){
    //             echo "<script>alert('請輸入正確的時間範圍');</script>";
    //             header("Refresh:0.2;url=Index.php");
    //         }else{
    //             between();
    //         }
    //     }
    // }
    
    //   function all(){
    //       echo "顯示全部時間";
    //   }
    //   function later(){
    //       echo "顯示幾點之後";
    //   }
    //   function before(){
    //       echo "顯示幾點之前的車";
    //   }
    //   function between(){
    //       echo "顯示這兩個時間之間";
    //   }
    
       
// alert
//  echo "<script>alert($result);</script>";

// echo $ordertime1."<br>";
// echo $ordertime2;

// echo $city1.$city2.$orderdate.$ordertime1.$ordertime2;


// header("location:List.php");
?>