<?php include("constants.php"); 
$pageUrl = explode("/",$_SERVER['REQUEST_URI']);
$rewrite_url = end($pageUrl);
//echo $rewrite_url;
if($rewrite_url == 'microdermabrasion-peels-details')
{
	$title = 'Microdermabrasion | Anti Aging Peel | Pigment in Torrance - Dubunne';
$metadesc = 'Rejuvenate your skin with this supercharged combination of microdermabrasion, and a Physicians Choice Peel. Adding a peel can give better and more rapid results on certain skin types and skin conditions. Ask you esthetician if this would be appropriate for your skin care needs.';
}
else if($rewrite_url == 'massage-details')
{
	$title = 'Swedish, Hot Stone, Deep Tissue Spa Massage Torrance – DuBunné';
$metadesc = 'Looking for Massage Centre in Torrance, CA? At DuBunné Spa Club & Massage Centre, we have a full menu of high-quality massage, traditional massage options to choose from that will leave you feeling pampered and refreshed.';
}

else if($rewrite_url == 'body-treatments-details')
{
	$title = 'Body Wraps, Scrubs, Body Spa Treatment in Torrance, CA - DuBunné';
$metadesc = 'To replenish antioxidants and reduce the stress of daily life, treat yourself to DuBunné Spa Club & Massage Centre with our body wraps and body scrub treatments.';
}
else if($rewrite_url == 'spa-packages-for-two-details')
{
	$title = 'Spa and Massage Value Pack For Couple in Torrance - Dubunne';
$metadesc = 'Whether it be a date night or a special gift, our value packages for two will promise to be a memorable retreat for that special couple. Call DuBunné Spa Club & Massage for more information.';
}
else if($rewrite_url == 'bathing-rituals-details')
{
	$title = 'Bathing Rituals in Torrance - Dubunne Spa Club and Massage Center ';
$metadesc = 'Enjoy one of our bathing rituals at DuBunné Spa Club & Massage Centre to improve circulation and rejuvenate a stiff sore body. Organic gourmet bath soaks with no harsh.';
}
else if($rewrite_url == 'signature-facials-details')
{
	$title = 'Facial at DuBunné Spa Club & Massage Centre in Torrance';
$metadesc = 'Take organic deep pore visibly smoother facial. Pamper your skin with one of our DuBunné Spa Club facials. Erase sun damage, wind damage, and harmful elements with any one of our signature facials.';
}
else if($rewrite_url == 'waxing-details')
{
	$title = 'Full Body Waxing in Torrance - Dubunne Spa Club and Massage Center';
$metadesc = 'DuBunné Spa Club & Massage Centre offers a full menu of waxing services. From brows to legs to bikini, you leave feeling beautiful and smooth. ';
}
else if($rewrite_url == 'nail-services-details')
{
	$title = 'Manicure/Pedicure and Nail Art in Torrance, CA - DuBunné';
$metadesc = 'Rely on DuBunné Spa Club & Massage Centre for all your manicure and pedicure needs. Nail care is as important as skin care, our expert technicians are ready to pamper you.';
}
else if($rewrite_url == 'spa-packages-details')
{
	$title = 'Spa and Massage Packages for Men and Women in Torrance, CA - DuBunné';
$metadesc = 'Purchase a value package at DuBunné Spa Club & Massage Centre for that special man or woman in your life or as a gift. Mommy to be, stress reducer, foot massage, facial and more.';
}
else if($rewrite_url == 'signature-massages-details')
{
	$title = 'Mimosa Signature Spa Massage, Hot Stone Massage, Ultimate Spa Massage,';
$metadesc = 'Moroccanoil Scalp Massage, Sole to Soul Foot Massage
Come enjoy a state of deep relaxation with one of our ultimate signature massages. From a mimosa bathing ritual to a pampering foot massage, we have something for everyone!';
}
else if($rewrite_url == 'silkpeel-treatment-details')
{
	$title = 'Silkpeel Treatment - DuBunne Spa Club and Massage Center';
$metadesc = 'Seen on The Doctors and E!, this treatment goes beyond microdermabrasion with no downtime. Address dark spots, signs of aging, and dry skin with with a silkpeel treatment!';
}
else if($rewrite_url == 'spa-facials-details')
{
	$title = 'Spa Facials Dubunne Spa Club and Massage Center';
$metadesc = 'At Dubunne Spa Club and Massage Center, we offer spa facials to exfoliate, shrink your pores, erase your wrinkles, and send your stress out the door. Come see us today!';
}
else if($rewrite_url == 'spa-facials-details')
{
	$title = 'Spa & Facial in Torrance - Dubunne Spa Club and Massage Center';
$metadesc = '';
}else if($rewrite_url == 'classic-spa-facials-details')
{
	$title = 'Classic Spa Facials in Torrance, CA - Dubunne Spa Club and Massage Center';
    $metadesc = '';
}else if($rewrite_url == 'signature-body-rituals-details')
{
	$title = 'Body Scrubs, Wrap Rituals, Wrap Massage, CBD Rituals in Torrance CA - Dubunne Spa Club and Massage Center';
    $metadesc = '';
}
else
{
	$page_title = str_replace("-"," ",$_REQUEST['service']);
	$title = ucfirst($page_title);
    $metadesc = ucfirst($page_title);
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER[REQUEST_URI]; ?>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="format-detection" content="telephone=no">

<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $metadesc; ?>" />


<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $metadesc; ?>" />
<meta property="og:site_name" content="DUBUNNE" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:url" content="<?php echo $actual_link;?>" />
<meta property="og:type" content="website"/>
<meta name="description" content="<?php echo $metadesc; ?>" />





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

<link href="css/style.css" rel="stylesheet" type="text/css" media="all">

<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all">

<!-- END: STYLESHEET -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />

<script type="text/javascript">

		$(document).ready(function() {


			$('#maximage').show();

		
		$('.fancybox').fancybox();



			/*

			 * Different effects

			 */

			// Change title type, overlay closing speed

			$(".fancybox-effects-a").fancybox({

				helpers: {

					title : {

						type : 'outside'

					},

					overlay : {

						speedOut : 0

					}

				}

			});

			// Disable opening and closing animations, change title type

			$(".fancybox-effects-b").fancybox({

				openEffect : 'none',

				closeEffect	: 'none',



				helpers : {

					title : {

						type : 'over'

					}

				}

			});



			// Set custom style, close if clicked, change title type and overlay color

			$(".fancybox-effects-c").fancybox({

				wrapCSS : 'fancybox-custom',

				closeClick : true,



				openEffect : 'none',



				helpers : {

					title : {

						type : 'inside'

					},

					overlay : {

						css : {

							'background' : 'rgba(238,238,238,0.85)'

						}

					}

				}

			});



			// Remove padding, set opening and closing animations, close if clicked and disable overlay

			$(".fancybox-effects-d").fancybox({

				padding: 0,



				openEffect : 'elastic',

				openSpeed : 150,



				closeEffect : 'elastic',

				closeSpeed : 150,



				closeClick : true,



				helpers : {

					overlay : null

				}

			});



			/*

			 * Button helper. Disable animations, hide close button, change title type and content

			 */



			$('.fancybox-buttons').fancybox({

				openEffect : 'none',

				closeEffect : 'none',



				prevEffect : 'none',

				nextEffect : 'none',



				closeBtn : false,



				helpers : {

					title : {

						type : 'inside'

					},

					buttons	: {}

				},



				afterLoad : function() {

					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');

				}

			});





			/*

			 * Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked

			 */



			$('.fancybox-thumbs').fancybox({

				prevEffect : 'none',

				nextEffect : 'none',



				closeBtn : false,

				arrows : false,

				nextClick : true,



				helpers : {

					thumbs : {

						width : 50,

						height : 50

					}

				}

			});



			/*

			 * Media helper. Group items, disable animations, hide arrows, enable media and button helpers.

			*/

			$('.fancybox-media')

				.attr('rel', 'media-gallery')

				.fancybox({

					openEffect : 'none',

					closeEffect : 'none',

					prevEffect : 'none',

					nextEffect : 'none',



					arrows : false,

					helpers : {

						media : {},

						buttons : {}

					}

				});



			/*

			 * Open manually

			 */



			$("#fancybox-manual-a").click(function() {

				$.fancybox.open('1_b.jpg');

			});



			$("#fancybox-manual-b").click(function() {

				$.fancybox.open({

					href : 'iframe.html',

					type : 'iframe',

					padding : 5

				});

			});



			$("#fancybox-manual-c").click(function() {

				$.fancybox.open([

					{

						href : '1_b.jpg',

						title : 'My title'

					}, {

						href : '2_b.jpg',

						title : '2nd title'

					}, {

						href : '3_b.jpg'

					}

				], {

					helpers : {

						thumbs : {

							width: 75,

							height: 50

						}

					}

				});

			});

		});

	</script>

<style>
.responsive-video {
position: relative;
padding-bottom: 56.25%;
padding-top: 60px; overflow: hidden;
}


.responsive-video iframe,
.responsive-video object,
.responsive-video embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
</style>
<?php include("analytics.php"); ?>
</head>



<body>



<!-- wrapper starts -->

<div class="wrapper">



<?php include("header.php"); ?>

  

  <?php
			if($_REQUEST['service'] == 'spa-packages')
			{
			 echo $obj_salon_settings['spa_packages_banner'];
			}
			else if($_REQUEST['service'] == 'spa-ritual')
			{
			 echo $obj_salon_settings['bathing_rituals_banner'];
			}
			else if($_REQUEST['service'] == 'bathing-rituals')
			{
			 echo $obj_salon_settings['bathing_rituals_banner'];
			}
			else if($_REQUEST['service'] == 'spa-packages-for-two')
			{
			 echo $obj_salon_settings['spa_packages_for_two_banner'];
			}
			else
			{
				echo $obj_salon_settings['spa_packages_for_two_banner'];
				}
			 ?>





  </div>

  

  <!-- maincontent Starts -->
<?php
			$service = SERVICES.$salon_id.'/2819';
		 $service_details = file_get_contents($service);
		 $i=0;
		 $services = json_decode($service_details,true);
  foreach($services as $key_ser => $value_ser){
			 
			 $service_submenu = SUB_MENU.$salon_id.'/2819/'.$value_ser['menu_id'].'';
			 $jsondata_service_submenu = file_get_contents($service_submenu);
			 $obj_service_submenu = json_decode($jsondata_service_submenu,true);
			 if(convert_to_slug($value_ser['menu_title']) == $_REQUEST['service'] )
			 {
			 ?>
  
  
  <div class="main_content">

  	<h1 class="heading1"><?php echo strtoupper($value_ser['menu_title']); ?></h1>
				

  	<div class="pageinnerblk">

  	

  <div class="container">

  	<div class="row">

  

  	<div class="aboutlist clearfix">
  <?php if($value_ser['menu_id'] == 3860) {?>
  <p style="text-align:center;">
  <div class="responsive-video">
  
  <iframe height="360" frameborder="0" width="50%" allowfullscreen="allowfullscreen" src="//www.youtube.com/embed/5rZ2yvXLaiw" style="padding-bottom: 30px;"></iframe>
  </div>
  </p>
  <?php } ?>
  
  <?php if($value_ser['menu_id'] == 4067) {?>
  <div class="videoWrapper">
  <video autoplay loop mute controls > 
  <source src="SilkPeel.mp4" type="video/mp4"> 
  </video>
  </div>
  <?php } ?>
<div class="col-xs-12 col-sm-12 topmar">
  <?php $j=0; 
			 foreach($obj_service_submenu as $key_sub => $val_sub)
							 {
								 
  ?>
  
  
  	<h3><?php echo $val_sub['sub_menu_title'];?></h3>
  <?php if($val_sub['sub_menu_description'] != ''){?>
  <p><?php echo nl2br($val_sub['sub_menu_description']);?></p>
  <?php } ?>
  <?php if($val_sub['sub_menu_price'] != ''){?>
  <p><?php echo $val_sub['sub_menu_price']; ?></p>
  <?php } ?>
  <p>
  <?php if($value_ser['menu_id'] != 3450) {?>
  <!--<a target="_blank" href="https://dubunne.boomtime.com/lgift" class="btn btn-send buygiftbtn" style="margin-right:10px;"><img src="images/giftcardleaf.png" width="150" alt="img"></a>-->
  <a target="_blank" href="https://na1.meevo.com/EgiftApp/home?tenantId=20262" class="btn btn-send buygiftbtn" style="margin-right:10px;"><img src="images/giftcardleaf.png" width="150" alt="img"></a>
  
  <?php } ?>
  <!--<a target="_blank" href="https://www.salonclouds.plus/onlinebooking/appointments/99672674" class="btn btn-send booknbtn"><img src="images/booknowleaf.png" width="150" alt="img"></a></p>-->
  <a target="_blank" href="https://na1.meevo.com/OnlineBookingApp/login?tenantId=20262" class="btn btn-send booknbtn"><img src="images/booknowleaf.png" width="150" alt="img"></a></p>
<br>
<br>
<?php
							 }
							 
							 if($_REQUEST['service'] == 'spa-packages-for-two')
			{
			 echo $obj_salon_settings['spa_packages_for_two_content'];
			}
				 ?>

  	
  </div>
  
  
  
  

  

  

  </div>

  	

  

  	

  

  </div>

  </div>

  

  

  </div>

  

  </div>
<?php 
			 }
		 }
?>
  <!-- aincontent ends -->

  

  <!-- footer starts -->

  <?php include("footer.php"); ?>

  <!-- footer ends -->

  

  

</div>

<!-- wrapper ends -->



<!-- SET: SCRIPTS -->



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

