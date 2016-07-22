<!DOCTYPE HTML>
<?php require("Order2Controller.php");?>


<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我要訂票</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/order2.css" type="text/css" />
</head>

<body>
    <form method="post" action="Order3.php">
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
                        <div class="DataContent">
                            <div class="ImTitle">訂票資訊</div>
                            <div class="ImOne">
                                
                                <?php foreach($data as $key => $value){?>
                                
                                <label>起迄站：</label>
                                <label> <?php echo $value['start']; ?> - <?php echo $value['end']?></label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>日期：</label><?php echo $value['date']; ?>
                            </div>
                            <div class="ImOne">
                                <label>時間：</label><?php echo substr($value['time'],0,-3);?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>票種：</label>
                                <select id="TicketTypeSelect" name="price">
                                    <option value="<?php echo $value['onePrice']; ?>">全票</option>
                                    <option value="<?php echo $value['halfFare']; ?>">半票</option>
                                    <option value="<?php echo $value['backAndForth']; ?>">來回票</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>票價：</label>
                                <span id="priceTxt"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>張數：</label>
                                <select id="TicketNumSelect" name="num">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne TotalPrice">
                                <label>總金額：</label>
                                <span id="TotalPrice" ></span>
                            </div>
                            <div class="ImOne SubmitBtn">
                                <input type="submit" class="btn" value="確認送出" />
                            </div>
                            <?php }?>
                            <input type="hidden" id='sid' name="sid" value="<?php echo $_POST['sid'];?>"/>
                            <input type="hidden" id='did' name="did" value="<?php echo $_POST['did'];?>"/>
                            <input type="hidden" id='name' name="name" value="<?php echo $_POST['name'];?>"/>
                            <input type="hidden" id='clientId' name="clientId" value="<?php echo $_POST['clientId'];?>"/>
                            <input type="hidden" id='phone' name="phone" value="<?php echo $_POST['phone'];?>"/>
                            <!--<input type="hidden" id='total' name="total"/>-->
                            <input type="hidden" name="time" value='<?php echo substr($value['time'],0,-3);?>'/>
                            <input type="hidden" id='date' name="date" value="<?php echo $value['date']; ?>"/>
                            <input type="hidden" id='start' name="start" value="<?php echo $value['start']; ?>"/>
                            <input type="hidden" id='end' name="end" value="<?php echo $value['end']; ?>"/>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <?php include('footer.php'); ?>
    
    <script type="text/javascript">
        $(function(){
            $("#TicketTypeSelect").change(function(){
                var value = $(this).val();
                // text放置內文
                $("#priceTxt").text(value);
                CalTotalPrice();
            }).trigger("change");
            
            $("#TicketNumSelect").change(function(){
                CalTotalPrice();
            });
        });
        
        function CalTotalPrice() {
            var Num = $("#TicketNumSelect").val();
            var Price = $("#TicketTypeSelect").val();
            var TotalPrice = parseInt(Num) * parseInt(Price);
            $("#TotalPrice").text(TotalPrice);
            $("#total").val(TotalPrice);
        }
    </script>
    </form>
</body>
</html>