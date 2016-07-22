<!DOCTYPE HTML>
<?php
$nid=$_GET['nid'];
if($nid==""){
    header("Refresh:0;url=Index.php");
}else {
    require("NewsController.php");
}
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
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="Index.php"><img src="images/cybus.png" /></a>
                </div>
                <div class="menu">
                <ul>
                    <li><a class="Index.php">查詢及訂票</a></li>
                    <li><a href="Search1.php">我的車票</a></li>
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
                            <div class="titleTxt">最新消息</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="OrderContent">
                                <div class="agreeTitle"><?php echo $value['title'];?></div>
                                <div class="agreeContent">
                                    <?php echo htmlspecialchars_decode($value['news']);?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>

</body>


</html>