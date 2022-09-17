<!DOCTYPE html>
<html lang="en">

<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  //if usser is not login redirected baack to login page
{
	header('location:login.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>food ordering system</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/wiki.js"></script>
<link rel="stylesheet" href="../fontawesome/css/all.css">
<style type="text/css" rel="stylesheet">


		


.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}


table { 
	width: 750px; 
	border-collapse: collapse; 
	margin: auto;
	
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #ff3300; 
	color: white; 
	font-weight: bold; 
	
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}


/* Rate Css Starts Here */

    	.star-widget input{
            display: none;

        }

        .star-widget label{
            font-size: 40px;
            color: #444;
            padding: 10px;
            float: right;
        }

        input:not(:checked) ~ label:hover,
        input:not(:checked) ~ label:hover ~ label{
            color:#fd4;
        }

        input#popup1rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup1rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup2rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup3rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup3rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }


        input#popup4rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup4rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-5:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-4:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-3:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-2:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }

        input#popup5rate-1:checked ~ label{
            color: #fe7;
            text-shadow: 0 0 20px #952;
        }
        .btn2{
            padding: 10px 60px;
            background: #fff;
            border:0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 30px;
        }

        #reviewInput{
            width:90%;
            border: 1.5px solid black;
            border-radius: 5px;
            padding: 10px;

        }
        .popup{
            width:400px;
            background: #fff;
            border-radius:6px;
            position:absolute;
            top: 0%;
            left:50%;
            transform: translate(-50%,-50%) scale(0.1);
            text-align:center;
            padding:0 30px 30px;
            color:#333;
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }

        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
            
        }

        .popup img{
            width:100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .popup h2{
            font-size:38px;
            font-weight:500px;
            margin: 30px 0 10px;
        }

        .popup button{
            width:100%;
            margin-top:50px;
            padding:10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0,0,0,0.2);
        }

        /* Rate Css Ends Here */





	</style>

	</head>

