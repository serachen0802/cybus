<?php
    header("Content-Type:text/html; charset=utf-8");
    require ('connect/connect.php');
    
    // function city2(){
    $city=$_POST['city1'];
    // $city='台北';
    $a = $db->query("SELECT * FROM BusSchedule WHERE start='".$city."'");
    $data = $a->fetchAll(PDO::FETCH_ASSOC);
    if(isset($city)){
        $result = "";
        foreach ($data as $key => $value){
            $result .= sprintf("<option value='%s'>%s</option>", $value['end'], $value['end']); 
        }
        
        echo $result;
    }
    // }
    // function city1(){
    
    // }
    
    
    
 
?>