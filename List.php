<!DOCTYPE HTML>
<?php require("ListController.php");?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>路線時刻</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/list.css" type="text/css" />
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="Index.php"><img src="images/cybus.png" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a class="active" href="Index.php">乘車資訊</a>
                    </li>
                    <li>
                        <a href="Order.php">我要訂票</a>
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
                        <div class="titleTxt">路線時刻</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>起站</th>
                                    <th>迄站</th>
                                    <th>日期</th>
                                    <th>發車時間</th>
                                    <th>全票</th>
                                    <th>半票</th>
                                    <th>來回票</th>
                                    <th>剩餘座位數</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                            $Num = count($data);
                            if ($Num == 0) {
                                echo "<script>alert('查無資料,請重新查詢!');</script>";
                                header("Refresh:0;url=Index.php");
                            }
                            else {
                                foreach($data as $key => $value)
                                {?>
                                <tr>
                                    <td><?php echo $value['start'];?></td>
                                    <td><?php echo $value['end'];?></td>
                                    <td><?php echo $value['date']?></td>
                                    <td><?php echo substr($value['time'],0,-3);?></td>
                                    <td><?php echo $value['onePrice']?></td>
                                    <td><?php echo $value['halfFare']?></td>
                                    <td><?php echo $value['backAndForth']?></td>
                                    <td>22</td>
                                    <td><button type="button" class="btn" onclick="SubmitForm(<?php echo $value['sid']?>,<?php echo $value['did'];?>)">訂票</button></td>
                                </tr>
                                <?php } }?>
                            </tbody>
                        </table>
                        <form method="post" action="Order1.php">
                            <input type="hidden" id="sid" name="sid" />
                            <input type="hidden" id="did" name="did" />
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <script>
        function SubmitForm(sid, did) {
            $("#sid").val(sid);
            $("#did").val(did);
             
            // alert(sid,did);
            $("form").submit();
        }
    </script>
</body>


</html>