<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.agilesoftsolutions.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 14 Sep 2013 05:24:31 GMT -->
<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <link rel="icon" href="img/fav2.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/fav2.ico" type="image/x-icon" />
   <meta name="description" content="Contact Us, Support, Software Company in South Florida, Broward County, Palm Beach County, Miami Dade county, Miami, Fort Lauderdale and Palm Beach, About Sahanav Technologies, Sahanav Technologies Services" />
<meta name="keywords" content="contact us, support, software company in South Florida, Broward County, Palm Beach County, Miami Dade county, Miami, Fort Lauderdale and Palm Beach, About Sahanav Technologies, Sahanav Technologies Services" />

<?php


if(isset($_POST['sub']))
{
	
   
    //change this to your email.
    $to = "krissam@sahanavtechnologies.com";
	//$to = "jeysinghanbu@gmail.com";
    $from = "$_POST[email]";
    $subject = "$_POST[name]";

    //begin of HTML message
    $message = "
<html>
  <body>
   <table width='100%' border='0' style='border: 1px solid #E0E0E0;'>
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
'>$_POST[name]</td>
  </tr>
  <tr>
    <th scope='row' style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>Phone</th>
    <td style='background: -moz-linear-gradient(center top , #EDEDED, #EBEBEB) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #E0E0E0;
    border-top: 1px solid #FAFAFA;
    padding: 21px 25px 22px;
'>$_POST[phone]</td>
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
'>$_POST[email]</td>
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
'>$_POST[message]</td>
  </tr>
</table>

  </body>
</html>";

   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);

   
echo "<script type='text/javascript'>";
echo "alert('Contact form submitted! We will be in touch soon.');";
echo "</script>";


}
	?> 

     
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
      	<script type="text/javascript" src="js/forms.js"></script>
		<script>
			$(window).load(function(){
			  $().UItoTop({ easingType: 'easeOutQuart' });
			})
		</script>	
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
  <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style type="text/css">
 .spans{ display: inline-block;
    float: left;
    margin: 0;
    min-height: 46px;
    overflow: hidden;
    position: relative;}
  </style>
</head>

