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
$name=$_POST['name'];
$regno=$_POST['regno'];
$course=$_POST['course'];
$totalbilled=$_POST['totalbilled'];
$totalpaid=$_POST['totalpaid'];
$balance=$_POST['balance'];
//$phonenumber=$_POST['phonenumber'];
//$postaddress=$_POST['postaddress'];
//$emailaddress=$_POST['emailaddress'];
//$kcseindexno=$_POST['kcseindexno'];
$sql="INSERT INTO fee(name,regno,course,totalbilled,totalpaid,balance) 
VALUES(:name,:regno,:course,:totalbilled,:totalpaid,:balance)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':regno',$regno,PDO::PARAM_STR);
$query->bindParam(':course',$course, PDO::PARAM_STR);
$query->bindParam(':totalbilled',$totalbilled, PDO::PARAM_STR);
$query->bindParam(':totalpaid',$totalpaid, PDO::PARAM_STR);
$query->bindParam(':balance',$balance, PDO::PARAM_STR);
//$query->bindParam(':phonenumber',$phonenumber, PDO::PARAM_STR);
//$query->bindParam(':postaddress',$postaddress, PDO::PARAM_STR);
//$query->bindParam(':emailaddress',$emailaddress, PDO::PARAM_STR);
//$query->bindParam(':kcseindexno',$kcseindexno, PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Successfully Paid Fees";
}
else 
{
$error="Something Went Wrong. Please Try Again";
}

}


	?>
<!DOCTYPE html>
<head>
<title>Spu | Finance</title>
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
                  Student Fee Payment Panel
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                            <form method="post" action="" name="register-student" class="form-horizontal" >
          <div class="form-group">
          <label class="col-sm-4 control-label">Name</label>
          <input type="text" name="name" id="name"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-4 control-label">Admission Number</label>
          <input type="text" name="regno" id="refno"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-4 control-label">Course</label>
          <input type="text" name="course" id="course"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Total Billed</label>
          <input type="text" name="totalbilled" id="totalbilled"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Total Paid</label>
          <input type="text" name="totalpaid" id="totalpaid"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Balance</label>
          <input type="text" name="balance" id="balance"  class="form-control" required="required" >
          </div>
<!--
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
