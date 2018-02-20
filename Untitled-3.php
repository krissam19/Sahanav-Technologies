<!DOCTYPE html>
<!--[if lt IE 7]><html dir="ltr" lang="en-US" class="ie6"><![endif]-->
<!--[if IE 7]><html dir="ltr" lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html dir="ltr" lang="en-US" class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html dir="ltr" lang="en-US"><!--<![endif]-->
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="content-type" />
		<meta name="description" content=" responsive html5 website template" />
		<meta name="keywords" content="html5, css3, template, responsive, adaptive" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		 <link rel="shortcut icon" href="images/favicon.ico" >
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/styles/fonts.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/custom-icons.css" media="screen" />
		<link rel="stylesheet" href="css/styles/retina.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans|Oswald|Play|Numans'; rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../fonts.googleapis.com/css@family=Oxygen_3A400,300,700" type="text/css" />
		<link rel="stylesheet" href="../fonts.googleapis.com/css@family=Headland+One" type="text/css" />
		<link rel="stylesheet" href="css/styles/jackbox.css" type="text/css" media="screen" />
        
		<script src="js/modernizr.custom.all.js" type="text/javascript"></script>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.js" type="text/javascript"></script>
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/styles/ie.css" type="text/css" />
			<link rel="stylesheet" href="css/styles/ie_css3.css" type="text/css" media="screen" />
		<![endif]-->
		<title>Antillo Consulting | Contact us</title>	
	</head>
	<body>