<body>
    <!--==============================header=================================-->
    <header class="sub-header">
      <div class="container">
          <div class="navbar navbar_ clearfix">
             <div class="navbar-inner">      
                <h1 class="brand"><a href="index.html"><img src="img/logo.png" alt="" ></a></h1> 
                <div class="nav-collapse nav-collapse_ collapse">
                    <ul class="nav sf-menu">
                      <!--<li class="active"><a href="index.html">home</a></li> --->
					  <li class="sub-menu"><a href="service.html">services</a>
                        <ul>
                          <li><a href="web_application_development.html">Web Application Development</a></li>
                          <li><a href="application-integration.html">Application Integration</a></li>
                          <li><a href="mobile_application_development.html">Mobile Application Development</a></li>
						  <li><a href="websit_design_development.html">Website Design and Development</a></li>
						  <li><a href="usability_user_interface_design.html">Usability and User Interface Design</a></li>
						  <li><a href="maintenance_support.html">Maintenance and Support</a></li>
						  <li><a href="dedicated_development_team.html">Dedicated Development Teams</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu"><a href="index-3.html">solutions</a>
					  <ul>
					 	  <li><a href="web_enterprise_portals.html">Web and Enterprise Portals</a></li>
						  <li><a href="content_document_mgmt.html">Content and Document Management </a></li>
						  <li><a href="social_networking.html">Social Networking Software</a></li>
						  <li><a href="ecommerce_online_payements.html">Ecommerce and Online Payments</a></li>
						  <li><a href="business_intelligence.html">Business Intelligence and Data Mining</a></li>
						  <li><a href="media_content.html">Media Content Distribution</a></li>
						  <li><a href="business_process_automation.html">Business Process Automation</a></li>
						  <li><a href="health_care.html">Health Care</a></li>
						  <li><a href="multi-level_marketing.html">Multi-level Marketing</a></li>
						 
					  </ul>
					  </li>
					  <li class="sub-menu"><a href="seo.html">SEO</a>
					  <ul>
					 	  <li><a href="seo_services.html">SEO Services Overview </a></li>
						  <li><a href="guaranteed_seo.html">Guaranteed SEO</a></li>
						  <li><a href="contact.php">SEO Quote Request</a></li>
						  <li><a href="top_10_ranking.html">Top 10 Ranking FAQ</a></li>
						  <li><a href="seo_consulting.html">SEO Consulting</a></li>
						  <li><a href="choosing_seo_company.html">Choosing a SEO Company</a></li>
						 
					  </ul>
					  </li>
                      <li class="sub-menu"><a href="index-1.html">company</a>
					  <ul>
					 	  <li><a href="overview.html">Overview</a></li>
						  <li><a href="why_us.html">Why Us</a></li>
						  <li><a href="career.html">Careers </a></li>
						  <li><a href="our_team.html">Our Team</a></li>
						  <li><a href="quality_management.html">Quality Management</a></li>
						  <li><a href="methodology.html">Methodology </a></li>
						   
						  <li><a href="term_conditions.html">Terms And Conditions</a></li>
					  </ul>
					  </li>
					 <!--- <li class="sub-menu"><a href="index-3.html">Technology</a>
					  <ul>
					 	  <li><a href="#">.Net </a></li>
						  <li><a href="#">PHP </a></li>
						  <li><a href="#">Java </a></li>
						  <li><a href="#">Ruby on Rails </a></li>
						  <li><a href="#">Mobile Platforms</a></li>
						  <li><a href="#">Databases</a></li>
						  <li><a href="#">Web 2.0</a></li>
						  <li><a href="#">RIAs </a></li>
					  </ul>
					  </li>-->
                      <li class="active"><a href="contact.php">contact us </a></li>
                    </ul>
                 </div>
              </div>  
            </div>
        </div>
    </header>
    <!--==============================content=================================-->
    <div id="content">
      <div class="container">
        <div class="row">
          <div class="span4">
              <h4>Contact Info</h4>
              <div class="map">
             
  <!--    <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+15800+Pines+Blvd,+Suite+336,+Pembroke+Pines,+FL+33027+USA&amp;aq=&amp;sll=20.98352,82.752628&amp;sspn=47.897148,79.013672&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=15800+Pines+Bl%20d+%23336,+Pembroke+Pines,+Broward,+Florida+33027,+United+States&amp;ll=26.007347,-80.356064&amp;spn=0.023142,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed">       
    </iframe> -->
   <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=13147+SW+29th+St,+Miramar,+FL+33027+USA&amp;aq=&amp;sll=20.983588,82.752628&amp;sspn=50.703693,79.013672&amp;doflg=ptm&amp;ie=UTF8&amp;hq=&amp;hnear=13147+SW+29th+St,+Miramar,+Florida+33027,+United+States&amp;t=m&amp;ll=25.990452,-80.322075&amp;spn=0.027003,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=13147+SW+29th+St,+Miramar,+FL+33027+USA&amp;aq=&amp;sll=20.983588,82.752628&amp;sspn=50.703693,79.013672&amp;doflg=ptm&amp;ie=UTF8&amp;hq=&amp;hnear=13147+SW+29th+St,+Miramar,+Florida+33027,+United+States&amp;t=m&amp;ll=25.990452,-80.322075&amp;spn=0.027003,0.036478&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a>
   </small>
     
              </div>
              <address class="address-2">
              <strong class="text-info">13147 SW 29th St, <br> Miramar, FL 33027 USA</strong>
              <span>Telephone:</span>+1 954 483 9265<br>
			  <!--<span>Telephone:</span>+1 954 362 5196<br>
			  <span>FAX :</span>+1 954 362 5245<br>
             -->
              E-mail: <a href="mailto:contact@sahanavtechnologies.com" class="link-2"><u>contact@sahanavtechnologies.com</u></a>
          </address>
		 <!--- <address class="address-2">
              <strong class="text-info">32 3rd FlOOR, KRISHNA MARKET, <br>KALKA JI, NEW DELHI 110019, INDIA </strong>
              <span>Telephone:</span>+91 11 465 515 65<br>
			  <span>Telephone:</span>+91 11 405 437 23<br>
			  <span>FAX :</span>+91 11 465 515 64<br>
             
              E-mail: <a href="mailto:kumar@agilesoftsolutions.com" class="link-2"><u>kumar@agilesoftsolutions.com</u></a>
          </address>  id="contact-form"-->
		</div>  
        <div class="span8">
          <h4>Get In Touch</h4>
         <form action="contact.php" method="post" class="contact-form" >
              <div class="success">Contact form submitted!<strong><br>We will be in touch soon.</strong> </div>
              <fieldset>
                  <label class="name">
                   <input type="text" name="name"  placeholder="Name:" required >						
                   <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>						
                  </label><br>
                  <label class="email">
                  <input type="email" name="email"  placeholder="E-mail:" required>						
                       <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>						
                  </label><br>
                 	<span class="spans">					
                       <input type="text" name="phone" placeholder="Phone:" required>						
                       <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>						
                 </span><br>	
				
                  <label class="message">						
                       <textarea name="message" placeholder="Message:" required ></textarea>						
                       <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>						
                  </label>
            </fieldset>
              <div class="pull-right">
                  
                  <input type="submit" class="link" name="sub" value="Submit" style="width:60px;" >
                  <input type="reset" class="link" naname="reset" value="Reset" style="width:60px;" >
              </div>
          </form>
		</div>  
        </div>
      </div>  
    </div>
    <!--==============================footer=================================-->
    <footer>
      <div class="container">
         <div class="row">
           <div class="span3 float2">
           	<!--			<ul class="social-icons">
            	<li><a target="_blank" href="http://www.facebook.com/"><img src="img/icon-1.png" alt="Facebook" title="Facebook"></a></li>
                <li><a target="_blank" href="http://www.linkedin.com/"><img src="img/icon-2.png" alt="LinkedIn" title="LinkedIn"></a></li>
                <li><a target="_blank" href="https://twitter.com/"><img src="img/icon-3.png" alt="Twitter" title="Twitter"></a></li>
            </ul>-->
           </div>
           <div class="footer-lists float2">
           		<div class="span2">
                  <ul class="list">
                    
                    <li><a href="mobile_application_development.html">Mobile Application Development</a></li>
                    <li><a href="maintenance_support.html">Maintenance and Support</a></li>
                    <li><a href="dedicated_development_team.html">Dedicated Development Teams</a></li>
                  </ul>
               </div>
               <div class="span2">
                  <ul class="list">
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="our_team.html">Our Team</a></li>
                    <li><a href="quality_management.html">Quality Management</a></li>
                    
                  </ul>
               </div>
               <div class="span2">
                  <ul class="list">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="top_10_ranking.html">Top 10 Ranking FAQ</a></li>
                    <li><a href="seo_consulting.html">SEO Consulting</a></li>
                    <li><a href="certifications.html">Certifications</a></li>
                  </ul>
               </div>
           </div>
           <div class="span3 footer-logo float">
              <div class="clearfix"><a href="index.html"><img src="img/footer-logo.png" alt=""></a><span>&copy; 2013</span></div>
             <!-- {%FOOTER_LINK} --></span>
           </div>
         </div>  
      </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

<!-- Mirrored from www.agilesoftsolutions.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 14 Sep 2013 05:24:31 GMT -->
</html>