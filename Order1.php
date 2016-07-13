<!DOCTYPE HTML>
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
    <form method="post" action="Order2.php" id='sub1'>
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
                                <div class="agreeTitle">訂票須知</div>
                                <div class="agreeContent">
                                    1. 本系統開放時間：每日00:01至24:00止，例行維護除外。</br>
                                    2. 本系統提供預訂當日起15天內車票(含回程訂位)；例如：1月1日可預訂1月1日至1月15日之車票。 </br>
                                    如遇特殊假日或連續假期，開放預訂日期及時段將另行公告。 </br>
                                    如預訂當日及次日之兩日內班次，於訂位成功後，僅保留一小時網路線上付款機制，逾時未付款成功， </br>
                                    系統即取消訂單並釋出座位。 </br>
                                    3. 實施路線：「台北─台中/朝馬/水湳 」、「台北─南投/中興/草屯」、「台北─埔里」、 </br>
                                    「台北─日月潭」、「台北─彰化/員林/北斗」、「台北─嘉義/新營」、「台北/林口─台南」、 </br>
                                    「台北/林口/─高雄」、「台北/林口/─屏東」、「台北─西螺」、「台北轉運站/林口─苗栗」、 </br>
                                    「台北轉運站/林口─竹南/頭份」、「台中/水湳─基隆」 、「南投/中興/草屯─基隆」、 </br>
                                    「台中/水湳/朝馬─板橋」、「台中/水湳─南崁/桃園」、「台中/水湳－/中壢民族／中壢」、 </br>
                                    「台中／水湳－清大/新竹」、 「桃園/中壢─高雄」、「台中/朝馬─嘉義」、「台中/朝馬─台南」、 </br>
                                    「台中/朝馬─高雄」、 「台中/朝馬─屏東」。 </br>
                                    4. 訂票張數：每筆訂購最多四人次，每一身分證號最多能網路訂票三次。 </br>
                                    5. 開放票種：全票(優惠票、促銷票)、半票（敬老、孩童、愛心)、來回票。 </br>
                                    6. 全票含促銷票、優惠票，以公告時段區分票價。 </br>
                                    7. 可購買半票資格： </br>
                                    o 年滿65歲以上，持有國民身分證之年長者。 </br>
                                    o 持有身心障礙手冊者及其陪同者(以一位為限)。 </br>
                                    o 身高115公分至150公分之孩童或6歲以上未滿12歲之孩童，持有身份證明者。 </br>
                                    8. 免購票孩童：未滿六歲之孩童，得免購票且由成人陪同搭乘；每位成年旅客攜同搭乘之免票孩童以2人 </br>
                                    為限，且不得佔位。 </br>
                                    9. 搭車地點：以票面上之「起站」為限，「中途站恕不保留座位」。 </br>
                                    10.取票時間：以信用卡及金融卡線上付費者，「請持身份証明證件(有相片之證件)及取票聯」於已訂班次 </br>
                                    前10分鐘須完成取票。未完成線上付款者，請於預訂班車時間之兩日前須完成取票或選擇繼續線上付款。 </br>
                                    例如：預約六月三十日之班次者，須於六月廿八日前完成取票，逾時系統將自動取消並釋出 </br>
                                    座位，到站付款取票者，不提供班次前兩日之預訂。
                                </div>

                                <div class="agreeCheck">
                                    <input type="checkbox" name="checkbox" value='check' required="required">
                                    <label>請閱讀並勾選同意</label>
                                </div>
                                <div class="FormBlock">
                                    <div class="FormOne">
                                        <label>姓名</label>
                                        <input type="text" name="name" required="required"/>
                                    </div>
                                    <div class="FormOne">
                                        <label>身分證字號</label>
                                        <input type="text" name="clientId" required="required"/>
                                    </div>
                                    <div class="FormOne">
                                        <label>電話</label>
                                        <input type="text" name="phone" required="required"/>
                                    </div>
                                    <div class="SubmitBtn">
                                        <input type="submit" class="btn"  value="送出" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                    <!--</form>-->
                                <!--<form id='sub2' method="post" action="Order2Controller.php">-->
                                    <input type="hidden" id='sid' name="sid" value="<?php echo $_POST['sid'];?>"/>
                                    <input type="hidden" id='did' name="did" value="<?php echo $_POST['did'];?>"/>
                                </form>
                               
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
</body>


</html>