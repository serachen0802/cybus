<!DOCTYPE HTML>
<?php
require("Search2Controller.php");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>路線時刻</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/search2.css" type="text/css" />
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="Index.php"><img src="images/cybus.png" /></a>
            </div>
            <div class="menu">
                 <ul>
                    <li><a  href="Index.php">查詢及訂票</a></li>
                    <li><a class="active">我的車票</a></li>
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
                                <div class="back">
                                <input type="button" onclick="history.back()" class="btn" value="回上頁重新查詢"/>
                                </div>
                                <tr>
                                    <th>起站</th>
                                    <th>迄站</th>
                                    <th>日期</th>
                                    <th>發車時間</th>
                                    <th>票種</th>
                                    <th>張數</th>
                                    <th>座位</th>
                                    <th>總金額</th>
                                    <th>取票代碼</th>
                                </tr>
                            </thead>
                            <tbody>
                                

                                <?php 
                                    $Num = count($data);
                                    if ($Num == 0) {
                                        echo "<script>alert('查無資料,請重新查詢!');</script>";
                                        header("Refresh:0;url=Search1.php");
                                    }
                                    else {
                                        foreach($data as $key => $value)
                                        {
                                        $time1 = strtotime ( $value['date'].$value['time'] );
                                        $time2 = strtotime(date('Y-m-d H:i:s',time()+8*60*60));
                                        if ($time1 > $time2) {
                                ?>
                                <tr id="<?php echo $value['oid'] ?>">
                                    <td><?php echo $value['start'];?></td>
                                    <td><?php echo $value['end'];?></td>
                                    <td><?php echo $value['date'];?></td>
                                    <td><?php echo substr($value['time'],0,-3);?></td>
                                    <td><?php echo $value['type'];?></td>
                                    <td><?php echo $value['number']?></td>
                                    <td><?php echo $value['seat']?></td>
                                    <td><?php echo $value['total']?></td>
                                    <td><?php echo $value['ticrand'] ?></td>
                                    <td>
                                    <td>
                                        <button type="button" class="btn" onclick="mysub(<?php echo $value['oid'] ?>)">取消</button>
                                    </td>
                                </tr>
                                <?php }}} ?>
                               
                            </tbody>
                        </table>
<?php include('footer.php'); ?>
    <script type="text/javascript">
        function mysub(oid){
            var r = confirm("是否確定取消?");
            if (r == true) {
                 $.ajax({
                        url: 'SearchController.php',
                        type: 'POST',
                        data: {
                            oid: oid
                        },
                        error: function(xhr) {
                            alert(xhr.status);
                        },
                        success: function(response) {
                          $("tr#" + oid).remove();  
                        }
                    });
            } 
        }
    </script>
</body>
</html>