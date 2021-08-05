<?php get_header();?>
<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/services.png');background-size:100%">
    <h3>Services</h3>
    <?php the_breadcrumb(); ?>
</div>

<div class="service-menu ">
    <div class="row">
        <div class="service-item col-md-4 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sv2.png" alt="">
            <p>CUSTOM MANUFACTURING</p>
        </div>
        <div class="service-item col-md-4 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sv1.png" alt="">
            <p>INSTALLATION</p>
        </div>
        <div class="service-item col-md-4 d-flex align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sv3.png" alt="">
            <p>PROJECT MANAGEMENT</p>
        </div>
    </div>
</div>


<div class="manufacturing">
    <h5>Custom Manufacturing</h5>
    <div class="row">
        <div class="manufacturing-item-1 col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing.png" alt="">
            <div class="manufacturing-title-1">
                <p>Casegoods</p>
            </div>
        </div>
        <div class="manufacturing-item-2 col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing.png" alt="">
            <div class="manufacturing-title-2">
                <p>Upholstery</p>
            </div>
        </div>
        <div class="col-md-8 manufacturing-double">
            <div class="manufacturing-item-3 col-xl-8 d-flex align-items-end">
                <div class="manufacturing-title-3">
                    <p>Upholstery</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing.png" alt="">

            </div>
            <div class="manufacturing-item-4 col-xl-12 d-flex align-items-end">

                <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing.png" alt="">
                <div class="manufacturing-title-4">
                    <p>Upholstery</p>
                </div>

            </div>
        </div>
        <div class="col-xl-3 manufacturing-item-5">
            <div class="manufacturing-title-5">
                <p>Upholstery</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/manufacturing1.png" alt="">

        </div>
    </div>
</div>

<div class="installation">
    <div class="installation-carousel">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/install.png" class="d-block w-100"
                        alt="">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/install.png" class="d-block w-100"
                        alt="">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/install.png" class="d-block w-100"
                        alt="">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span aria-hidden="true"><i class="far fa-caret-square-left" style="font-size:2rem;"></i></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">

                <span aria-hidden="true"><i class="far fa-caret-square-right" style="font-size:2rem;"></i></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h5>Installation</h5>
        <p>Providing turnkey installation services for all furniture products we supply, C2C has a dedicated team of
            furniture specialists, who ensure the utmost quality and care - from delivery to installation to aftercare.
        </p>

    </div>

</div>

<div class="project-management">
    <h4>Project Management</h4>
    <div class="project-management-content">
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'services',            
                'orderby'   => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 6,
            );

            $pj_management = new WP_Query( $args );

 
            if ( $pj_management->have_posts() ) {
                while ( $pj_management->have_posts() ) : $pj_management->the_post();

        ?>
            <div class="col-md-6 col-lg-6 col-xl-4 ">
                <div class="thumb-box">
                    <a href="">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                        <span class="overlay-box">
                            
                            <span class="main-title"><?php the_title();?></span>
                            <span class="meta"><?php the_excerpt();?></span>
                        </span>
                    </a>
                </div>

            </div>
            <?php endwhile;}?>



        </div>
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

<?php get_footer();?>