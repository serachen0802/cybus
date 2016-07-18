<!DOCTYPE HTML>
<?php //require("seatController.php");?>
<?php
if($_POST['sid']==""){
   echo "<script>alert('請選擇車次');</script>";
    header("Refresh:0;url=Index.php");
    
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
    <form method="post" action="Order2.php" id='sub1'>
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
                            <div class="titleTxt">我要訂票</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="OrderContent">
                                <div class="agreeTitle">-訂票須知-</div>
                                <div class="agreeContent">
                                    
                                   <dt>一、訂票約定：</dt>
                                    <dd>於本網站訂票前，請務必詳閱訂票須知及相關約定。如訂票人非乘客本人，訂票人將居於
                                    代理人地位，亦即有義務充分告知乘客本人各行程訂票須知與限制約定，在點選同意後其法律
                                    效力及於乘客本人，本公司不接受事後乘客本人以不知或未瞭解等事由做為抗辯理由。<dd>
                                    <dt>二、開放網路訂票時間：</dt>
                                    <dd>網路訂票時間24 小時全天開放。</br>
                                    ※ 如遇連續假期，開放預售日期將另行公告。</br><dd>
                                    <dt>三、開放票種及可購買半票資格：</dt>
                                    <dd>(一) 網路開放訂票票種為全票、半票及軍優票。</br>
                                    (二) 可購買半票資格為：</br>
                                    1. 年滿 65 歲以上且持有身份證明之年長者(不論國籍)。</br>
                                    2. 持有身心障礙手冊者，及其陪同者得購買半票(以一位為限)。</br>
                                    3. 兒童規定說明：</br>
                                      (1).年齡滿 6 歲以上，未滿 12 歲之兒童。</br>
                                      (2).身高滿 115 公分且未滿 6 歲者經出示證件可視為免票；若滿 6 歲則應購買半票。</br>
                                      (3).身高滿 150 公分且未滿 12 歲者經出示證件可購買半票；若滿 12 歲則應購買全票。</br>
                                      (4).免費孩童由已購票者之旅客攜帶，最多以二人為限，但不得佔用其他座位，逾限仍應購買半票。</br><dd>
                                    <dt>四、訂票張數：</dt>
                                      <dd>每次訂購最多４張<dd>
                                    <dt>五、其他說明：</dt>
                                    <dd>(一) x本訂票系統僅暫時保留您所選擇的班次及座位，請於取票時間限制內完成取票，才算確認您的車票訂票完成。</br>
                                    (二) 車票票價為搭乘班次所屬時段票價。優惠時段表請參照「最新訊息‧優惠活動」</br>
                                    (三) 網路訂票預訂班次，現場窗口無法登入網頁協助更改班次時刻和乘車區間，</br>
                                    　　必須先取消訂票。</br>
                                    (四) 若欲更改已購買之車票班次，請至本公司全省各電腦連線場站售票窗口辦理。</br>
                                    (五) 票證為無記名有價票券，請妥為保管，如發生遺失、破損或無法辦識等情形，恕不重新補發，不便之處，敬請見諒。</br><dd>
                                    <dt>六、取消訂票：</dt>
                                        <dd>請利用查詢功能查詢確認後方可取消訂票。</br><dd>


                                    
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