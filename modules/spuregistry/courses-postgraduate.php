<?php
session_start();
error_reporting(0);
include('partials/config.php');
if(strlen($_SESSION['alogin'])==1)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$name=$_POST['name'];
$code=$_POST['code'];
$dept=$_POST['dept'];
$faculty=$_POST['faculty'];
//$course=$_POST['course'];
//$phonenumber=$_POST['phonenumber'];
//$postaddress=$_POST['postaddress'];
//$emailaddress=$_POST['emailaddress'];
//$programe=$_POST['programme'];
//$semester=$_POST['semester'];
$sql="INSERT INTO courses(name,code,dept,faculty) VALUES(:name,:code,:dept,:faculty)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':code',$code,PDO::PARAM_STR);
//$query->bindParam(':password',$password, PDO::PARAM_STR);
$query->bindParam(':dept',$dept, PDO::PARAM_STR);
$query->bindParam(':faculty',$faculty, PDO::PARAM_STR);
//$query->bindParam(':course',$course, PDO::PARAM_STR);
//$query->bindParam(':phonenumber',$phonenumber, PDO::PARAM_STR);
//$query->bindParam(':postaddress',$postaddress, PDO::PARAM_STR);
//$query->bindParam(':emailaddress',$emailaddress, PDO::PARAM_STR);
//$query->bindParam(':programme',$programe, PDO::PARAM_STR);
//$query->bindParam(':semester',$semester, PDO::PARAM_STR);
//$query->bindParam(':programme',$programe, PDO::PARAM_STR);


$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="PostGraduate Course Successfully Added";
}
else 
{
$error="Something Went Wrong. Please Try Again";
}

}


	?>
<!DOCTYPE HTML>
<html>
<head>
<head>
<title>SPU | Registry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link rel="shortcut icon" href="images/logo.png" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
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
</head> 

<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<?php include("partials/navbar.php")?>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<?php include ("partials/header.php")?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">PostGraduate Course Addition Panel</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Fill all Course Details :</h4>
						</div>
						<div class="form-body">
                        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
							<form method="post" action="" name="register-student" class="form-horizontal" >
          <div class="form-group">
          <label class="col-sm-4 control-label">Course Name </label>
          <input type="text" name="name" id="name"  class="form-control" required="required" >
          </div>
          
          <div class="form-group">
          <label class="col-sm-4 control-label"> Course Code </label>
          <input type="text" name="code" id="code"  class="form-control" required="required" >
          </div>
         

          <div class="form-group">
          <label class="col-sm-4 control-label">Course Department</label>
          <input type="text" name="dept" id="dept"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Course Faculty</label>
          <input type="text" name="faculty" id="faculty"  class="form-control" required="required" >
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
          <label class="col-sm-4 control-label">Programme</label>
          <input type="text" name="programme" id="programme"  class="form-control" required="required" >
          </div>

          <div class="form-group">
          <label class="col-sm-4 control-label">Semester Joined</label>
          <input type="text" name="semester" id="semester"  class="form-control" required="required" >
          </div>-->

          <div class="col-sm-6 col-sm-offset-4">
          <input type="submit" name="submit" Value="Submit Form"class="btn btn-success mr-2 ">
          </div>
          </form>
          
					</div>
                    </div>
                    </div>
                
				</div>
			</div>
		</div>
		<!--footer-->
		<?php include ("partials/footer.php")?>
        <!--//footer-->
	</div>
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   
</body>
</html>
        <?php }?>