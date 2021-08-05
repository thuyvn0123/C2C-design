<footer>

    <div class="footer-main">
        <div class="row">
            <div class="col-lg-4 footer-col-1">
                <a class="foot-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                <hr>
                <div class="d-flex align-items-center foot-contact" >
                    <i class="fas fa-phone-square"></i>                    
                    <p>+ 1 305-445-9199</p>
                </div>
                <div class="d-flex align-items-center foot-contact" >
                    <i class="fas fa-envelope-square"></i>
                    <p>info@c2cdesigns.com</p>
                </div>
                <div class="d-flex align-items-start foot-contact" >
                    <i class="fas fa-square"></i>
                    <p>209 Delburg Street Suite 133 | Davidson, NC 28036, USA</p>
                </div>
            </div>

            <div class="col-lg-4 footer-col-2">
                <h4>QUICK LINKS</h4>
                <a href="<?php  echo get_permalink( get_page_by_path( 'FAQs' ) );?>">FAQs</a>
                <br>
                <a href="<?php  echo get_permalink( get_page_by_path( 'privacy-policy' ) );?>">Privacy Policy</a>
                <br>
                
                <h4>NEWSLETTER</h4>
                <p>Join our email list for tips and useful information.</p>
                <form action="">
                    <input type="text" class="form-control" placeholder="Placeholder text ...">
                    <button type="submit" class="btn btn-foreign">Subscribe</button>
                </form>
                <div class="foot-social d-flex align-items-center">
                    <p>Follow us</p>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram-square"></i>
                </div>

            </div>

            <div class="col-lg-4 footer-col-3">
                <div class="foot-info d-flex align-items-start">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="">
                    <div>
                        <p style="font-weight:600;">@c2cdesigns_coasttocoast</p>
                        <p style="font-size:.6rem;">146 posts   446 followers   360 following</p>
                        <p><span style="font-weight:600;">C2C Designs</span> - We are C2C Designs, a custom hospitality furniture manufacturer for luxury hotels and resorts.</p>
                    </div>
                   
                </div>
                <div class="d-flex">
                    <img class="foot-img" src="<?php echo get_template_directory_uri(); ?>/images/image1.png" alt="">
                    <img class="foot-img" src="<?php echo get_template_directory_uri(); ?>/images/image2.png" alt="">
                </div>

            </div>
        </div>
    </div>

    <div class="copy-right d-flex justify-content-around">
        <p>Copyright © 2020 C2C Design. All rights reserved.</p>
        <p>Privacy Policy | FAQs</p>
    </div>
</footer>


</body>
</html>