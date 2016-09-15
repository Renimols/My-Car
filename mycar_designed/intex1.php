<?php
session_start();
if(isset($_POST['submit12']))
{

 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mycar') or die(mysql_error());
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
 if($name!=''&&$pwd!='')
 {


   $query=mysql_query("select * from mst_user where email='".$name."' and pass='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);

 if($res)
   {

    $_SESSION['login']=$name;
    header('location:home1.php');

   }
   else
   {
   echo "<script type='text/javascript'>alert('invalid username or password!')</script>";
 }
 }

 else
 {
echo "<script type='text/javascript'>alert('Enter both username and password!')</script>";

 }
}

?>




<!DOCTYPE html>
<html>
<head>
<title>my car</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MY Car, Find new car,latest car,Find used cars" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/bg4.jpg", "images/bg2.jpg", "images/bg3.jpg","images/bg1.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		   <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				        <div id="sidebar">
						     <h4 class="menu">Menu</h4>
						          <ul>
							    <li><a href="upcoming.html">New Cars  </a></li>
							    <li><a href="used.html">Used Cars </a></li>
							    <li><a href="news.html">News And Reviews</a></li>
							    <li><a href="accessories.html"><span>Car Accessories</span></a></li>
									<li><a href="tips.html"><span>Tips and Advices</span></a></li>
									<li class="last"><a href="help.html"><span>Privacy Policy</span></a></li>
											</ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible');
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->


					</div>
				  <!-- //header-left -->
		             <div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input name="name" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
					    <ul>

							<li>
							<a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li>
<li><button id="showRight" class="navig"><img src="images/contact1.png" style="height:15px;width:15px;"></img></button>

							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
								<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="#" method="post"><a href="admin/index.php"><font color="red">admin login</font></a>
									<input type="text" name="name" class="email" placeholder="Email" required=""/>
									<input type="password" name="pwd" class="password" placeholder="Password" required=""/>
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me</label>
								<div class="login-bottom">
									<ul>
										<li>
												<div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><button class="loginbutton" type="button">SIGNUP</button></a></div>
											</li>
										<li>
												<input type="submit" value="LOGIN" name="submit12"/>
											</form>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div>
									<!--//forgot password details-->
								<ul>
									<li>
										<a href="#">Forgot password?</a>
									</li>
								</ul>

							</div>
								<div class="clearfix"></div>

							</div>
							<div class="social-icons">
							<ul>
								<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
								<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
								<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
							</ul>
						</div>
							</div>
							</nav>
						</div>
				<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;

							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};

							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
						</ul>

					</div>

						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="intex1.php">My <span class="logo-sub">Car</span> </a></h1>
			    <h2><span>Exactly What</span> <span>You Dreamt Of! </span></h2>
				<p>Eye it – try it – buy it!</p>
			       <form action="gallery.php" method="post">
					<div class="search-two">
					<select name="option" id="country" onChange="change_country(this.value)" class="frm-field required"">
						<option value="null"><img src="images/rupee.png" alt=" " class="img-responsive" />Brands</option>
<?php
include("database.php");
$result = mysql_query("SELECT carmdel FROM car_details");
while($row = mysql_fetch_array($result))
{
echo"<option value='AX'>".$row['brand_name']."</option>";
}
?>

					</select>
				</div>
				<div class="section_room">
					<select name="price" id="country" onChange="change_country(this.value)" class="frm-field required">
						<option value="null"><img src="images/rupee.png" alt=" " class="img-responsive" /> Budget</option>

						<option value="null">0</option>
<?php
$result = mysql_query("SELECT price FROM car_details");
while($row = mysql_fetch_array($result))
{
echo"<option value='AX'>".$row['price']."</option>";
}
?>
					</select>
				</div>

					<input type="submit" value="Find Car" method="post">
					<div class="clearfix"></div>
				</form>
			</div>
				<!--//banner-info-->
		</div>
</div>

				<!-- //sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount one">
									<h3>Sign Up</h3>

								</div>
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="#" method="post">
									<input type="text" name="name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="email "class="email" placeholder="Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>

										  <input type="submit" value="SIGN UP" name="submit">

										</li>
									<div class="clearfix"></div>
								</ul>
								</div>
								</form>
<?php
extract($_POST);

if(isset($_POST['submit']))

