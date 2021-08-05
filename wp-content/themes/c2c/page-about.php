<?php get_header(); ?>

<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/about.png');background-size:100%">
    <h3>About Us</h3>
    <?php the_breadcrumb(); ?>
</div>

<div class="about-us">
    <div class="row">
        <div class="col-lg-6 about-us-content">
            <h1>WHO WE ARE</h1>
            <p>We are C2C - a contract hospitality furniture manufacturer. With over 15 years of experience in
                customizing furniture solutions for 5 star hotels across North America, our forte lies in delivering
                world class quality and unmatched service.
                <br>
                <br>
                Headquartered in Davidson, North Carolina, and with international offices in Vietnam and Indonesia, we
                at C2C pride in combining domestic craftsmanship with our expert ability to engineer and source
                custom-made furniture products and hotel furniture worldwide.
                <br>
                <br>
                As design evolves, so does C2C.
            </p>
            <a href="<?php  echo get_permalink( get_page_by_path( 'about' ) );?>"><button class="btn btn-primary"
                    style="width:8rem;margin-top:1rem;">Learn more</button></a>
        </div>
        <div class="col-lg-6 about-us-video">
            <video width="480" height="280" controls>
                <source src="movie.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>





<div class="why-us" style="background:#f2f2f2;">
    <div class="row">
        <div class="col-lg-6 why-us-content">
            <h1>WHY US</h1>
            <p>We are C2C - a contract hospitality furniture manufacturer. With over 15 years of experience in
                customizing furniture solutions for 5 star hotels across North America, our forte lies in delivering
                world class quality and unmatched service.
                <br>
                <br>
                Headquartered in Davidson, North Carolina, and with international offices in Vietnam and Indonesia, we
                at C2C pride in combining domestic craftsmanship with our expert ability to engineer and source
                custom-made furniture products and hotel furniture worldwide.
                <br>
                <br>
                As design evolves, so does C2C.
            </p>
        </div>
        <div class="col-lg-6 why-us-detail">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wu1.png" class="d-block">
                    <h5>to be The Exclusive Preferred Manufacturer for BLLA</h5>
                    <p>quality and unmatched service</p>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wu2.png" class="d-block">
                    <h5>quality and unmatched service</h5>
                    <p>quality and unmatched service</p>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wu3.png" class="d-block">
                    <h5>Putting your needs in the center of our operations</h5>
                    <p>in customizing furniture solutions</p>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wu4.png" class="d-block">
                    <h5>15 years of experience</h5>
                    <p>in customizing furniture solutions</p>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="our-team">
    <h4>OUR TEAM</h4>
    <div class="row">
        <?php
            $args = array(
                'post_type' => 'our_team',
                'orderby'   => 'ID',
                'order' => 'ASC',
            );

            $f_product = new WP_Query( $args );
            if ( $f_product->have_posts() ) {
                while ( $f_product->have_posts() ) : $f_product->the_post();
                        ?>
        <div class="col-md-4 our-team-item">
            <div class="thumb-box">
                <a href="">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                    <span class="overlay-box">
                        <span class="meta"><?php the_excerpt();?></span>
                        <span class="main-title"><?php the_title();?></span>
                        <span class="description"><?php the_content();?></span>
                    </span>
                </a>
            </div>

        </div>

        <?php

        endwhile;
        }
    ?>
    </div>
</div>

<div class="get-quote">
    <h4>GET NEW & AMAZING FURNITURE FROM US!</h4>
    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
        Velit officia consequat duis enim velit mollit. Exercitation veniam conseq
        uat sunt nostrud amet.
    </p>
    <a href="<?php  echo get_permalink( get_page_by_path( 'contact-us' ) );?>"><button class="btn btn-primary">Get A
            Quote</button></a>
</div>

<?php get_footer(); ?>