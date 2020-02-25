<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Brooks and Co ak</title>

<!-- SET: FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- END: FAVICON -->

<!-- SET: STYLESHEET -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all">

<!-- END: STYLESHEET -->

 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- SET: SCRIPTS -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,100,100italic,300,300italic,400italic,500italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />

<!-- END: SCRIPTS -->
</head>

<body>

<!-- wrapper starts -->
<div class="wrapper">
	
        	
            <!-- Header Starts -->
            <?php include("header.php"); ?>

            <!-- Header ends -->
            
            <!-- maincontent Starts -->
             <div class="main_content">
                 <div class="pagecontent">   
                    <div class="contact-page-content">
                        <div class="container">
                        <?php  

if (isset($_GET['msg']) && $_GET['msg'] == 1) {echo "<div class='success_career'><h2><center style='color:green;' >Request received. We will contact you as soon as possible.</center></h2></div>";}

if (isset($_GET['msg']) && $_GET['msg'] == 2) {echo "<div class='failure_career'><h2><center style='color:#da4243;' >Incorrect captcha submitted.</center></h2></div>";}

    ?>
                             <div class="row">
                                <h2 class="contact-info heading2">Application form</h2> 
                                
                                <div class="inercon">
                                
                                	<div class="row">
                                       <div class="applicationform clearfix">
                                       		<div class="col-xs-12 col-sm-12 col-md-12 contact-right-content">
                                         
                                            <form id="carrer_form" name="application" action="reqpost-applicationform.php" method="post" enctype="multipart/form-data">
                                            <!--<form id="carrer_form" name="application" action="applicationform_submit.php" method="post" enctype="multipart/form-data">-->
                                               <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Full Name:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_fullname" id="app_fullname"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Email Address:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_email" id="app_email"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             
                                             
                                               <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">What would you like to be called?<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_wolud_call" id="app_wolud_call"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                               <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Address:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_address" id="app_address"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             	<div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">City:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_city" id="app_city"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">State:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_state" id="app_state"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">ZIP:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_zip" id="app_zip"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Home Phone:<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_home_phone" id="app_home_phone"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Mobile Phone:<span class="red">*</span> </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_mobile" id="app_mobile"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">What position are you applying for?<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_position_apply_for" id="app_position_apply_for"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Why have you applied to Brooks & Co.?<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_why_apply" id="app_why_apply"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Why do you feel you would be an asset to this salon/spa?<span class="red">*</span> </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <!--<input name="app_assist_salon" id="app_assist_salon" type="text"  placeholder="" class="contact-field-1">-->
                                                       <textarea class="contact-field-1" rows="5" name="app_assist_salon" id="app_assist_salon"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Have you worked for a salon/spa before? <br>
                                                       If yes, list location, dates, and length of employment:<span class="red">*</span>   </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <!--<input name="app_lenth_employment" id="app_lenth_employment" type="text"  placeholder="" class="contact-field-1">-->
                                                        <textarea class="contact-field-1" rows="5" name="app_lenth_employment" id="app_lenth_employment"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Have you had advanced experience or training? <br>
                                                       If yes, please describe:<span class="red">*</span> </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                      <!-- <input name="app_advanced_exp" id="app_advanced_exp" type="text"  placeholder="" class="contact-field-1">-->
                                                       <textarea class="contact-field-1" rows="5" name="app_advanced_exp" id="app_advanced_exp"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">What is your goal in life<span class="red">*</span> </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                      <!-- <input name="app_goal_life" id="app_goal_life" type="text"  placeholder="" class="contact-field-1">-->
                                                       <textarea class="contact-field-1" rows="5" name="app_goal_life" id="app_goal_life"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">What are some of the things you would like to achieve during the next year?<span class="red">*</span> </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                             <!--          <input name="app_achive_next_year" id="app_achive_next_year"  type="text"  placeholder="" class="contact-field-1">-->
                                                        <textarea class="contact-field-1" rows="5" name="app_achive_next_year" id="app_achive_next_year"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Why weren’t you able to achieve this goal before?<span class="red">*</span></label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                  <!--     <input name="app_achive_goal_before" id="app_achive_goal_before" type="text"  placeholder="" class="contact-field-1">-->
                                                        <textarea class="contact-field-1" rows="5" name="app_achive_goal_before" id="app_achive_goal_before"></textarea>
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                             	 
                                                   <div class="col-xs-12 col-sm-12">
                                             		<h3>If you were to qualify for this employment opportunity, would any of the items below be a challenge? If so, why?</h3>
													 </div>
                                              </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">A. Hours are from 8:30 a.m. to 9:30 p.m.</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_hours" id="app_hours"  type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">B.    Working weekends</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_weekdays" id="app_weekdays" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">C.    No personal telephone calls</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_no_personal_calls" id="app_no_personal_calls" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">D.    No absenteeism</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_absenteeism" id="app_absenteeism" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">E.     No tardiness</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_tardiness" id="app_tardiness" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">F.     Training classes other than working hours </label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_training_classes" id="app_training_classes" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">G.    Are you looking for a career or a job? Explain.</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                                                       <input name="app_lookin_for_job" id="app_lookin_for_job" type="text"  placeholder="" class="contact-field-1">
                                                       <span class="red"  id="name1"></span>
                                                   </div>
                                            
                                             </div>
                                            <input type="hidden" id="response" value="">
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-5">
                                                       <label for="usr">Prove that you are human</label>
                                                   </div>
                                                   <div class="col-xs-12 col-sm-7">
                          
                   <input name="captcha" id="captcha" type="text"  class="contact-field-1"> 
                  <!--<img src="https://www.brooksandcosalon.com/newcaptcha.php" />-->
     <!--             <img src="https://www.brooksandcosalon.com/image.php" id="capImg" >  -->
                   <img src="https://www.brooksandcosalon.com/image.php" id="capImg" alt="tairesalon captcha">  
                   <input type="hidden" id="captcha_ck" name="captcha_ck"> 
                                                      
                                                   </div>
                                            
                                             </div>
                                             
                                             <div class="clearfix"> 
                                                   <div class="col-xs-12 col-sm-12 text-right">
                                                       <input id="send_message" value="Send" onClick="checkSubmittedForm(this.form); return false;" class="send-button-1" type="button">
                                                   </div>
                                                   
                                            
                                             </div>
                                             </form>
                                           <div id="error" style="color: #da4243;font-size:11px;" ></div>
                                        
                                        </div>
                                       </div>
                                	</div>
                                
                                </div>
                                
                                 
                                
                             </div>
                             </div>
                    </div>
                 </div>   
                    
              </div>   
              
              
