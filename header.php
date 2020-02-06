<div class="loader">
	<div class="loaderin">
	    <div class="loaderlogo"><img src="images/logo.png" width="150"  alt="Logo"></div>
	    <div class="loaderimage"><img src="images/loader.gif" width="60"  alt="Loader"></div>
	 </div>
</div>


<script>
   $(document).ready(function(){

/** Google event sending ****/

        var title=document.title;
        /** Google event sending for seo ****/
        $(".book-now").click(function () {

            ga('send', 'event', {
                'eventCategory': 'Book Now',
                'eventAction': 'Book Now Click',
                'eventLabel': title,
                'eventValue': 1,
                'hitCallback': function () {

                    window.location.href = "<?php echo  $obj_information_salon['online_booking_url'];?>";

                },
                'hitCallbackFail': function () {

                    window.location.href = "<?php echo  $obj_information_salon['online_booking_url'];?>";
//if callback function fail
                }
            });
            
             $(".gift-card").click(function () {

            ga('send', 'event', {
                'eventCategory': 'Gift Card',
                'eventAction': 'Gift Card Click',
                'eventLabel': title,
                'eventValue': 1,
                'hitCallback': function () {

                    window.location.href = "https://dubunne.boomtime.com/lgift";

                },
                'hitCallbackFail': function () {

                    window.location.href = "https://dubunne.boomtime.com/lgift";
//if callback function fail
                }
            });
             });
        }); });
</script>
	

            <!-- Header Starts -->

            <div class="header">   

            <div class="headtop">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-xs-12 col-sm-12 col-md-5 text-center">

                    

                        <div class="headtplft">

                            <ul>

         <li>
    <a onclick="ga('send', 'event', 'Phone Call Torrance', 'Click',document.title);"  href="tel:<?php echo $obj_information_salon['config_phone']?>" ><i class="fa fa-phone" aria-hidden="true"></i>

<?php echo $obj_information_salon['config_phone']?></a></li>

                                <li><a href="mailto:<?php echo $obj_information_salon['config_emailid']?>"><i class="fa fa-paper-plane" aria-hidden="true"></i>

    <?php echo $obj_information_salon['config_emailid']?></a></li>

                            </ul>

                        </div>

                        

                        </div>

                        

                        <div class="col-xs-12 col-sm-12 col-md-7 text-center">
						<div class="booknowbtn">
                            <!--<a target="_blank" href = "https://www.salonclouds.plus/onlinebooking/appointments/99672674"><img src="images/booknow.png" width="110" alt="booknow"></a> -->
 <!--<a target="_blank" href = "https://login.meevo.com/DuBunne/ob"><img src="images/booknow.png" width="110" alt="booknow"></a> -->
  
<!--<a onclick="ga('send', 'event', 'Book Now Torrance', 'Click',document.title);" target="_blank" href = "<?php echo $obj_information_salon['online_booking_url']; ?>"><img src="images/booknow.png" width="110" alt="booknow"></a> -->

<a class="book-now" onclick="ga('send', 'event', 'Booking Now', 'Click',document.title);" href="<?php echo  $obj_information_salon['online_booking_url'];?>"><img src="images/booknow.png" width="110" alt="booknow"></a>
                           
<!-- <a target="_blank" href = "https://dubunne.boomtime.com/lgift"><img src="images/giftcard.png" width="110" alt="giftcard"></a>-->
<!--<a target="_blank" href = "https://saloncloudsplus.com/wsnewgiftcard/giftcard_form/99672674/1"><img src="images/giftcard.png" width="110" alt="giftcard"></a>-->

