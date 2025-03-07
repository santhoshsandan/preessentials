<?php include('header.php');?>
<body style="background-image:url(img/contact.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
  <!--Intro-->
  <body style="background-color:#fff4e0;">
  <div id="intro">
      <div id="contact"><h1 class="text-align-center" style="padding-top:30px;padding-bottom:0px;color: #fff;font-weight:normal;font-size:80px;">Contact Us</h1></div>
      <div class="container" style="margin-top:50px;">
          <div class="row">
              <div class="col-lg-6 animated zoomIn Slow" style="background-color:rgba(255,255,255,0.7);border-radius:10px;padding:50px;height: 100%;">
                <p><span style="font-weight:bold;">PerC Essentials</span><br><br>
                413 Whitney Avenue, Unit B<br>Hamilton ON<br>L9B 0G6<br>Canada</p>
                <p>Tel: <a href="tel:12899233354" style="font-size:16px;">1 289 923 3354</a><BR>
                  Email: <a href="mailto:info@percessentials.com" style="font-size:16px;">info@percessentials.com</a></p>
              </div>
              <div class="col-lg-6 animated zoomIn Slow" style="padding: 0px 10px 20px 50px;">
                <div class="form-thankyou-message" style="display:none">
  						  <h4>Congratulations !</h4>
  						  <p>Your request has been successfully sent. We will get back to you in a day or two.</p>
  						</div>
  						<div class="form-error-message" style="display:none">
  						  <h4>Data field errors !</h4>
  						  <p class="required_name" style="display:none">Please enter your Name</p>
                            <p class="required_email" style="display:">Please enter your Email Id</p>
                            <p class="valid_email" style="display:none">Please enter valid email ID</p>
                            <p class="required_ph" style="display:">Please enter your Phone Number</p>
                            <p class="valid_ph" style="display:none">Please enter a valid Phone Number</p>
  						</div>
  					    <form class="contact-form" action="request_mail.php" method="post">

  						   <div class="form-field">
  						      <!-- <label>Name</label> -->
  							  <input name="name" class="form-control" type="text" placeholder="Your Name" />
                </div><br>

                            

                             		
                                      	<div class="form-field">
                                            <!-- <label>Email Id</label> -->
                                            <input name="email" class="form-control " type="text" placeholder="Your Email" />
  						   					</div><br>

                                     

                                      	<div class="form-field">
                                            <!-- <label>Phone</label> -->
                                            <input name="phone" class="form-control " type="text" placeholder="Your Phone Number" />
  						   					</div>
                                     

                            
<br>
  						   <div class="form-field">
  						      <!-- <label>More Details</label> -->
  							  <textarea name="message" class="form-control " placeholder="Your Comments..."></textarea>
                </div><br>
  						   <button class="btn form-button form-submit-btn" type="submit" style="background-color:#38bc1c!important;color:white;margin-left: 0px;font-size:18px!important;margin-top: 0px;"><!--<a href="#">--><span>Submit</span></button>
  						</form> <br>
        </div>
        </div>
      </div>

    </div>

  <!--End of Intro--><br><br><br><br><br>


  <!--Footer-->
  <?php include('footer.php');?>
    <!--End of Footer-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>
      
      <script type="text/javascript">
