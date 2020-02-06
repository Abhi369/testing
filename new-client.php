<?php include("constants.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="format-detection" content="telephone=no">

<title>New Client Special - DuBunne Spa Club and Massage Center</title>
<meta name="description" content="Print this coupon to receive a very special offer for our new clients at DuBunne Spa Club and Massage Center in Torrance, CA. Please mention the new client special!" />


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

<style type="text/css">
.hrc{text-align:center;}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-82621397-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
function dubunneformtrack(first_name,last_name,email,phone){
   ga('send', 'event', 'New Client Form Submit', 'Submit',{
				  'dimension12': first_name,
				  'dimension13': last_name,
				  'dimension14': email,
				  'dimension15': phone
				});
}
</script>
</head>



<body>



<!-- wrapper starts -->

<div class="wrapper">



<?php include("header.php"); ?>

            

            <?php echo $obj_salon_settings['contact_us_banner']; ?>





            </div>

            

            <!-- maincontent Starts -->

            <div class="main_content">

            	<h1 class="heading1">New Client Offer</h1>

            

            	<div class="pageinnerblk">

                	

                    <div class="contactlist">

                    	<div class="container">
<?php echo $obj_salon_settings['new_client_special']; ?>
                        	<div class="row clearfix">

                            	

                            	<div class="contactblk">

                                     

                                                                      

                                    

                                    <div class="clearfix">

                                    	<div class="formblock col-xs-12 col-sm-12">

                                        <form id="contact-form" method="post" action="" role="form">

                    

                                            <div class="messages"><p style="font-weight:bold;">Fill out the form below to have your coupon emailed to you.</p></div>

                    

                                            <div class="controls">
                    
                                                <div class="row wow fadeInUp">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input  type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name*" >
                                                            <span class="red"  id="name1"></span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row wow fadeInUp">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input  type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" >
                                                            <span class="red"  id="name1"></span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="row wow fadeInUp">
                                                    
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                            <input  type="email" id="email" name="email" class="form-control" placeholder="Email*">
                                                            <span class="red"  id="email1"></span>
                                                        </div> 
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="row wow fadeInUp">
                                                    
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                            <input  type="text" id="phone" name="phone" class="form-control" placeholder="Phone*">
                                                            <span class="red"  id="phone1"></span>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="row wow fadeInUp">
                                                    
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                             <input  type="text" placeholder="Captcha*" name="captcha" id="captcha" class="form-control" >
                                                            <span class="red"  id="phone1"></span>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="row wow fadeInUp">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div class="txtfield"><img src="image.php" id="capImg" style="width:120px;height:40px;margin:0 0 10px 0;" />
              <span class="red"  id="captcha1"></span>
              </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input id="send_message" type="button" class="btn btn-success btn-send" value="Submit">
                                                    </div>
                                                     
                                                </div>
                                              
                                            </div>
                                            <p style="margin-top:15px;">Must be a first time client of DuBunne. Cannot be used in conjunction with any other discounts, coupons, packages or promotions. Not applicable towards gift certificate purchases. No cash value or cash back.</p>
                                            
                     <div id='mail_success' class='success'></div>
                     
                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                    

                                        </form>

                                        </div>

                                                                        

                                    

                                    </div>

               

               

                                    

                               

                                

                                

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

<style>
.red {
	color: red;
	padding-top:5px;
	display:block;
}
#tel {
	color: red;
}
.green, .grn {
	color: green;
}
.success {
    border: 2px solid #5cb85c;
    color: #5cb85c;
    display: none;
    font-weight: bold;
    margin-bottom: 20px;
    padding: 20px;
	margin-top:20px;
}
#mail_fail {
    border: 1px solid #d9534f;
    color: #d9534f;
    display: none;
    font-size: 12px;
    padding: 20px;
	margin-bottom:10px;
	margin-top:20px;
}
</style>
<script type="text/javascript" src="js/main.js"></script>
<!-- SET: SCRIPTS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/owl.carousel.js"></script>

<script type="text/javascript" src="js/jquery.easing.min.js"></script>

<script type="text/javascript" src="js/jquery.vgrid.min.js"></script>




<script>$(document).ready(function () {
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#tel").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});</script>

<script type="text/javascript">
window.cde = '';


	function getCode() {
		$.get('image.php?give=1', function(data) { window.cde = data; }); 
		if(window.cde != '') { return true; } else {
			$.get('image.php?give=1', function(data) { window.cde = data; }); 
			return true; 
		}
	}
 $(document).ready(function(){
	 getCode();
        $('#send_message').click(function(e){
			
			 //e.preventDefault();
			var error = false;
			var first_name = $('#first_name').val();
            var email = $('#email').val();
			var phone = $('#phone').val();
            var last_name = $('#last_name').val();
			var coupon_type = "new_client";
			 var captcha = $('#captcha').val();
			
			// Form field validation
            if(first_name == ''){
				
                var error = true;
               $('#name1').html('This Field is required');
            }else{
               $('#name1').html('');
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email1').html('This Field is required');
            }else{
               $('#email1').html('');
            }
			
           
			if(phone.length == 0){
                var error = true;
                $('#phone1').html('This Field is required');
            }else{
                $('#phone1').html('');
            }
			if(captcha === ""){
				$('#captcha1').html(' Captcha is required.');
				 var error = 1;
			} else if(captcha !=''){
				if(error != 1){
					var error =''; 
				}
				$('#captcha1').html(' ');
			}
			var code = window.cde;
			
			if(captcha!=''){
				
			if(code != captcha){
				$('#captcha1').html('Invalid Captcha.');
				 var error = 1;
			}else{
				if(error != 1){
					var error =''; 
				} 
				$('#captcha1').html(' ');
			}		
			}
			//alert(error);
			if(error == false){
				//alert("here22r");return false;
			 $.ajax({
				 type: "POST",
				 crossDomain: true,
					url: "https://saloncloudsplus.com/wsnewemailoffers/email_coupon_add/267/3540",
					data: { first_name: first_name, phone: phone, email: email,last_name:last_name,coupon_type:coupon_type},
					success: function (returndata) {
						dubunneformtrack(first_name,last_name,email,phone);
						//alert("here"+returndata);
						$("#mail_success").show();
						$('#first_name').val("");$('#phone').val("");$('#email').val("");$('#last_name').val("");$('#captcha').val("");
						var obj = JSON.parse(returndata);
						if(obj.msg == 'Data Inserted')
						{
							$("#mail_success").html('The coupon code has been sent to your email address.');
						}else{
						$("#mail_success").html('You have already subscribed');	
						}
						myFunction();
						//$(".res").html('<img height="90" src="'+obj.path+'">');
     				// $("#mail_success").show();
    				},error: function(test){
						//alert("here");
						$("#mail_fail").show();
						}
					});
			}
			});    
    });
	
	
	var myVar;

function myFunction() {
    myVar = setTimeout(alertFunc, 3000);
}

function alertFunc() {
    window.location = 'new-client.php';
}
</script>

<!-- END: SCRIPTS -->





</body>

</html>

