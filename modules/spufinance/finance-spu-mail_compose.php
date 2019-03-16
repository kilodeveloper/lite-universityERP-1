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
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$bcc=$_POST['bcc'];
$cc=$_POST['cc'];
$subject=$_POST['subject'];
$content=$_POST['content'];
$sql="INSERT INTO mail(sender,receiver,bcc,cc,subject,content) VALUES(:sender,:receiver,:bcc,:cc,:subject,:content)";
$query = $dbh->prepare($sql);
$query->bindParam(':sender',$sender,PDO::PARAM_STR);
$query->bindParam(':receiver',$receiver,PDO::PARAM_STR);
$query->bindParam(':bcc',$bcc,PDO::PARAM_STR);
$query->bindParam(':cc',$cc,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':content',$content,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Mail Send";
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
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="shortcut icon" href="images/logo.png" />
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
 <link href="css/minimal.css" rel="stylesheet">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
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
		<!-- page start-->
		<div class="mail-w3agile">
        <div class="row">
            
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
        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
            <div class="col-sm-9 mail-w3agile">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                    
                       <h4 class="gen-case"> Compose Mail
                           <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search Mail">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body">
             
                    <form method="post" action="" name="register-student" class="form-horizontal" >
          <div class="form-group">
          <label class="col-sm-2 control-label">From: </label>
          <input type="email" name="sender" id="sender"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-2 control-label">To: </label>
          <input type="email" name="receiver" id="receiver"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-2 control-label">CC</label>
          <input type="email" name="cc" id="cc"  class="form-control"  >
          </div>

          <div class="form-group">
          <label class="col-sm-2 control-label">BCC</label>
          <input type="email" name="bcc" id="bcc"  class="form-control"  >
          </div>

          <div class="form-group">
          <label class="col-sm-2 control-label">Subject</label>
          <input type="text" name="subject" id="subject"  class="form-control" required="required" >
          </div>

          <div class="form-group">

          <textarea type="text" name="content" id="content" class="wysihtml5 form-control" rows="9">Content</textarea>
          
          </div>

          <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value="Sent Mail"class="btn btn-success mr-2 ">
          </div>
          </form>

                            </form>
                        </div>
                    </div>
                
                </section>
            </div>
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
<? }?>