<?php
if(isset($_POST['submit'])){
$to = "jeysingh.anbu@antillocs.com";
$subject = $_POST['contact_subject'];
$message = 
"<html>
  <body>
   <table width='100%' border='0' style='box-shadow: 10px 10px 5px #888888;'  >
  <tr>
    <th scope='row' style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>Name</th>
    <td style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>$_POST[contact_name]</td>
  </tr>
  <tr>
    <th scope='row' style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>E-mail</th>
    <td style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>$_POST[contact_email]</td>
  </tr>
  <tr>
    <th scope='row' style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>Subject</th>
    <td style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>$_POST[contact_subject]</td>
  </tr>
  <tr>
    <th scope='row' style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>Message</th>
    <td style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>$_POST[contact_message]</td>
  </tr>
</table>

  </body>
</html>";
$from = $_POST['contact_name'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
}

?>


		<section id="page">
			<a href="#" id="slide_top"></a>


			<header id="header">
				<div class="header_inner">
					
					<a class="logo" href="index.html"><img src="images/logo.png" width="460" height="107" alt="" /></a>
					
					<div class="cl"></div>
					<nav>
						<ul id="navigation">
							<li ><a href="index.html"><span>Home</span></a></li>
							<li ><a href="services.html"><span>Services</span></a>
							
							</li>
							<li ><a href="careers.html"><span>Careers</span></a>
								
							</li>
							<li ><a href="about.html"><span>About Us</span></a>
								
							</li>
							<li class="current_page_item"><a href="contact.html"><span>Contact</span></a></li>
						</ul>
						<div class="cl"></div>
					</nav>
					<div class="cl"></div>
				</div>
			</header>


			<div class="wrap_headline">
			
			</div>
			<div class="wrap_cont_nav">
				<div class="cont_nav">
					<a href="index.html">Home</a>&nbsp;/&nbsp;Contact
				</div>
			</div>
			<div class="container">			
				<section id="middle">
					<div class="middle_inner">

						<div class="content_wrap sidebar_left">
							<section id="content">
								<div class="entry">
								
									<h3>Reach out, we’d love to hear from you</h3>
                                    
									<div class="cmsms-form-builder">
										<div class="box success_box" style="display:none;">
                                        Mail id :
											<table>
												<tr>
													<td>&nbsp;</td>
													<td>Thank You!<br>Your message has been sent successfully.</td>
												</tr>
											</table>
										</div>
										<script type="text/javascript">
											jQuery(document).ready(function () { 
												jQuery('#contactform').validationEngine('init');
												
												jQuery('#contactform a#contact_form_formsend').click(function () { 
													var form_builder_url = jQuery('#contact_form_url').val();
													
													jQuery('#contactform .loading').animate( { opacity : 1 }, 250);
													
													if (jQuery('#contactform').validationEngine('validate')) { 
														jQuery.post(form_builder_url, { 
															contact_name : jQuery('#contact_name').val(), 
															contact_email : jQuery('#contact_email').val(), 
															contact_url : jQuery('#contact_url').val(), 
															contact_subject : jQuery('#contact_subject').val(), 
															contact_message : jQuery('#contact_message').val(), 
															formname : 'contact_form', 
															formtype : 'contactf' 
														}, function () { 
															jQuery('#contactform .loading').animate( { opacity : 0 }, 250);
															
															document.getElementById('contactform').reset();
															
															jQuery('#contactform').parent().find('.box').hide();
															jQuery('#contactform').parent().find('.success_box').fadeIn('fast');
															jQuery('html, body').animate( { scrollTop : jQuery('#contactform').offset().top - 100 }, 'slow');
															jQuery('#contactform').parent().find('.success_box').delay(5000).fadeOut(1000);
														} );
														
														return false;
													} else { 
														jQuery('#contactform .loading').animate( { opacity : 0 }, 250);
														
														return false;
													}
												} );
											} );
										</script>
										<form action="" method="post" id="contactform">
											
											<div class="form_info cmsms_input">
												<label for="contact_name">Name <span class="color2">*</span></label>
	<input type="text" name="contact_name" id="contact_name" value="" size="22" tabindex="3" class="validate[required,minSize[3],maxSize[100],custom[onlyLetterSp]]"/>
											</div>
											<div class="cl"></div>
											<div class="form_info cmsms_input">
												<label for="contact_email">Email <span class="color2">*</span></label>
	<input type="text" name="contact_email" autocomplete="off" id="contact_email" value="" size="22" tabindex="4" class="validate[required,custom[email]]" />
											</div>
										
											<div class="cl"></div>
											<div class="form_info cmsms_input">
												<label for="contact_subject">Subject <span class="color2">*</span></label>
		<input type="text" name="contact_subject" id="contact_subject" value="" size="22" tabindex="6" class="validate[required,minSize[3],maxSize[100]]" />
											</div>
											<div class="cl"></div>
											<div class="form_info cmsms_textarea">
												<label for="contact_message">Message <span class="color2">*</span></label>
<textarea name="contact_message" id="contact_message"  style="width:39.5%;" class="validate[required,minSize[3]]" ></textarea>
											</div>
											<div class="cl"></div>
										
										
											
											
											<div><input type="hidden" name="contact_form_url" id="contact_form_url" value="" /></div><!-- Here you need to set the path to the sendmail file -->
											<div>
									<!--<a href="#" class="button" id="contact_form_formsend" tabindex="8"><span>Send a message</span></a>-->
                  <input type="Submit" name="submit" class="button" value="Send a message" style="cursor:pointer;" >                  
                                    
												<div class="loading"></div>
											</div>
										</form>
									</div>
								</div>
							</section>

				
							<section id="sidebar">
								<div class="one_first"><br><br>
                               <strong>Contact Us</strong><br><br>
                               
									<i class="icon-mail-alt" ></i> <a href="mailto:info@antillocs.com">info@antillocs.com</a>	
								</div>
								<div class="one_first">
									
								</div>
								<div class="one_first">
							
								</div>
							</section>


						</div>
					</div>
				</section>


<section id="bottom">
					<div class="bottom_inner">
				<div class="one_third">
							<aside id="custom-twitter-4" class="widget widget_custom_twitter_entries">
								<script type="text/javascript">
									jQuery(document).ready(function () { 
										jQuery('#custom-twitter-4_tweets').jTweetsAnywhere( { 
											username : 'cmsmasters', 
											count : 2, 
											showTweetFeed : { 
												showTwitterBird : false, 
												showGeoLocation : false, 
												showInReplyTo : false, 
												includeRetweets : false 
											} 
										} ); 
									} );
								</script>
								<h2 class="widgettitle">Twitter</h2>
								<div id="custom-twitter-4_tweets">loading tweets...</div>
							</aside>
						</div>
	<div class="one_third">
							<aside class="widget widget_links">
								<h2 class="widgettitle">Contact Us</h2>
								



<i class="icon-mail-alt"></i> <a href="mailto:info@antillocs.com">info@antillocs.com</a><br><img  src="images/ind.png"> +91 44 32576711<br>
<img  src="images/us.png">  +1 201 484 8890
							</aside>
						</div>
				
						<div class="one_third">
					
								<h2 class="widgettitle" style="margin-left:75px;"><i class="icon-user"></i>Follow us</h2>
								<div class="social_block">
						<ul>
							<li>
								<a href="https://twitter.com/" target="_blank">
									<img alt="twitter" src="images/socicons/twitter.png">
								</a>
							</li>
							<li>
								<a href="http://in.linkedin.com/" target="_blank">
									<img alt="linkedin" src="images/socicons/linkedin.png">
								</a>
							</li>
							<li>
								<a href="http://facebook.com/" target="_blank">
									<img alt="facebook" src="images/socicons/facebook.png">
								</a>
							</li>
					</ul>
						
					</div>
							
						</div>
					</div>
				</section>		


			</div>
		</section>




		<footer id="footer">
			<div class="footer_inner" >
            <div style="text-align:center;">
				<span >© 2013 Antillo Consulting. All Rights Reserved</span>
				</div>
			</div>
		</footer>


		<script src="js/jackbox.js" type="text/javascript"></script>
		<script src="js/jackbox-lib.js" type="text/javascript"></script>
		<script src="js/jquery.script.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-lang.js" type="text/javascript"></script>
		<script src="js/jquery.jtweetsanywhere.js" type="text/javascript"></script>
		<script src="js/respond.js" type="text/javascript"></script>
	</body>
</html>

