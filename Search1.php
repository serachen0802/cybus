<!DOCTYPE HTML>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>路線時刻</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/search.css" type="text/css" />
</head>

<body>
    <form method="post" action="Search2.php">
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="Index.php"><img src="images/cybus.png" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a  href="Index.php">查詢及訂票</a>
                    </li>
                  
                    <li>
                        <a class="active">我的車票</a>
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
                        <div class="titleTxt">查詢我的車票</div>
                    </div>
                </div>
            </div>
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="SearchBox">
                                    <h1>查詢車票</h1>
                                <div class="SearchForm">
                                <div>身分證字號</div>
                                    <input type="text" name="clientId" required="required"/>
                                <div>電話</div>
                                    <input type="text" name="clientPhone" required="required"/>
                                <div>
                                    <input type ="submit" name ="btnok" class="btn sear" value ="確認"/>
                                </div>    
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     

    
    </form>
    <?php include('footer.php'); ?>
</body>


</html>