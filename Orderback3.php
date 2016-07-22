<!DOCTYPE HTML>
<?php require("Orderback3Controller.php");?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>我要訂票</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/order3.css" type="text/css" />
</head>

<body>
    <form method="post" action="Orderback4Controller.php">
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
            <?php foreach($data as $key => $value){?>
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <div class="DataContent">
                            <div class="ImTitle">訂票資訊</div>
                            <div class="ImOne">
                                <label>起迄站：</label>
                                <label><?php echo $value['start'];?> - <?php echo $value['end'];?></label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>日期：</label><?php echo $value['date'];?>
                            </div>
                            <div class="ImOne">
                                <label>時間：</label><?php echo substr($value['time'],0,-3);?>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>票種：</label>
                                <label >來回票-回程</label>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ImOne">
                                <label>張數：</label>
                                <label id="TicketNum" ><?php echo $TicketNumr;?></label>
                            </div>
                           
                            <div class="clearfix"></div>
                        </div>
                        <?php }?>
                        <div class="SeatContent">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="SeatHead">車</div>
                                    <div class="SeatHead">頭</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="3">3</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="2">2</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="1">1</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="6">6</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="5">5</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="4">4</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="9">9</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="8">8</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="7">7</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="12">12</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="11">11</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="10">10</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="15">15</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="14">14</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="13">13</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="17">17</div>
                                    </div>
                                    <div class="SeatDiv"></div>
                                    <div class="SeatDiv"></div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="16">16</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="20">20</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="19">19</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="18">18</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="23">23</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="22">22</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="21">21</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="26">26</div>
                                    </div>
                                    <div class="SeatDiv">
                                        
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="25">25</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="24">24</div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="30">30</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="29">29</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="28">28</div>
                                    </div>
                                    <div class="SeatDiv">
                                        <div class="SeatBlock" id="27">27</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SubmitBtn">
                            <input type="button" class="btn" id="btnsub" value="確認送出" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id='sid' name="sid" value="<?php echo $_POST['sid'];?>"/>
    <input type="hidden" id='did' name="did" value="<?php echo $_POST['did'];?>"/>
    <input type="hidden" id="nnum" name="nnum" value="<?php echo $res1 ?>"/>
    <input type="hidden" id="snum" name="snum" value=""/>
    <input type="hidden" id='oid' name="oid" value="<?php echo $_POST['oid'];?>"/>
    <input type="hidden" id="TicketNum" name="TicketNum"value="<?php echo $TicketNumr;?>"/>

    
    <?php include('footer.php'); ?>
    
    <script type="text/javascript">
        $(function (){
            
            
           $(".SeatBlock").click(function(){
               if ($(this).hasClass("NoSeat")) {
                   return;
               } else if ($(this).hasClass("Seating")) {
                   $(this).removeClass("Seating");
               } else {
                   var Num = parseInt($("#TicketNum").text());//轉成int
                   var SeatingNum = 0;//已經選取的座位
                   $(".SeatBlock").each(function(){
                       //使用each 將seatblock跑過
                       if ($(this).hasClass("Seating")) {
                           SeatingNum++;
                       }
                   });
                   
                   if (SeatingNum == Num) {
                       return;
                   }
                   else {
                        $(this).addClass("Seating");
                   }
               }
           }); 
           
           $("#btnsub").click(function(){
               
                var snum = [];
                var Num = parseInt($("#TicketNum").text());
                
                $(".SeatBlock").each(function(){
                    if ($(this).hasClass("Seating")) {
                        var id = $(this).attr("id");
                        snum.push(id);
                        // $("form").submit();
                    };
                });
                
                if (snum.length < Num){
                    alert("請選擇座位");
                } else {
                    $("#snum").val(snum);
                    $("form").submit();
                }
           });
           

           $(".SeatBlock").each(function() {
              var noid = $(this).attr("id");  
              var nnum = $("#nnum").val(); // "1, 3, 19, 22"
              var nnumArray = nnum.split(','); // 將字串轉成陣列 [1, 3, 19, 22]
              if (nnumArray.indexOf(noid) != -1) {//-1即為找不到
                   $(this).addClass("NoSeat"); 
              }
            //   alert(nnum);                               
            //   var IsNoSeat = nnum.includes(noid);   
            //   if (IsNoSeat) {
            //   }
           });
        });
    </script>
</body>
</form>
</html>