<!--			  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
-->                <?php /*?><div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999.2533192034884!2d-75.9015477851325!3d41.25982001185759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c51a762c266477%3A0xabebdefd22cad144!2s75+S+Wyoming+Ave%2C+Kingston%2C+PA+18704%2C+USA!5e0!3m2!1sen!2sin!4v1473336461035" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
               <!-- <div id="gmap_canvas" style="height:300px;width:100%; padding:0;">
                <style>#gmap_canvas img{max-width:none!important;background:none!important}
                </style>
                
                </div>-->
                
                </div><?php */?>
                <!--<script type="text/javascript"> function init_map(){var myOptions = {scrollwheel: false,zoom:14,center:new google.maps.LatLng(41.259604,-75.899567),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.259604, -75.899567)});infowindow = new google.maps.InfoWindow({content:"<b>Brooks &amp; Co. Innovative Hair Design</b>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>-->
    
            <!-- Maincontent ends -->
            
            <!-- footer starts -->
            <?php include("footer.php"); ?>
            <!-- footer ends -->
            
    
</div>
<style type="text/css">
.red {
    color: red;
	font-size:12px;
}
#tel {
	color: red;
}
.green, .grn {
	 border: 2px solid #5cb85c;
    color: #5cb85c;
    display: none;
    font-weight: bold;
    margin-bottom: 20px;
    padding: 20px;
}
.success {
    border: 2px solid #5cb85c;
    color: #5cb85c;
    display: none;
    font-weight: bold;
    margin-bottom: 20px;
    padding: 20px;
	text-align:center;
}
#mail_fail {
    border: 1px solid #d9534f;
    color: #d9534f;
    display: none;
    font-size: 12px;
    padding: 20px;
}
</style>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/easyResponsiveTabs.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.film_roll.min.js"></script>
<script type="text/javascript" src="fancyBox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!--Plug-in Initialisation-->
	<script type="text/javascript">

    // $(document).ready(function(){     

        

    //     $.ajax({      

    //       type : "GET",

    //       data : '',

    //       url : 'session.php',

    //       success: function(response) { 

    //       $("#response").val(response); 

    //       }   

    //     }); 

      

    // });

    function getParameterByName(name)

    {

      name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");

      var regexS = "[\\?&]" + name + "=([^&#]*)";

      var regex = new RegExp(regexS);

      var results = regex.exec(window.location.search);

      var status = $("#terms").is(':checked');

      if(results == null)

        return "";

      else return decodeURIComponent(results[1].replace(/\+/g, " "));

    }

