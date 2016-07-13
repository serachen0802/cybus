<!DOCTYPE HTML>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>乘車資訊</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
        <link rel="stylesheet" href="css/index.css" type="text/css" />
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
                            <li>
                                <a class="active">乘車資訊</a>
                            </li>
                            <li>
                                <a href="Order2.php">我要訂票</a>
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
                                            <option value="台北">台北</option>
                                            <!--<option value="桃園">桃園</option>-->
                                            <!--<option value="台中">台中</option>-->
                                            <!--<option value="新竹">新竹</option>-->
                                            <!--<option value="高雄">高雄</option>-->
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
                                            <!--<option>台中</option>-->
                                            <!--<option>台南</option>-->
                                            <!--<option>高雄</option>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="FormOne">
                                    <div class="FormLeft">
                                        <p>日期</p>
                                    </div>
                                    <div class="FormRight">
                                        <input name='orderdate' id="orderdate" type="text" class="datenowpicker" required="required" />
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
                    <div class="col-md-6 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>

            <?php include('footer.php'); ?>

        </form>

        <script>
            //抓取起站所有城市
            $(function() {
                $("#btnok").click(function() {
                    var now = new Date();
                    var orderdate = new Date($("#orderdate").val());
                    
                    if (orderdate < now) {
                        alert("請輸入正確日期");
                    }
                    else if ($("#ordertime1").val() != "" && $("#ordertime2").val() !="" ) {
                        var ordertime1 = new Date(now.toDateString() + " " + $("#ordertime1").val() );
                        var ordertime2 = new Date(now.toDateString() + " " + $("#ordertime2").val() );
                        if (ordertime1 > ordertime2) {
                            // alert(("#ordertime2").val());
                            alert("請輸入正確時間範圍");
                        }
                        else {
                            $("form").submit();
                            // alert(("#ordertime2").val);
                        }
                    }
                    else {
                        $("form").submit();
                    }


                })

                $.ajax({
                        url: 'city1.php',
                        type: 'POST',
                        data: {
                            // city1: Val
                        },
                        datatype: 'json',
                        error: function(xhr) {
                            alert(xhr.status);
                        },
                        success: function(response) {
                            $('#city1').html(response);

                        }
                    })
                    // }).trigger('change');

                //抓取相對應的城市

                $("#city1").change(function() {
                    var Val = $(this).val();
                    $.ajax({
                        url: 'city2.php',
                        type: 'POST',
                        data: {
                            city1: Val
                        },
                        // datatype: 'json',
                        error: function(xhr) {
                            alert(xhr.status);
                        },
                        success: function(response) {
                            $('#city2').html(response);

                        }
                    })
                }).trigger('change');
            });
        </script>
    </body>