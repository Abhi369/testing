<?php include("constants.php"); 
$actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI];?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="format-detection" content="telephone=no">

<title>Monthly Specials at Dubunne Spa Club and Massage Center</title>
<meta name="description" content="At Dubunne Spa Club and Massage Center, we offer monthly specials to serve our clients’ needs. This month we have three different ways to pamper your mom for Mother’s Day!" />
<meta property="og:site_name" content="DUBUNNE" />
<meta property="og:title" content="Monthly Specials at Dubunne Spa Club and Massage Center" />
<meta property="og:url" content="<?php echo $actual_link;?>" />
<meta property="og:type" content="website"/>
<meta name="description" content="At Dubunne Spa Club and Massage Center, we offer monthly specials to serve our clients’ needs. This month we have three different ways to pamper your mom for Mother’s Day!" />


<!-- SET: FAVICON -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- END: FAVICON -->



<!-- SET: STYLESHEET -->
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.6.3/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

<link rel="stylesheet" type="text/css" href="css/owl.theme.css">

<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<link href="css/style.css?ver=0.1" rel="stylesheet" type="text/css" media="all">

<link href="css/responsive.css?ver=0.1" rel="stylesheet" type="text/css" media="all">

<!-- END: STYLESHEET -->


<?php include("analytics.php"); ?>
</head>



<body>



<!-- wrapper starts -->

<div class="wrapper">



 <?php include("header.php"); ?>

            

            <?php echo $obj_salon_settings['specials_banner']; ?>





            </div>

            

            <!-- maincontent Starts -->

            <div class="main_content">

            	<h1 class="heading1 specialtitle">Featured Monthly Services</h1>

            

            	<div class="pageinnerblk">
                <div class="specialsmain">
                    <div class="container">
            <?php
             $specials = SPECIALS.$salon_id.'/2913';
              $jsondata = file_get_contents($specials);
              $obj_specials = json_decode($jsondata,true);
             // echo '<pre>';
             // print_r($obj_specials);
           if(!empty($obj_specials))
              {
               foreach($obj_specials as $key_special => $valu_special)
               //$specials_id = $valu_special['specials_id'];
               //print_r($specials_id);
              {
            ?>
                    	<div class="row clearfix">
                            <div class="col-xs-12 col-sm-8 col-md-8 special-new-cont-left">
                                    <div class="col-xs-12 col-sm-6 col-md-6 special-new-cont-inner-left">
                                        <?php if($valu_special['specials_image'] != ''){?>
                                                 <img src="https://saloncloudsplus.com/uploads/<?php echo $valu_special['specials_image'];?>" width="404" height="248" alt="<?php echo $valu_special['specials_title'];?>">
                                                 <?php }else{?>
                                                 <img src="images/logo.png" width="404" height="248" alt="<?php echo $valu_special['specials_title'];?>">
                                                 <?php } ?>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 special-new-detail">
                                    	<h2><?php echo $valu_special['specials_title'];?></h2>
                                        <?php $dif =  explode("$",$valu_special['specials_description']);?>
                                        <ul class="special-new-list">
                                            <li><?php //echo nl2br($dif[0]);
                                             echo nl2br($valu_special['specials_description_only']);
                                            ?></li>
                                        </ul>
                                    </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-4 col-md-4 special-new-cont-right">
                              <p><?php //echo " $".$dif[1]." $".$dif[2];
                              echo $valu_special['specials_price'];
                              ?></p>
                           <?php // != 4180
                                            //if($valu_special['specials_id'] == '3144') {
                                            ?>
                                            <!--<a target="_blank" href = "https://dubunne.boomtime.com/lgift">Buy Gift Certificate</a>-->
                                            <?php
                                            //}
                                            ?>

                                             <?php // != 4180
                                            //if($valu_special['specials_id'] == '5493' || $valu_special['specials_id'] == '3144') {
                                            ?>
                                            <!--<a target="_blank" href = "https://dubunne.boomtime.com/lgift">BUY NOW  </a>https://dubunne.boomtime.com/lgift-->
                                            <?php  if($valu_special['specials_id'] != '13852' ){ ?>
                                             <!--<a target="_blank" href = "https://www.salonclouds.plus/onlinebooking/appointments/99672674">BOOK NOW  </a>-->
                                             <a href="tel:310-326-9062">call us at 310-326-9062 to book</a>
                                            <?php
                                            //}
                                            }
                                             if($valu_special['specials_id'] == '3144' ) {
                                            ?>
                                            <div class="lmorebtn" style="display:none;"><a href="http://www.dubunne.com/blog/">Learn more about the O2 experience chair</a></div>
                                            <?php } ?>

                            </div>
                        </div>
                        <br/>
                    <?php
                  }
                  }
                  else {
                 echo '<p style="text-align:left;color:#000;">Coming Soon</p>';
              }
            ?> 



                            <div class="row">
                                <div class="col-md-12 col-xs-12 text-center">
                                    <a href="https://na1.meevo.com/EgiftApp/home?tenantId=20262" target="_blank" class="btn btn-special">Buy now</a>
                                </div>
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



<script type="text/javascript" src="js/jquery.matchHeight.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.js"></script>
<script type="text/javascript">
        function MasonryList() {
				
	  $('.gridmain').masonry({
		itemSelector: '.grid'
	  });
	}
	MasonryList();	

</script>

<!-- END: SCRIPTS -->





</body>

</html>