$(document).ready(function () {

  //called when key is pressed in textbox

  $("#zipcode").keypress(function (e) {

     //if the letter is not digit then display error and don't type anything

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

        //display error message

        $("#tel").html("Digits Only").show().fadeOut("slow");

               return false;

    }

   });

});







/*$(document).ready(function () {

  //called when key is pressed in textbox

  $("#years").keypress(function (e) {

     //if the letter is not digit then display error and don't type anything

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

        //display error message


        $("#years1").html("Digits Only").show().fadeOut("slow");

               return false;

    }

   });

});*/

$(document).ready(function () {

  //called when key is pressed in textbox

  $("#Present_Last_Employer1_phone").keypress(function (e) {

     //if the letter is not digit then display error and don't type anything

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

        //display error message

        $("#Present_Last_Employer1_phone1").html("Digits Only").show().fadeOut("slow");

               return false;

    }

   });

});

/*$(document).ready(function () {

  //called when key is pressed in textbox

  $("#months").keypress(function (e) {

     //if the letter is not digit then display error and don't type anything

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

        //display error message

        $("#months1").html("Digits Only").show().fadeOut("slow");

               return false;

    }

   });

});*/

$(document).ready(function () {

  //called when key is pressed in textbox

  $("#telephone").keypress(function (e) {

     //if the letter is not digit then display error and don't type anything

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {

        //display error message

        $("#telephone1").html("Digits Only").show().fadeOut("slow");

               return false;

    }

   });

});

 window.cde44 = '';
    function getCode77() {
        $.get('image.php?give=1', function(data) { 
            window.cde44 = data; 
            $("#captcha_ck").val(data);
        });
        if(window.cde44 != '') {
            $("#captcha_ck").val(window.cde44);
            return true;
        } else {
            $.get('image.php?give=1', function(data) { 
                window.cde44 = data; 
                $("#captcha_ck").val(data);
            });
            return true;
        }
    }
     getCode77();
            
    function checkSubmittedForm(form)
   
    { 
 
 var error       = ""; 

    //alert("Here!");

    var pagemsg = document.getElementById("pagemsg");

    var errFlag = "";

    var msgText = "";

    var app_fullname= ($('#app_fullname').val());

    var app_email= ($('#app_email').val());

    var app_wolud_call= ($('#app_wolud_call').val());

    var app_address= ($('#app_address').val());

    var app_city= ($('#app_city').val());

    var app_state= ($('#app_state').val());

    var app_zip = ($('#app_zip').val());

    var app_home_phone= ($('#app_home_phone').val());

    var app_mobile= ($('#app_mobile').val());

    var app_position_apply_for= ($('#app_position_apply_for').val());

    var app_why_apply= ($('#app_why_apply').val());

    var app_assist_salon= ($('#app_assist_salon').val());

    var app_lenth_employment= ($('#app_lenth_employment').val());

    var app_advanced_exp= ($('#app_advanced_exp').val());

    var app_goal_life= ($('#app_goal_life').val()); 

    var app_achive_next_year= ($('#app_achive_next_year').val()); 

    var app_achive_goal_before= ($('#app_achive_goal_before').val());

    var app_hours= ($('#app_hours').val());

    var app_weekdays= ($('#app_weekdays').val());

    var app_no_personal_calls= ($('#app_no_personal_calls').val());

    var app_absenteeism= ($('#app_absenteeism').val());
	 var app_tardiness= ($('#app_tardiness').val());
	 var app_training_classes= ($('#app_training_classes').val()); 
	 var app_lookin_for_job= ($('#app_lookin_for_job').val());
    var captcha_ck = $('#captcha_ck').val(); 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var filter1= /^[0-9]*$/ ;

    //var check_detila = $('#terms').is(":checked");

       

    

    

    if(app_fullname == ""){

        
var error = error + "Name is a required field.<br />";
        var errFlag = 1; 

        }else if(app_fullname !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_email == ""){

       
var error = error + "Email Address is a required field.<br />";
         var errFlag = 1;

         }else if(app_email !=''){

         var errFlag =''; 

       

      }   

      if(app_email!=''){

      if(!filter.test(app_email)){

       
var error = error + "Invalid Email Address.<br />";
         var errFlag = 1;

         }else if(filter.test(app_email)){

         var errFlag =''; 

       

      }   

      }

    if(app_wolud_call == ""){

        
var error = error + "What would you like to be called? is a required field.<br />";
        var errFlag = 1; 

        }else if(app_wolud_call !=''){

         var errFlag = ""; 

      
      }
	  if(app_address == ""){

        
var error = error + "Address is a required field.<br />";
        var errFlag = 1; 

        }else if(app_address !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_city == ""){

        
var error = error + "City is a required field.<br />";
        var errFlag = 1; 

        }else if(app_city !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_state == ""){

        
var error = error + "State is a required field.<br />";
        var errFlag = 1; 

        }else if(app_state !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_zip == ""){

        
var error = error + "Zipcode is a required field.<br />";
        var errFlag = 1; 

        }else if(app_zip !=''){

         var errFlag = ""; 

      
      }
	  
	   if(app_mobile == ""){

        
var error = error + "Mobile phone is a required field.<br />";
        var errFlag = 1; 

        }else if(app_mobile !=''){

         var errFlag = ""; 

      
      }
	  if(app_position_apply_for == ""){

        
var error = error + "What position are you applying for? is a required field.<br />";
        var errFlag = 1; 

        }else if(app_position_apply_for !=''){

         var errFlag = ""; 

      
      }
	  if(app_why_apply == ""){

        
var error = error + "Why have you applied to Brooks & Co.? is a required field.<br />";
        var errFlag = 1; 

        }else if(app_why_apply !=''){

         var errFlag = ""; 

      
      }
	  if(app_assist_salon == ""){

        
var error = error + "Why do you feel you would be an asset to this salon/spa?  is a required field.<br />";
        var errFlag = 1; 

        }else if(app_assist_salon !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_lenth_employment == ""){

        
var error = error + "Have you worked for a salon/spa before?   is a required field.<br />";
        var errFlag = 1; 

        }else if(app_lenth_employment !=''){

         var errFlag = ""; 

      
      }
if(app_advanced_exp == ""){

        
var error = error + "Have you had advanced experience or training?   is a required field.<br />";
        var errFlag = 1; 

        }else if(app_advanced_exp !=''){

         var errFlag = ""; 

      
      }
	  if(app_goal_life == ""){

        
var error = error + "What is your goal in life?   is a required field.<br />";
        var errFlag = 1; 

        }else if(app_goal_life !=''){

         var errFlag = ""; 

      
      }
	  
	   if(app_achive_next_year == ""){

        
var error = error + "What are some of the things you would like to achieve during the next year?   is a required field.<br />";
        var errFlag = 1; 

        }else if(app_achive_next_year !=''){

         var errFlag = ""; 

      
      }
	  
	  if(app_achive_goal_before == ""){

        
var error = error + "Why weren’t you able to achieve this goal before?   is a required field.<br />";
        var errFlag = 1; 

        }else if(app_achive_goal_before !=''){

         var errFlag = ""; 

      
      }
      
         var captcha = $('#captcha').val();        
            if(captcha === ""){
                 msgText = msgText + "Captcha is required";
               var error = error + "Captcha is required <br />";
                errFlag = "1";
            }  
            else if(captcha!=''){
                if(captcha_ck != captcha){
                     msgText = msgText + "Captcha is incorrect"; 
           var error = error + "Captcha is incorrect <br />";
          errFlag = "1";  
                } 
            }   
    
    
    if ( errFlag == "" )

    {

      //document.getElementById('BotTest').value = 'JavascriptTest';

    //alert(document.getElementById('BotTest').value);

    document.forms["application"].submit();

    }else {
      
$('#error').html('<span class="red" >' + error + '</span>');
      msgText = msgText;

      document.getElementById("pagemsg").innerHTML= msgText ;

    //window.scroll(0,0);

    }

    

    }

  </script>
<!-- wrapper ends -->
</body>
</html>

