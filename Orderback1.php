<!DOCTYPE HTML>

<?php
$oid= $_GET['oid'];

require("Orderback1Controller.php");


?>


    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>路線時刻</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/orderback1.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    </head>

    <body>
        <form method="post" action="Orderback2.php">
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
                            <a href="Search1.php">我的車票</a>
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

                            <div type="text" class="ba" value="">--請選擇回程日期--</div>
                            <div class="bas"><span>起站 :  <?php echo $end; ?></span></div>
                            <div class="bas"><span>迄站 :  <?php echo $start; ?></span></div>
                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>日期:</p>
                                </div>
                                <div class="FormRight">
                                    <input name='backdate' id="orderdate" type="text" class="datenowpicker" required="required" />
                                </div>
                            </div>
                            <div class="FormOneBtn">
                                <div class="FormBtn">
                                    <input type="button" value="確認" id="btnok" name="btnok" class="btn" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <input type="hidden" name="oid" value="<?php echo $oid; ?>"/>
                            <input type="hidden" name="backstart" value="<?php echo $end; ?>"/>
                            <input type="hidden" name="backend" value="<?php echo $start; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php include('footer.php'); ?>
        </form>
        <script>
            $("#btnok").click(function(){
                // $("#sid").val(sid);
                // $("#did").val(did);
                // alert(sid,did);
                $("form").submit();

            })
        </script>
    
    </body>


    </html>