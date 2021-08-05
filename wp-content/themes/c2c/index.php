<?php wp_link_pages()?>
<?php get_header();?>
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slide.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>WE ARE C2C DESIGNS</h2>
                <p>Some representative placeholder content for the second slide.</p>
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


<div class="featured-projects">
    <h5>FEATURED PROJECTS</h5>
    <div class="row">
        <?php
            $args = array(
                'post_type' => 'project',
                'orderby'   => 'ID',
                'order' => 'ASC',
                'posts_per_page' => 5,
            );

            $f_project = new WP_Query( $args );
            // echo "<pre>";
            // print_r ($f_project);
            // echo "</pre>";
            if ( $f_project->have_posts() ) {
                while ( $f_project->have_posts() ) : $f_project->the_post();
                    if ($f_project->current_post == 0){
        ?>

        <div class="col-md-8">
            <a href="<?php the_permalink();?>">
                <div class="featured-projects-items">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
                    <div class="featured-projects-title">
                        <p><?php the_title() ;?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php
                    }
                    else{
                        ?>
        <div class="col-md-4">
            <a href="<?php the_permalink();?>">
                <div class="featured-projects-items">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
                    <div class="featured-projects-title">
                        <p><?php the_title() ;?></p>
                    </div>
                </div>
            </a>
        </div>

        <?php
                    }

                endwhile;
            }
            
                    
        ?>
    </div>

</div>

<div class="featured-products">
    <h5>FEATURED PRODUCTS</h5>
    <div class="d-flex owl-control justify-content-end">
        <div class="owl-prev"><i class="fas fa-chevron-left"></i></div>
        <div class="owl-next"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="featured-products-container">
        <div class="row owl-carousel owl-one">
            <?php
            $args = array(
                'post_type' => 'product_funiture',
                'orderby'   => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 5,
            );

            $f_product = new WP_Query( $args );
 
            if ( $f_product->have_posts() ) {
                while ( $f_product->have_posts() ) : $f_product->the_post();
        ?>
            <a href="<?php the_permalink();?>">
                <div class="featured-products-items">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>

                    <div class="featured-products-title">
                        <p><?php the_title() ;?></p>
                    </div>
                </div>
            </a>


            <?php 
                endwhile;
                }
            ?>

        </div>

    </div>
    <a href="<?php  echo get_permalink( get_page_by_path( 'products' ) );?>"><button class="btn btn-primary"
            style="width:12rem;margin-top:1rem;">View All Products</button></a>
</div>


<div class="about-us">
    <div class="row">
        <div class="col-lg-6 about-us-content">
            <h1>ABOUT US</h1>
            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis
                enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt
                ullamco est sit aliqua dolor do amet sint.
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

<div class="services">
    <h4>SERVICES</h4>
    <div class="row">
        <div class="col-lg-4">
            <div class="services-item">
                <i class="fas fa-industry"></i>
                <h5 class="offer-title">Manufacturing</h5>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                    duis enim velit mollit.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="services-item">
                <i class="fas fa-tools"></i>
                <h5 class="offer-title">Installation</h5>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                    duis enim velit mollit.
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="services-item">
                <i class="fas fa-tasks"></i>
                <h5 class="offer-title">Project Management</h5>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                    duis enim velit mollit.
                </p>
            </div>
        </div>



    </div>
    <a href="<?php  echo get_permalink( get_page_by_path( 'services' ) );?>"><button class="btn btn-primary"
            style="width:12rem;margin-top:1rem;">View Service Detail</button></a>

</div>

<div class="why-us">
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


<div class="testimonials">
    <h5>TESTIMONIALS</h5>

    <div class="testimonials-container d-flex align-items-center">
        <div class="owl-two-prev"><i class="far fa-caret-square-left"
                style="font-size:2rem;color:rgba(43, 47, 49, 0.3);cursor:pointer"></i></div>

        <div class="row owl-carousel owl-two ">
        <?php
            $args = array(
                'post_type' => 'testimonial',
                'orderby'   => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 5,
            );

            $testimonials = new WP_Query( $args );
 
            if ( $testimonials->have_posts() ) {
                while ( $testimonials->have_posts() ) : $testimonials->the_post();
        ?>

            <div class="testimonials-items">
                <img src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.png" class="d-block quote-icon" >
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'img-thumb d-block') );?>

                <p><?php the_content();?></p>
                <h5><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
            </div>

            <?php
            endwhile;
        }
            ?>


        </div>


        <div class="owl-two-next"><i class="far fa-caret-square-right"
                style="font-size:2rem;color:rgba(43, 47, 49, 0.3);cursor:pointer"></i></div>


    </div>
</div>

<div class="get-quote">
        <h4>GET NEW & AMAZING FURNITURE FROM US!</h4>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
             Velit officia consequat duis enim velit mollit. Exercitation veniam conseq
             uat sunt nostrud amet.
        </p>
        <a href="<?php  echo get_permalink( get_page_by_path( 'contact-us' ) );?>"><button class="btn btn-primary">Get A Quote</button></a>
</div>




<script>
$(document).ready(function() {
    $(".owl-one").owlCarousel({
        loop: false,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 6000,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1,
            },
            680:{
                items:1,
            },
            840:{
                items:2,
            },
            1000:{
                items:3,
            },
            1300:{
                items:4,
            }
        }
    });
    $('.owl-prev').click(function() {
        $('.owl-one').trigger('prev.owl.carousel');
    })
    $('.owl-next').click(function() {
        $('.owl-one').trigger('next.owl.carousel');
    })
});
</script>

<script>
$(document).ready(function() {
    $(".owl-two").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 6000,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1,
            },
            680:{
                items:1,
            },
            1000:{
                items:2,
            },
            1200:{
                items:3,
            }
        }
    });
    $('.owl-two-prev').click(function() {
        $('.owl-two').trigger('prev.owl.carousel');
    })
    $('.owl-two-next').click(function() {
        $('.owl-two').trigger('next.owl.carousel');
    })

});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php get_footer();?>