jQuery(document).ready(function(){


		var $height = '';
	if ( jQuery(window).width() > 860 ) {
    		
		$height = -60;	
	}else{
	
		$height = 60;	
	}
	jQuery('.nav-tab-sec li a').on('click', function (event) {
	
		jQuery('.nav-tab-sec li').removeClass('active');
		jQuery(this).closest('li').addClass('active');
		var get_id = jQuery(this).attr('href');
		
		
		jQuery("html, body").animate({scrollTop:jQuery(get_id).offset().top+$height}, 1000);
		event.preventDefault();
	});
	
	jQuery('.down-btn a').click(function(){
	
			var get_id_btn = jQuery(this).attr('href');
			jQuery("html, body").animate({scrollTop:jQuery(get_id_btn).offset().top+$height}, 1000);
		event.preventDefault();
	});
	
	jQuery('.getintouch-button a').click(function(){
	
			var get_id_form = jQuery(this).attr('href');
			jQuery("html, body").animate({scrollTop:jQuery(get_id_form).offset().top+$height}, 1000);
		event.preventDefault();
	});
	
	
	jQuery('.calltoaction-in .getintouch-button').click(function(){
	
			jQuery('.close').click();
			
			jQuery("html, body").animate({scrollTop:jQuery('#contact-sec').offset().top+$height}, 1000);
		event.preventDefault();
	
	});
	
	
	jQuery('.form-submit-btn').click(function(){
	
		var name = jQuery("input[name='name']").val();
		
		var email = jQuery("input[name='email']").val();
		
		var phone = jQuery("input[name='phone']").val();
		
		var msg = jQuery("textarea[name='message']").val();
		
		var err_name ='';
		var err_mail = '';
		var err_ph = '';
		
		if(name == ''){
				
				err_name = "error occurred";
				jQuery("input[name='name']").addClass('error');
				jQuery('.form-error-message').show();
				jQuery('.required_name').show();
				
		}else{
					
				err_name="";
				jQuery("input[name='name']").removeClass('error');
				jQuery('.required_name').hide();
			}
		if(email == ''){
				
				err_mail = "error occurred";	
				jQuery("input[name='email']").addClass('error');
				jQuery('.required_email').show();
				
				
		}else if( ValidateEmail(email)== false){
		
		
				err_mail = "error occurred";	
				jQuery("input[name='email']").addClass('error');
				jQuery('.required_email').hide();
				jQuery('.valid_email').show();
				
		
		}else{
		
				err_mail = "";	
				jQuery("input[name='email']").removeClass('error');
				jQuery('.required_email').hide();
				jQuery('.valid_email').hide();
		}
		
		if(phone ==''){
			
			err_ph = "error occurred";
			jQuery("input[name='phone']").addClass('error');
			jQuery('.required_ph').show();
		
		}else if(!validatePhone(phone)){
		
		
				err_ph = "error occurred";
				jQuery("input[name='phone']").removeClass('error');
				jQuery('.required_ph').hide();
				jQuery('.valid_ph').show();
		
		}else{
				err_ph = "";
				jQuery("input[name='phone']").removeClass('error');
			
		}
		
		if(err_mail =='' &&  err_name == '' && err_ph =='' ){
		
			
			jQuery('.form-error-message').hide();
			
			jQuery.post( 
			  "request_mail.php",
			  { 
					mail_request: "mail_request", name: name, mail: email, phone: phone, msg: msg
			   },
			  function(data) {
			  
						if(data =='true'){
						
							jQuery('.form-thankyou-message').show();
							jQuery(".contact-form")[0].reset();
						
						}
			 	
				 
					}
				);
			
			return false;  
		}else{
			jQuery('.form-thankyou-message').hide();
			jQuery('.form-error-message').show();
			return false;
		}	
	});
	
	
	jQuery('.list-unstyled li a').click(function(){
	
		jQuery('.list-unstyled li').removeClass('active');
		jQuery(this).closest('li').addClass('active');
		var get_catid = jQuery(this).attr('href');
		
		jQuery('.product-item-listing').hide();
		jQuery(get_catid).fadeIn(1500);
		
		return false;
		
	
	});
	
	
	jQuery('.menu-wrap').click(function(){
	
		
		jQuery('.show-menu').css({"overflow": "scroll"});
		jQuery("#close-button")[0].click();
	
	});
	
});	


$(document).ready(function(){
 // hide #back-top first
 $("#back-top").hide();
 
 // fade in #back-top
 $(function () {
  $(window).scroll(function () {
   if ($(this).scrollTop() > 400) {
    $('#back-top').fadeIn();
   } else {
    $('#back-top').fadeOut();
   }
  });

  // scroll body to 0px on click
  $('#back-top a').click(function () {
   $('body,html').animate({
    scrollTop: 0
   }, 800);
   return false;
  });
 });
});

function validatePhone(phoneText) {
var filter = /^[0-9-+]+$/;
if (filter.test(phoneText)) {
return true;
}
else {
return false;
}
}

function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    };
	
	
</script>

      
  </body>
</html>
