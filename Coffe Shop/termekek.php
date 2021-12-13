<!DOCTYPE HTML>
<html>
<head>
<title>Kávé Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->


<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webshopdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_select_db($conn,"termékek");

?>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
								<li><a href="index.html">Főoldal</a></li>
						    	<li><a href="termekek.html">Termékek</a></li>
						    	<li><a href="experiance.html">Profil</a></li>
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">

				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">Ajándék Kávé</a></h4><span class="actual">1 x
                          4500HUF</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.html">
			<?php
				$sql = "SELECT * FROM `termékek` WHERE `ID` = 1";
				$result = mysqli_query($conn,$sql);




				while ($row = $result->fetch_assoc()) {
				echo $row['Név']."<br>";
				}

			?>


					<img src="images/term1.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						//<h3><a href="#">Fekete Edison Kávé</a></h3>
						<p>NEmtom biztos jó.... </p>
						<span class="reducedfrom">10000Ft</span>
						<span class="actual">1500Ft</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Kosárba</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/term2.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						
						<h3><a href="#">Rosso Café</a></h3>
						<p>Nem tudom ez se tűnik rossznak </p>
						<span class="actual">5000Ft</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/term3.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Roma Kávé</a></h3>
						<p>Kapszulás kávé</p>
						<span class="reducedfrom">4000Ft</span>
						<span class="actual">2990Ft</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.html">
					<img src="images/term4.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Arany Edison kávé</a></h3>
						<p>2019-es jó évszám</p>
						<span class="actual">5000Ft</span><br>
						<ul class="buttons">
							<li class="cart"><a href="#">Add To Cart</a></li>
							<div class="clear"> </div>
					    </ul>
				    </div>
				</a></div>
			</div>
			</div>
		 </div>
	   </div>
	  </div>
	  <div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul class="footer_box">
						<h4><a href="termekek.html">Products</h4>
					</ul>
				</div>
				<div class="col-md-4">
					<img src="images/logo.png">
					<ul class="social">	
						<li class="facebook"><a href="#"><span> </span></a></li>
						<li class="twitter"><a href="#"><span> </span></a></li>
						<li class="instagram"><a href="#"><span> </span></a></li>											  				
					  </ul>
				</div>
				<div class="col-md-4">
					<ul class="footer_box">
						<h4>Hírlevél</h4>
						<div class="footer_search">
						   <form>
							<input type="text" value="Add meg az email címed" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add meg az email címed';}">
							<input type="submit" value="Go">
						   </form>
						</div>
						
						   
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>	
</html>