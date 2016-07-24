<!DOCTYPE HTML>
<?php require_once("titles.php"); ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>乘車資訊</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="javascript/Index.js"></script>
</head>
<body>
    <form method="post" action="List.php">
        <div class="banner"></div>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="Index.php"><img src="images/cybus.png" /></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a class="active">查詢及訂票</a></li>
                        <li><a href="Search1.php">我的車票</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---------------------------------------------乘車資訊-------------------------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="SearchBox">
                        <h1>乘車資訊</h1>
                        <div class="SearchForm">

                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>起站</p>
                                </div>
                                <div class="FormRight">
                                    <select id="city1" name="city1">
                                    <option value = "台北">台北</option>
                                </select>
                                </div>
                            </div>

                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>迄站</p>
                                </div>
                                <div class="FormRight">
                                    <select id="city2" name="city2">
                                <option>台北</option>
                                <option>桃園</option>
                            </select>
                                </div>
                            </div>

                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>日期</p>
                                </div>
                                <div class="FormRight">
                                    <input name='orderdate' id="orderdate" type="text" class="datenowpicker" require_onced="require_onced" />
                                </div>
                            </div>
                            <div class="FormOne">
                                <div class="FormLeft">
                                    <p>時間</p>
                                </div>
                                <div class="FormRightHalf">
                                    <input name='ordertime1' id="ordertime1" type="text" class="timepicker" />
                                </div>
                                <div class="FormRightHalf">
                                    <input name='ordertime2' id="ordertime2" type="text" class="timepicker" />
                                </div>
                            </div>
                            <div class="FormOneBtn">
                                <div class="FormBtn">
                                    <input type="button" value="查詢" id="btnok" name="btnok" />
                                </div>
                                <div class="FormBtn">
                                    <input type="reset" name="reset" value="清除重填" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------最新消息-------------------------------------------------->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="SearchBox">
                        <h1>最新消息</h1>
                        <div class="SearchForm">
                            <table>
                                <?php foreach($data as $key => $value){  ?>
                                <tr>
                                    <td>
                                        <a class="news" href="News.php?nid=<?php echo $value['nid'];?>">
                                            <?php echo $value['title'];?>
                                        </a>
                                    </td>
                                    <td class="datec">
                                        <?php echo $value['date']?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php include('footer.php'); ?>
    </form>
</body>