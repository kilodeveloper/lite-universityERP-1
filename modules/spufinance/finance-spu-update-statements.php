<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==1)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$refnumber=$_POST['refnumber'];
//$posdate=$_POST['posdate'];
$description=$_POST['description'];
$debitamt=$_POST['debitamt'];
$creditamt=$_POST['creditamt'];
$balance=$_POST['balance'];
//$phonenumber=$_POST['phonenumber'];
//$postaddress=$_POST['postaddress'];
//$emailaddress=$_POST['emailaddress'];
//$kcseindexno=$_POST['kcseindexno'];
$sql="INSERT INTO statement(refnumber,description,debitamt,creditamt,balance) VALUES(:refnumber,:description,:debitamt,:creditamt,:balance)";
$query = $dbh->prepare($sql);
$query->bindParam(':refnumber',$refnumber,PDO::PARAM_STR);
//$query->bindParam(':posdate',$posdate,PDO::PARAM_STR);
$query->bindParam(':description',$description, PDO::PARAM_STR);
$query->bindParam(':debitamt',$debitamt, PDO::PARAM_STR);
$query->bindParam(':creditamt',$creditamt, PDO::PARAM_STR);
$query->bindParam(':balance',$balance, PDO::PARAM_STR);
//$query->bindParam(':phonenumber',$phonenumber, PDO::PARAM_STR);
//$query->bindParam(':postaddress',$postaddress, PDO::PARAM_STR);
//$query->bindParam(':emailaddress',$emailaddress, PDO::PARAM_STR);
//$query->bindParam(':kcseindexno',$kcseindexno, PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg=" Statement  Successfully Registered";
}
else 
{
$error="Something Went Wrong. Please Try Again";
}

}


	?>
<!DOCTYPE html>
<head>
<title>Spu | Finance </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="SPU  web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="shortcut icon" href="images/logo.png" />
<!--//bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!--font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<link rel="stylesheet" href="css/monthly.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

<section id="container">
<!--header start-->
<?php include("includes/header.php")?>
<!--header end-->
<!--sidebar start-->
<?php include("includes/navbar.php")?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        Statement Registration Panel
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                            <form method="post" action="" name="register-student" class="form-horizontal" >
          <div class="form-group">
          <label class="col-sm-4 control-label">Refrence Number </label>
          <input type="text" name="refnumber" id="refnumber"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-4 control-label">Description</label>
          <input type="text" name="description" id="description"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-4 control-label">Debit Amount</label>
          <input type="text" name="debitamt" id="debitamt"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Credit Amount</label>
          <input type="text" name="creditamt" id="creditamt"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Balance</label>
          <input type="text" name="balance" id="balance"  class="form-control" required="required" >
          </div>
<!--
          <div class="form-group">
          <label class="col-sm-4 control-label">Course</label>
          <input type="text" name="course" id="course"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Phone Number</label>
          <input type="text" name="phonenumber" id="phonenumber"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Postal Address</label>
          <input type="text" name="postaddress" id="postaddress"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Email Address</label>
          <input type="text" name="emailaddress" id="emailaddress"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">KCSE Index Number</label>
          <input type="text" name="kcseindexno" id="kcseindexno"  class="form-control" required="required" >
          </div> -->

          
          
          <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value="Submit"class="btn btn-success mr-2 ">
          </div>
          </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <?php include("includes/footer.php")?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
<?php } ?>
