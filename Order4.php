<!DOCTYPE HTML>
<?php

session_start();

$_SESSION["oid"]=$_GET["oid"];
// echo $_SESSION["oid"]
require("OrderFinshController.php");

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我要訂票</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/order.css" type="text/css" />
</head>

<body>
    <form method="post" action="" id=''>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="Index.php"><img src="images/cybus.png" /></a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="Index.php">乘車資訊</a>
                        </li>
                        <li>
                            <a class="active" href="#">我要訂票</a>
                        </li>
                        <li>
                            <a href="#">我的車票</a>
                        </li>
                        <li>
                            <a href="#">連絡我們</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="background-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <div class="titleTxt">我要訂票</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="OrderContent">
                                <div class="agreeTitle">訂票成功</div>
                                <div class="agreeContent">
                                    <?php  foreach($data as $key => $val){?>
                                    <div><span>訂票姓名:</span><?php echo $val['clientName'];?></div>
                                    <div><span>身分證字號:</span><?php echo $val['clientId'];?></div>
                                    <div><span>電話:</span><?php echo $val['clientPhone'];?></div>
                                    <div><span>起站:</span><?php echo $val['start'];?></div>
                                    <div><span>迄站:</span><?php echo $val['end'];?></div>
                                    <div><span>乘車時間:</span><?php echo substr($val['time'],0,-3);?></div>
                                    <div><span>票種:</span><?php echo $val['type'];?></div>
                                    <div><span>張數:</span><?php echo $val['number'];?></div>
                                    <div><span>座位:</span><?php echo $val['seat'];?></div>
                                    <div><span>總共金額:</span><?php echo $val['total'];?></div>
                                    <div><span>訂票時間:</span><?php echo $val['orderTime'];?></div>
                                    <div><span>取票代碼:</span><?php echo $val['ticrand'];?></div>
                                  <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    
    
    <script>
    // $('#sub1').submit(function() {
    // function sub(){
    // $("#sub2").submit();
    
    // });
    </script>
    </form>
</body>


</html>