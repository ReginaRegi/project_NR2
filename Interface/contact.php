<?php
    include ('../interface/head.php');
    include ('../interface/header.php'); 
?>

  <div class="back-img">
     
  <br>
<section class="contact">
    <div class="contact-content container">
    <h1>We are waiting for your inquiries</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni, distinctio tempore est facere officia obcaecati beatae aperiam accusantium quas saepe et dolorum ipsum, mollitia eius.  </p>
    </div>
   <div class="contact-form container">
    
                <form class="contact-form-content" id="contact" action="contact.php" method="post">
                    <div class="input-row">
                        
                        <input type="email" name="email" placeholder="EMAIL" required autofocus>
                        <input type="text" name="subject" placeholder="SUBJECT" required>
                    </div>
                    <textarea rows="5" name="message" placeholder="MESSAGE" required></textarea>
                    <div class="btn"><button class="btn-send" type="submit" name="submit" id="contact-submit">SEND<i class="fas fa-caret-right"></i></button></div>
                </form>
            </div>
</section>
    
    <section class="map ">
        <div class="container">
        <div class="gMap "> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.696616845345!2d25.19478161586211!3d54.76772068030143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd91d9840b4a41%3A0xa17cf9c67ebcea0f!2sOrange%20Office%20verslo%20centras!5e0!3m2!1sen!2slt!4v1592748876950!5m2!1sen!2slt"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="contact-info">
            <div class="address">
                <h3>Our address</h3>
                <p>Address str. 25 - 1, 
                Address AD-15669</p>
                <p>Address State</p>
            </div>
            
            <div class="phone">
                <h3>Call or email us</h3>
                <ul>                          
                        <li><a href="tel:+3706988855"><i class="fas fa-phone"></i>+3706988855</a></li>
                        <li><a href="mailto:info@yourdomain.lt"><i class="fas fa-envelope-open"></i>info@yourdomain.lt</a></li>
                  </ul>
            </div>
        </div>
   </div>     
</section>
        
</div>
    
     <?php include ('../interface/footer.php'); ?>

  

