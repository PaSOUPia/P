<?php 
include('header.php');?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="contact.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="imgs/01.ico">
    <title>SKY LINE</title>
    </head>
     <body>
   <!-- contact section -->
        <section id="contact-section">
           
           <div class="container">
           	        <h2 style="margin: 30px;">Contact Us</h2>
                        <p style="color: pink;">“A quiet secluded life in the country, with the possibility of being useful to people to whom it is easy to do good, and who are not accustomed to have it done to them; then work which one hopes may be of some use; then rest, nature, books, MUSIC, love for one’s neighbor — such is my idea of HAPPINESS.”</br>
                            – Leo Tolstoy</p>
                            <div class="contact-form">

                                <!-- First grid -->
                                        <div>
                                        <i class="fa fa-location-arrow"></i><span class="form-info">PIANEKONEW</span><br>
                                        <i class="fa fa-phone" > </i><span class="form-info">258-2512-205</span><br>
                                        <a href="https://accounts.google.com/" title="" target="_blank" class="social-button"><i class="fa fa-envelope"></i></a><span class="form-info">LPN@gmail.com</span><br>
                                            
                                  <a href="https://www.facebook.com/SKYLINEmusic-103945631619119" title="Facebook" target="_blank" class="social-button"><i class="fa fa-facebook-official"></i></a><span class="form-info">SKYLINE fanpage</span>
                                            <!-- *mygmail* -->
                                        </div>
                            
                                <!-- second grid -->
                            <div>   
                    <form>     
                    <!-- <form action="mail_handler.php" method="POST" name="form" class="form-box"> -->
                        <!-- <input type="text" name ="firstname" placeholder="Your Name" required>
                        <input type="text" name ="lastname" placeholder="Last Name"><br>
                        <input type="Email" name ="email" placeholder="Email" required><br>
                        <input type="text" name ="phone" placeholder="Enter your phone"><br>
                        <textarea name="msg" placeholder="Message" rows="5" required></textarea><br>
                            <button class="submit" name="submit" >Send Message</button>  -->
                     <!-- create submit send form to *mygmail* -->

                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.957524936592!2d109.30778511477205!3d13.101877390770477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316fec4301d63b03%3A0x500507c54d474a97!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBQaMO6IFnDqm4!5e0!3m2!1svi!2s!4v1608575000748!5m2!1svi!2s" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </form>

                   <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="103945631619119"
  theme_color="#6699cc"
  logged_in_greeting="Hi, - This is skYLine - How can we help you?"
  logged_out_greeting="Hi, - This is skYLine - How can we help you?">
      </div>

           </div>
        </section>
        

        <?php include 'footer.php';?>
     

        


     </body>
     </html>