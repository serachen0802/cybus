<?php
$oid2=$_GET["oid2"];
$oid=$_GET["oid"];
// echo $_SESSION["oid"]
// require(".php");
require("OrderbackFinsh.php");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我要訂票</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/orderback4.css" type="text/css" />
</head>

<body>
    <form method="post" action="OrderFinshController" >
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="Index.php"><img src="images/cybus.png" /></a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                             <a class="active" href="Index.php">查詢及訂票</a>
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
                                    
                                    <div class="marginB"><span>訂票姓名:</span><?php echo $oid['clientName'];?></div>
                                    <div class="marginB"><span>身分證字號:</span><?php echo $oid['clientId'];?></div>
                                    <div class="marginB"><span>電話:</span><?php echo $oid['clientPhone'];?></div>
                                    <div class="marginB"><span>票種:</span><?php echo $oid['type'];?></div>
                                    <div class="marginB"><span>張數:</span><?php echo $oid['number'];?></div>
        
                                    <div><span class="f">--去程:<?php echo $oid['start'];?> - <?php echo $oid['end'];?></span></div>
                                    <div class="marginc"><span> </span></div>
                                    <!--<div class="marginB"><span>起站:</span></div>-->
                                    <!--<div class="marginB"><span>迄站:</span></div>-->
                                    <div class="marginB"><span>乘車日期:</span><?php echo $oid['date'];?></div>
                                    <div class="marginB"><span>乘車時間:</span><?php echo substr($oid['time'],0,-3);?></div>
                                    <div class="marginB"><span>座位:</span><?php echo $oid['seat'];?></div>
                                    <div><span  class="f">--回程:<?php echo $oid2['start'];?> - <?php echo $oid2['end'];?></span></div>
                                    <div class="marginc"><span> </span></div>
                                    <!--<div class="marginB"><span>起站:</span></div>-->
                                    <!--<div class="marginB"><span>迄站:</span></div>-->
                                    <div class="marginB"><span>乘車日期:</span><?php echo $oid2['date'];?></div>
                                    <div class="marginB"><span>乘車時間:</span><?php echo substr($oid2['time'],0,-3);?></div>
                                    <div class="marginB"><span>座位:</span><?php echo $oid2['seat'];?></div>
                                    <div class="marginB"><span>訂票時間:</span><?php echo $oid['orderTime'];?></div>
                                    <div class="marginB"><span>總共金額:</span><?php echo $oid['total'];?></div>
                                    <div>------------------------------------------------------</div>
                                    <div class="marginB" ><span style="color:red;">取票代碼:</span><?php echo $oid['ticrand'];?></div>
                                  <?php //}?>
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
?>