<body>
    
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">signup</a> </li>';
							}
						else
							{
									
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">your orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
           
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/res.jpeg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                          
                          
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
                                        <li> <a href="#" class="tag">
                                    Pizza
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sandwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Sendwich
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Fish 
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Desert
                                    </a> </li>
                                        <li> <a href="#" class="tag">
                                    Salad
                                    </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 ">
                            <div class="bg-gray restaurant-entry">
                                <div class="row">
								
							<table >
						  <thead>
							<tr>
							
							  <th>Item</th>
							  <th>Quantity</th>
							  <th>price</th>
							   <th>status</th>
							     <th>Date</th>
								   <th>Action</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  
						  
							<?php 
						// displaying current session user login orders 
						$query_res= mysqli_query($db,"select * from users_orders where u_id='".$_SESSION['user_id']."'");
												if(!mysqli_num_rows($query_res) > 0 )
														{
															echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
														}
													else
														{	
																      
										   $idNum=1;
										  while($row=mysqli_fetch_array($query_res))
										  {
												 $id = "popup".$idNum;
           										 $idNum++;
							?>
												<tr>	
														 <td data-column="Item"> <?php echo $row['title']; ?></td>
														  <td data-column="Quantity"> <?php echo $row['quantity']; ?></td>
														  <td data-column="price">$<?php echo $row['price']; ?></td>
														   <td data-column="status"> 
														   <?php 
																			$status=$row['status'];
																			if($status=="" or $status=="NULL")
																			{
																			?>
																			<button type="button" class="btn btn-info" style="font-weight:;">Dispatch</button>

																			<!-- <a href="Esawa.php" class="btn btn-info" style="font-weight:bold;">payment with Esawa</button> -->

 <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="100" name="tAmt" type="hidden">
    <input value="90" name="amt" type="hidden">
    <input value="5" name="txAmt" type="hidden">
    <input value="2" name="psc" type="hidden">
    <input value="3" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="payment E-sewa" type="submit"  class="btn btn-info" style="font-weight:bold;">
    </form>



																		   <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
																				<button type="button" class="btn btn-warning"><span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>On a Way!</button>
																			<?php
																				}
																			if($status=="closed")
																				{
																			?>
																			 <button type="button" class="btn btn-success" ><span  class="fa fa-check-circle" aria-hidden="true">Delivered</button> 
																			<?php 
																			} 
																			?>
																			<?php
																			if($status=="rejected")
																				{
																			?>
																			 <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>cancelled</button>
																			<?php 
																			} 
																			?>
														   
														   
														   
														   
														   
														   
														   </td>
														  <td data-column="Date"> <?php echo $row['date']; ?></td>
														   <td data-column="Action"> <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash" style="font-size:16px"></i></a> 
														   	 <div>
														   	 <button type="button" id="but" class="btn" onclick="openPopup('<?php echo $id; ?>')" value="Rate Now">rate now </button>
														   	 </div>
															</td>
														 
												</tr>
												
											
														
		<div class="popup" id="<?php echo $id;?>">
        <form action="rateprocess.php" method="post">
        
            <div class="star-widget">
                <input type="radio" name="rate" id="<?php echo $id.'rate-5';?>" value="5">
                <label for="<?php echo $id.'rate-5';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-4';?>" value="4">
                <label for="<?php echo $id.'rate-4';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-3';?>" value="3">
                <label for="<?php echo $id.'rate-3';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-2';?>" value="2">
                <label for="<?php echo $id.'rate-2';?>"  class="fas fa-star"></label>
                <input type="radio" name="rate" id="<?php echo $id.'rate-1';?>" value="1">
                <label for="<?php echo $id.'rate-1';?>"  class="fas fa-star"></label>
            </div>
        
        <h2>Rate <?php echo $row['title']; ?></h2>
        <p>Your Review</p> <br>
        <input type="hidden" value="<?php echo $row['title']; ?>" name="pid">
        <input type="textarea" placeholder="Describe your experience" id="reviewInput" name="review">
        <button type="submit" >OK</button>
    </form>
    </div>


<?php } ?>


											<?php		} ?>					
							
							
										
						
						  </tbody>
					</table>
						
					
                                    
                                </div>
                                <!--end:row -->
                            </div>
                         
                            
                                
                            </div>
                          
                          
                           
                        </div>
                    </div>
                </div>
            </section>
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                                    <figure> <img src="images/app.png" alt="Right Image"> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Food Delivery App</h3>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                    <div class="social-btns">
                                        <a href="#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="#" class="app-btn android-button clearfix">
                                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- start: FOOTER -->
            <footer class="footer">
                <div class="container">
                    <!-- top footer statrs -->
                    <div class="row top-footer">
                        <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                            <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                        <div class="col-xs-12 col-sm-2 about color-gray">
                            <h5>About Us</h5>
                            <ul>
                                <li><a href="#">About us</a> </li>
                                <li><a href="#">History</a> </li>
                                <li><a href="#">Our Team</a> </li>
                                <li><a href="#">We are hiring</a> </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                            <h5>How it Works</h5>
                            <ul>
                                <li><a href="#">Enter your location</a> </li>
                                <li><a href="#">Choose restaurant</a> </li>
                                <li><a href="#">Choose meal</a> </li>
                                <li><a href="#">Pay via credit card</a> </li>
                                <li><a href="#">Wait for delivery</a> </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-2 pages color-gray">
                            <h5>Pages</h5>
                            <ul>
                                <li><a href="#">Search results page</a> </li>
                                <li><a href="#">User Sing Up Page</a> </li>
                                <li><a href="#">Pricing page</a> </li>
                                <li><a href="#">Make order</a> </li>
                                <li><a href="#">Add to cart</a> </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                            <h5>Popular locations</h5>
                            <ul>
                            <li><a href="#">Kumaripati</a> </li>
                            <li><a href="#">Durbarmarg</a> </li>
                            <li><a href="#">Godawari</a> </li>
                            <li><a href="#">Kalanki</a> </li>
                            <li><a href="#">Putalisadak</a> </li>
                            <li><a href="#">Balaju</a> </li>
                            <li><a href="#">Satdobato</a> </li>
                            <li><a href="#">Pulchowk</a> </li>
                            <li><a href="#">Jawalakhel</a> </li>
                            <li><a href="#">Jhamsikhel</a> </li>
                        </ul>
                        </div>
                    </div>
                    <!-- top footer ends -->
                    <!-- bottom footer statrs -->
                    <div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                                    <h5>Payment Options</h5>
                                    <ul>
                                        <li>
                                            <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>Concept design of online food order and deliveye,planned as restaurant directory</p>
                                    <h5>Phone: <a href="tel:+977-015560188">01 5660188</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Addition informations</h5>
                                    <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script>

        let popup = document.getElementById("popup");

        function checkForm(){
            console.log(document.getElementById('searchTerm').value);
            return false;
            }

        function openPopup(id){
            popup = document.getElementById(id);
            popup.classList.add("open-popup");
            document.getElementById("but").innerHTML;
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }

</script>
</body>

</html>
<?php
}
?>