{
$query="insert into mst_user(login,pass,email) values('$name','$password','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>


							</div>


						 </div>
						 <div class="social-icons">
									<ul>
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul>
									</div>

					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
				<div class="modal ab fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<div class="discount one">
									<h3>Please Tell Us Your City</h3>

								</div>
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top location">
								 <form action="#" method="post">
				                      <select id="country12" onChange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Amsterdam</option>
														<option value="city">Bahrain</option>
														<option value="city">Cannes</option>
														<option value="city">Dublin</option>
														<option value="city">Edinburgh</option>
														<option value="city">Florence</option>
														<option value="city">Georgia</option>
														<option value="city">Hungary</option>
														<option value="city">Hong Kong</option>
														<option value="city">Johannesburg</option>
														<option value="city">Kiev</option>
														<option value="city">London</option>
														<option value="city">Others...</option>
										</select>
								</form>
							     </div>


						 </div>


					</div>
				</div>
			</div>
			<!-- //location-->
<!--//banner-section-->
	<!--/featured_section-->
	<div class="featured_section_w3l">
		<div class="container">
		      <h3 class="tittle">FEATURED CARS</h3>
	               <div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">UpComing cars</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Popular</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Just Launched</a></li>

						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid"><?php
include("database.php");
$sel=mysql_query("select * from upcming where car_id=1");
while($arr=mysql_fetch_array($sel))
  {
     $i1=$arr['car_id'];
	$m1=$arr['carmdel'];
$p1=$arr['price'];
$d1=$arr['date'];
	








													echo'<img src="upcming/1.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m1;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p1;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d1;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="nameup1" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailup1" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitup1">

													</div>
												</form>

													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<?php
include("database.php");
$sel=mysql_query("select * from upcming where car_id=2");
while($arr=mysql_fetch_array($sel))
  {
     $i2=$arr['car_id'];
	$m2=$arr['carmdel'];
$p2=$arr['price'];
$d2=$arr['date'];
	








													echo'<img src="upcming/2.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m2;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p2;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d2;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="nameup2" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailup2" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitup2">

													</div>
												</form>
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from upcming where car_id=3");
while($arr=mysql_fetch_array($sel))
  {
     $i3=$arr['car_id'];
	$m3=$arr['carmdel'];
$p3=$arr['price'];
$d3=$arr['date'];
	








													echo'<img src="upcming/3.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m3;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p3;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d3;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="nameup3" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailup3" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitup3">

													</div>
												</form>

													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from ppular where car_id=1");
while($arr=mysql_fetch_array($sel))
  {
     $i11=$arr['car_id'];
	$m11=$arr['carmdel'];
$p11=$arr['price'];
$d11=$arr['date'];
	








													echo'<img src="ppular/1.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m11;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p11;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d11;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="My car"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="namepo1" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailpo1" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitpo1">

													</div>
												</form>

											</div>

												
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from ppular where car_id=2");
while($arr=mysql_fetch_array($sel))
  {
     $i12=$arr['car_id'];
	$m12=$arr['carmdel'];
$p12=$arr['price'];
$d12=$arr['date'];
	








													echo'<img src="ppular/2.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m12;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p12;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d12;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="My Car">  Check On-Road Price</h4>
											<div class="login-top sign-top"><form action="#" method="post">
													<input type="text" name="namepo2" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailpo2" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitpo2">

													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<?php
include("database.php");
$sel=mysql_query("select * from ppular where car_id=3");
while($arr=mysql_fetch_array($sel))
  {
     $i13=$arr['car_id'];
	$m13=$arr['carmdel'];
$p13=$arr['price'];
$d13=$arr['date'];
	








													echo'<img src="ppular/3.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m13;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p13;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d13;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="Catchy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top"><form action="#" method="post">
													<input type="text" name="namepo3" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailpo3" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitpo3">

													</div>
												</form></div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>

							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">

								<div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from launched where car_id=1");
while($arr=mysql_fetch_array($sel))
  {
     $i21=$arr['car_id'];
	$m21=$arr['carmdel'];
$p21=$arr['price'];
$d21=$arr['date'];
	








													echo'<img src="launched/1.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m21;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p21;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d21;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="My Car"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
												<form action="#" method="post">
													<input type="text" name="namela1" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailla1" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitla1">

													</div>
												</form></div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from launched where car_id=2");
while($arr=mysql_fetch_array($sel))
  {
     $i22=$arr['car_id'];
	$m22=$arr['carmdel'];
$p22=$arr['price'];
$d22=$arr['date'];
	








													echo'<img src="launched/2.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m22;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p22;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d22;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="My Car">  Check On-Road Price</h4>
											<div class="login-top sign-top"><form action="#" method="post">
													<input type="text" name="namela2" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailla2" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitla2">

													</div>
												</form></div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													
													<?php
include("database.php");
$sel=mysql_query("select * from launched where car_id=3");
while($arr=mysql_fetch_array($sel))
  {
     $i23=$arr['car_id'];
	$m23=$arr['carmdel'];
$p23=$arr['price'];
$d23=$arr['date'];
	








													echo'<img src="launched/3.jpg" alt="Catchy Carz">';?>
													
													<div class="car_description">
														 <h4><a href="single.html"><?php echo $m23;?></a></h4>
														 <div class="price"><span class="fa fa-rupee"></span><span class="font25"><?php echo $p23;?></span></div>
														 <p>Estimated Price</p>
														 <div class="date"><?php echo $d23;?></div>
														 <p>Expected Launch</p>
														</div>
														
												<?php }?>
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/rupee.png" alt="My Car">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											 <form action="#" method="post">
													<input type="text" name="namela3" class="name active" placeholder="Name" required=""/>
													<input type="text" name="emailla3" class="email" placeholder="Email" required=""/>
													
													
													<input type="submit" value="Done" name="submitla3">

													</div>
												</form></div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	<!--//featured_section-->
	<!--/select-cars-agile-->
	<div class="select-cars-agile">
	   <div class="container">
	         <div class="grid cars-main">
			  <div class="col-md-7 slide-show-w3l">
			     <!--//screen-gallery-->
				 <h3 class="tittle top">NEW CARS</h3>
				 <h6 class="sub">Great Prices. Great Vehicles. Great Service.</h6>
							<div class="car-view-slider">
					          <ul id="flexiselDemo">
							 <li>
								 <a href="upcoming.html"><img src="images/n2.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html">Ford Mustang GT 500</a></h3>
										<span>My Car</span>

									</div>
								 </a>

							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n1.jpeg" alt=""/>
								 <div class="caption">
										<h3><a href="upcoming.html">Acura TLX</a></h3>
										<span>My Car</span>

									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n3.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.html"> McLaren MP4-12c</a></h3>
										<span>My Car</span>

									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.html"><img src="images/n4.jpg" alt=""/>
									<div class="caption">
										<h3><a href="upcoming.html">BMW Z4</a></h3>
									<span>My Car</span>

									</div>
								 </a>
							 </li>
							</ul>
						</div>
						<!--//screen-gallery-->

					</div>
					<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used CarS at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="used.html"><img src="images/old2.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>MY<span>CAR</span></h4>


							</figcaption>
						</figure>
					  </div>
					  <div class="clearfix"> </div>
					   <div class="used-one second">
					     <figure class="effect-zoe">
							<a href="used.html"><img src="images/old1.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>MY<span>CAR</span></h4>

							</figcaption>
						</figure>
					  </div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	</div>
	<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
			  <form action="#" method="post">
                <h3>POST YOUR FEEDBACKS </h3>
			    <div class="best-hot">
                  <h5>Name</h5>
			      <input type="text" name="n" class="name active" placeholder="Name" required="">
                </div>
			    <div class="best-hot">
                  <h5>Email</h5>
			      <input type="text" name="e" class="email" placeholder="Email" required="">
                </div>
			    <div class="section_drop2">
                  <h5>Message</h5>
			      <textarea name="text" cols="35" rows="6"></textarea>
                </div>
			    <input type="submit" value="Write Now"name="sub">
              </form>
			</div>
		</div>
	</div>
</div>

<?php
include("database.php");
if(isset($_POST['sub']))
{
mysql_query("insert into fdbk values('$n','$e','$text')");
}
 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";




?>

	<!-- //bottom-banner -->
	<!-- /slider1 -->
			<div class="slider1">
		<div class="arrival-grids">
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/f1.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Mercedes-Benz C250 CDI</a></h3>
							<span>My car</span>

						</div>
					 </a>

				 </li>
				 <li>
					 <a href="single.html"><img src="images/f2.jpg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Audi A4 2.0 TDI</a></h3>
							<span>My car</span>

						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f3.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 500</a></h3>
							<span>My car</span>

						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f4.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">Ford Mustang GT 350</a></h3>
						<span>My car</span>

						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f7.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW M4</a></h3>
							<span>My car</span>

						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/f5.jpeg" alt=""/>
					 <div class="caption">
							<h3><a href="single.html">Ferrari F430</a></h3>
							<span>My car</span>

						</div>
					 </a>
				 </li>
				  <li>
					 <a href="single.html"><img src="images/f8.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.html">BMW X4 M Sport</a></h3>
							<span>My car</span>
					    </div>
					 </a>
				 </li>
				</ul>
		  </div>
	  </div>
	<!-- //slider -->
	<!-- Services -->
	<div class="updates-agile">
		<div class="container">
		      <h3 class="tittle">LATEST CAR UPDATES</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Car News</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">Expert Reviews</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="true">Videos</a></li>

						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates" aria-labelledby="updates-tab">
							 <div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/sty1.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>My <span>Car</span> </p>
													</div>
												</a>
											</div>

										</div>
										<div class="col-md-7 tab-info one">
										<h4><a href="story1.html">Skoda Kodiaq: All You Need To Know </a></h4>
											<p>Skoda has revealed its flagship and first-ever 7-seater SUV, the Kodiaq, in Berlin, Germany. The Kodiaq made its concept debut at the 2016 Geneva Motor Show and the production version has been teased a lot of times. The large Czech SUV is expected to hit European roads in early 2017, while its Indian launch will most likely happen around the festive season of 2017. Let us see what the 2017 Kodiaq has to offer in terms of design, features and mechanicals.</p>
										<a href="story1.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										<h4><a href="story2.html">India-bound: Honda Preparing To Unveil Mini-SUV </a></h4>
											<p>Honda has been a popular name when it comes to economy cars globally but the Japanese carmaker’s stock has been dwindling over the past few financial quarters. The manufacturer is thus planning to unveil a new seven-seater SUV (reportedly based on the HR-V) at the Philippine International Motor Show (PIMS) later this month in a bid to revive its fortunes. Developed at Honda’s Thailand research facility, the new SUV is set to be targeted at Asian markets, including India. In the country, Honda has generally played the wait-and-watch game and has
												therefore struggled to break the market in the wake of competition from the likes of Maruti Suzuki and Hyundai.</p>
											<a href="story2.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.html" title="Catchy Carz">
													<img src="images/sty2.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>My <span>Car</span> </p>
													</div>
												</a>
											</div>
										</div>

										<div class="clearfix"></div>
									</div>

								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="expert" aria-labelledby="expert-tab">
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="story3.html" title="Catchy Carz">
													<img src="images/e1.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>My<span>Car</span> </p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="story3.html">First Drive: Hyundai,Hyundai Elantra,Elantra </a></h4>
											<p>Hyundai has come a long way as a manufacturer. From being considered as a budget
												brand to being able to sell cars well above Rs 10 lakh in huge numbers is a testament to
												the quality of products the Korean manufacturer has delivered.
												The Elantra which was launched in 2012 was a surprise package too.
												 Although selling just in three digits, it was for a while the best-selling sedan in its segment.
												  That meant Hyundai was able to beat heavy weights such as Skoda, Volkswagen and Toyota at their own game.
													 Now, four years down the line, the brand new Elantra has arrived and it
												looks even more impressive and promising than the car it replaces.</p>
											<a href="story3.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info one">
										<h4><a href="single.html">BMW 320i : First Drive Review </a></h4>
											<p>I like how BMW can make the same engine feel different in different cars.
												Now, what does that have to do with the 320i? Well, for starters,
												the 2.0-litre turbo petrol motor is shared with a lot of other cars in the BMW portfolio.
												I had my first whiff of the motor when I drove the Mini Cooper S convertible in Goa, and then again when I sampled the 520i.
												 What's important here is that the same engine felt completely different in the two cars.
												 While it felt angry and snarly and twitchy in the Cooper,
												it felt as relaxed as a banker in the 5 Series.</p>
											<a href="single.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
											<a href="single.html" title="Catchy Carz">
													<img src="images/e6.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>My <span>Car</span> </p>
													</div>
												</a>
											</div>
										</div>

										<div class="clearfix"></div>
									</div>

								 </div>

							</div>
							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">

								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/hX6CX3lqkNg" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="story8.html">Skoda Kodiaq</a></h4>
											  							<p>India, get ready for the Skoda’s new SUV offering! Let’s explore Skoda Kodiaq SUV car in
														            detail by getting the complete information of its features, full specifications, price, release date,
														            and many more you need to know as a car enthusiast or a keen car buyer. All-new 7-seater Skoda Kodiaq is named
														            after the Alaskan Kodiak Bear and is based on Sokda’s latest Vision S Concept and Volkswagen’s popular MQB platform.
														             Concept of this car has been unveiled at
														             Geneva Motors Show and this SUV will be unveiled at the October 2016 Paris Motor Show.</p>
										<a href="story8.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										    <h4><a href="story9.html">2016 Jaguar XJL V-6 AWD </a></h4>
											<p>Eight inches of blue screen glowed from the 2016 Jaguar XJL Portfolio V-6 AWD’s center stack.
												 Instead of showing us navigation, radio, climate, or phone information, Jaguar’s all-new touchscreen infotainment system,
												  dubbed InControl Touch Pro, did its best impression of a 1960s British-car electrical component by simply not showing up
													 for work.</p>
											<a href="story9.html" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/V9xfwuN1pqA" frameborder="0" allowfullscreen></iframe>
										</div>

										<div class="clearfix"></div>
									</div>

								 </div>

							</div>


						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
		<!-- //Services -->
			<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>My Car is india's recently hosted website that helps people to choose a car that they love.<span>It's a website that carry
					rich automotive content.</span><span>My Car which went live in 2016,was set up by a bunch of enthusiastic TKMCE engineering
					students</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>TKMCE,Karicode,Kollam <span>India.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:mycarzz@outlook.com">mycarzz@outlook.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 9497587826</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">

						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">My Car <span>Eye it – try it – buy it!</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2016 MY Car</p>
			</div>
		</div>
	</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<script type="text/javascript">
				 $(window).load(function() {
				  $("#flexiselDemo").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed:1000,
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint:480,
							visibleItems: 1
						},
						landscape: {
							changePoint:640,
							visibleItems: 1
						},
						tablet: {
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				});
				</script>
						<script type="text/javascript">
				 $(window).load(function() {
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint:480,
							visibleItems: 1
						},
						landscape: {
							changePoint:640,
							visibleItems: 2
						},
						tablet: {
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>




<?php
extract($_POST);

if(isset($_POST['submitup1']))

{

include("database.php");
$sel=mysql_query("select * from upcming where car_id=1");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['nameup1'];	
$emailll=$_POST['emailup1'];
$query="insert into upcming_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>








<?php
extract($_POST);

if(isset($_POST['submitup2']))

{

include("database.php");
$sel=mysql_query("select * from upcming where car_id=2");
while($arr=mysql_fetch_array($sel))
 {
     $i2=$arr['car_id'];
	$m2=$arr['carmdel'];
$p2=$arr['price'];
$d2=$arr['date'];
}
$nameee=$_POST['nameup2'];	
$emailll=$_POST['emailup2'];
$query="insert into upcming_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>


<?php
extract($_POST);

if(isset($_POST['submitup3']))

{

include("database.php");
$sel=mysql_query("select * from upcming where car_id=3");
while($arr=mysql_fetch_array($sel))
 {
     $i3=$arr['car_id'];
	$m2=$arr['carmdel'];
$p3=$arr['price'];
$d3=$arr['date'];
}
$nameee=$_POST['nameup3'];	
$emailll=$_POST['emailup3'];
$query="insert into upcming_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>




<?php
extract($_POST);

if(isset($_POST['submitpo1']))

{

include("database.php");
$sel=mysql_query("select * from ppular where car_id=1");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namepo1'];	
$emailll=$_POST['emailpo1'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>




<?php
extract($_POST);

if(isset($_POST['submitpo2']))

{

include("database.php");
$sel=mysql_query("select * from ppular where car_id=2");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namepo2'];	
$emailll=$_POST['emailpo2'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>




<?php
extract($_POST);

if(isset($_POST['submitpo3']))

{

include("database.php");
$sel=mysql_query("select * from ppular where car_id=3");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namepo3'];	
$emailll=$_POST['emailpo3'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>


<?php
extract($_POST);

if(isset($_POST['submitla1']))

{

include("database.php");
$sel=mysql_query("select * from launched where car_id=1");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namela1'];	
$emailll=$_POST['emailla1'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>



<?php
extract($_POST);

if(isset($_POST['submitla2']))

{

include("database.php");
$sel=mysql_query("select * from launched where car_id=2");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namela2'];	
$emailll=$_POST['emailla2'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?>




<?php
extract($_POST);

if(isset($_POST['submitla3']))

{

include("database.php");
$sel=mysql_query("select * from launched where car_id=3");
while($arr=mysql_fetch_array($sel))
 {
     $i=$arr['car_id'];
	$m=$arr['carmdel'];
$p=$arr['price'];
$d=$arr['date'];
}
$nameee=$_POST['namela3'];	
$emailll=$_POST['emailla3'];
$query="insert into ppular_rder values('$nameee','$emailll','$p','$i','$m')";
//$query="insert into upcming_rder(user,email,price,car_id,car_mdel) values('$nameup','$emailup','$p','$i','$m')";
$rs=mysql_query($query)or die("Could Not Perform the Query");

if($rs)
{
   echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
{
  echo "<script type='text/javascript'>alert('failed!')</script>";
}
}
?></body>
</html>