<!--<a   class="gift-card" onclick="ga('send', 'event', 'Gift Card', 'Click',document.title);" href="https://dubunne.boomtime.com/lgift"><img src="images/giftcard.png" width="110" alt="booknow"></a>-->
<a   class="gift-card" onclick="ga('send', 'event', 'Gift Card', 'Click',document.title);" href="https://na1.meevo.com/EgiftApp/home?tenantId=20262"><img src="images/giftcard.png" width="110" alt="booknow"></a>

                            </div>
                        <div class="socialtp pull-right">

                            <ul class="sociallist">

                                <li>
                                <?php if($obj_information_salon['twitter_url'] !='') {?>
                                <a target="_blank" href="<?php echo $obj_information_salon['twitter_url']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <?php }else{?>
                                    <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <?php }?>
                                </li>

                                <li>
                                <?php if($obj_information_salon['facebook_url'] !='') {?>
                                <a href="<?php echo $obj_information_salon['facebook_url']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <?php }else{?>
                                    <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <?php }?>
                                </li>
								<li>
                                 <?php if($obj_information_salon['instagram_url'] !='') {?>
                                <a href="<?php echo $obj_information_salon['instagram_url']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<?php }else{?>
<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
<?php } ?>
</li>
                                <?php /*?><li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                                <li><a href="#" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li><?php */?>

                            </ul>

                            

                            <ul class="appicons">

                                <li><a href="https://itunes.apple.com/us/app/du-bunne-spa-club/id1128106173?ls=1&mt=8" target="_blank"><img src="images/appstore.png" width="118" height="40" alt="App Store"></a></li>

                                <li><a href="https://play.google.com/store/apps/details?id=com.webappclouds.dubunne"  target="_blank"><img src="images/google-play.png" width="118" height="40" alt="Google play"></a></li>

                                <li><a href="https://www.amazon.com/WEBAPPCLOUDS-LLC-Dubunne-Spa-Club/dp/B01I6VY2J4" target="_blank"><img src="images/amazon.png" width="118" height="40" alt="Amazon"></a></li>

                            </ul>

                            

                           <div class="clear"></div>

                        </div>
						<span class="clear"></span>
                        

                        </div>

                        

                        </div>

                        

                    </div>

            </div>

            

            	<div class="headermain">

            	<div class="headertop">

                	<div class="container">

                        <div class="row clearfix">

                        	<div class="col-xs-12">

                            <div class="logo ">

                            	<a href="//www.dubunne.com/"><img src="images/logo.png" width="250" alt="DUBUNNE SPA CLUB AND MASSAGE CENTER"></a>

                                <div class = "navbar-header">

                                  <button type = "button" class = "navbar-toggle" 

                                     data-toggle = "collapse" data-target = "#example-navbar-collapse">

                                     <span class = "sr-only">Toggle navigation</span>

                                     <span class = "icon-bar"></span>

                                     <span class = "icon-bar"></span>

                                     <span class = "icon-bar"></span>

                                  </button>

                                    

                               </div>

                            </div>

                            </div>

                            

                            

                        </div>

                    </div>

                </div>

                </div>

                
 <?php  $p = strtolower(basename($_SERVER['PHP_SELF'])); ?>
                <div class="navigation">

                	<div class="container">

                        <div class="row clearfix">

                           <nav class = "navbar navbar-default" role = "navigation">
   <div class="collapse navbar-collapse" id = "example-navbar-collapse">

                                  <ul class = "nav navbar-nav">

                                  	 <li <?php if($p == 'index.php' || $p == ''){?> class="active"<?php } ?> ><a href = "//www.dubunne.com/">Home</a></li>

                                     <li <?php if($p == 'aboutus.php'  || $p == 'spa-parties.php'  || $p == 'spa-ritual.php'){?> class="active"<?php } ?>><a href = "aboutus.php">about us</a>
                                     <ul>
                                     <li><a href = "spa-parties.php">Spa Parties</a></li>
                                     <li><a href="spa-ritual.php">Spa Ritual</a></li>
                                     </ul>
                                     </li>

                                     <li <?php if($p == 'staff.php'){?> class="active"<?php } ?>><a href = "staff.php">staff</a>

                                     	

                                     </li>

                                     <li <?php if($p == 'services.php' || $p == 'services-details.php'){?> class="active"<?php } ?>><a href = "services.php">services</a>
                                     	<ul>
											<?php 
                                            $service_menu = SERVICES.$salon_id.'/2819';
                                             $service_details_menu = file_get_contents($service_menu);
                                             $i=0;
                                             $services_menu = json_decode($service_details_menu,true);
                                             foreach($services_menu  as $key_ser_menu => $value_ser_menu){
												 if($value_ser_menu['menu_id'] != '3860')
												 {
                                            ?>

                                             <li><a href = "<?php echo convert_to_slug($value_ser_menu['menu_title']).'-details';?>"><?php echo $value_ser_menu['menu_title']; ?></a></li>
                                                 <?php
												 }
										 			}
												 ?>         

                                                           <?php /*?><li><a href = "body-treatments-details">Body Treatments</a></li>

                                                           <li><a href = "microdermabrasion-peels-details">Microdermadrasion & Peels</a></li>

                                                           <li><a href = "spa-packages-details">Spa Packages</a></li>

                                                           <li><a href = "spa-ritual-details">Spa Ritual</a></li>

                                                           <li><a href = "bathing-rituals-details">Bathing Rituals</a></li>

                                                           <li><a href = "spa-facials-details">Facials</a></li>

                                                           <li><a href = "waxing-details">Waxing</a></li>

                                                           <li><a href = "nail-services-details">Hand & Foot Treatments</a></li>

                                                           <li><a href = "spa-packages-for-two-details">Packages for Two</a></li><?php */?>

                                                        

                                                    </ul>
                                     </li>

                                     <li <?php if($p == 'specials.php'){?> class="active"<?php } ?>><a href = "specials.php">featured services</a></li>

                                     <li <?php if($p == 'memberships.php'){?> class="active"<?php } ?>><a href = "memberships.php">memberships</a></li>

                                     <li <?php if($p == 'gallery.php'){?> class="active"<?php } ?>><a href = "gallery.php">gallery</a></li>

                                     <li <?php if($p == 'careers.php'){?> class="active"<?php } ?>><a href = "careers.php">careers</a></li>

                                     <!--<li><a target="_blank" href = "<?php echo $obj_information_salon['online_booking_url']; ?>">book now</a></li>-->
									 <li <?php if($p == 'reviews.php' || $p == 'add-review.php'){?> class="active"<?php } ?>><a href = "#">Reviews</a>
<ul>
                                     <li><a href = "reviews.php">Reviews</a></li>
                                     <li><a href="add-review.php">Add Review</a></li>
                                     </ul>
                                     </li>
                                    <!-- <li <?php if($p == 'giftcards.php'){?> class="active"<?php } ?>><a href = "https://dubunne.boomtime.com/lgift" target="_blank">gift cards</a></li>-->
                                      <li><a href = "https://na1.meevo.com/EgiftApp/home?tenantId=20262" target="_blank">gift cards</a></li>
                                    <li <?php if($p == 'blog'){?> class="active"<?php } ?>><a href = "blog">DuBunne News</a></li>

                                     <li <?php if($p == 'contact.php'){?> class="active"<?php } ?>><a href = "contact.php">contact us</a></li>

                                  </ul>

                               </div>

                               

                            </nav>

                                                        

                        </div>

                    </div>

                </div>

                

                <div class="mobilebar">

                	

                </div>

            

            	

                         	

            </div>	

            <!-- Header ends -->