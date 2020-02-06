<?php include("constants.php"); 
$actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="format-detection" content="telephone=no">



<title>DuBunne Spa Club and Massage Center Reviews </title>
<meta name="description" content="Dubunne Spa Club and Massage Center, located in Torrance CA for more than 30 years, is a boutique-style spa specializing in tension-taming services. Come read our reviews!." />
<meta property="og:site_name" content="DUBUNNE" />
<meta property="og:title" content="DuBunne Spa Club and Massage Center Reviews " />
<meta property="og:url" content="<?php echo $actual_link;?>" />
<meta property="og:type" content="website"/>
<meta name="description" content="Dubunne Spa Club and Massage Center, located in Torrance CA for more than 30 years, is a boutique-style spa specializing in tension-taming services. Come read our reviews!" />
<meta name="keywords" content="" />


<!-- SET: FAVICON -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- END: FAVICON -->



<!-- SET: STYLESHEET -->

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.6.3/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

<link rel="stylesheet" type="text/css" href="css/owl.theme.css">

<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<link href="css/style.css?ver=0.1" rel="stylesheet" type="text/css" media="all">

<link href="css/responsive.css?ver=0.1" rel="stylesheet" type="text/css" media="all">

<!-- END: STYLESHEET -->

<style>
.rviwsec {
    margin: 10px 0;
}
.rviwsec h4 {
    color: #000;
    font-weight: bold;
    border-top: 1px solid #CCC;
    padding: 10px 0;
}
.postby {
    font-size: 14px;
    color: #ccc;
}
.star {
    margin: 10px 0;
}
</style>
<?php include("analytics.php"); ?>
</head>



<body>



<!-- wrapper starts -->

<div class="wrapper">


<?php include("header.php"); ?>

            

             <?php echo $obj_salon_settings['reviews_banner']; ?>





            </div>

            

            <!-- maincontent Starts -->

            <div class="main_content">

            	<h1 class="heading1">Reviews</h1>

            

            	<div class="pageinnerblk">

                	

                    <div class="container">

                    	<div class="row">

                        
<?php
										
										//echo '<pre>';
										 $reviews = REVIEWS;
										  $jsondata = file_get_contents($reviews);
										  $obj_reviews = json_decode($jsondata,true);
										// print_r($obj_reviews);
										  if($obj_reviews['average_rating']>0)
										  {
										  foreach($obj_reviews['ratings'] as $key => $value)
											{	
												$review_date = date("j M Y",strtotime($value['date']));  
										?>
<div class="rviwsec">
          <h4><?php echo $value['title']; ?></h4>
          <p>By <?php echo $value['name']; ?> on <?php echo $review_date; ?></p>
          <div class="star">
          <?php
										for($rating=1;$rating<=$value['rating'];$rating++)
											  {
											  ?>
          <span><img src="images/star.png"></span>
          <?php } ?>
          </div>
          <p><?php echo $value['description']; ?></p>
   </div>
   <?php
										  }
										  }
										  else
										  {
											  echo "Coming Soon";
											  }
										   ?>
    

                                

                            </div>

                        	

                        

                        	

                            

                        </div>

                    </div>

                

                

                </div>

            

            </div>

            <!-- aincontent ends -->

            

            <!-- footer starts -->

            <?php include("footer.php"); ?>

            <!-- footer ends -->

            

    

</div>

<!-- wrapper ends -->



<!-- SET: SCRIPTS -->

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/owl.carousel.js"></script>

<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<script type="text/javascript" src="js/jquery.vgrid.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">

	$(document).ready(function() {

		

		// initialization here

		

	});

</script>

<!-- END: SCRIPTS -->





</body>

</html>

