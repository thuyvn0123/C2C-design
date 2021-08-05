<?php get_header();?>
<div class="banner" style="padding:0;height:10rem">
    <h3>Products</h3>
    <?php the_breadcrumb(); ?>
    <div class="products-control">
        <div class="row">
            <div class="col-md-6 products-funiture ">
                <p>Funiture</p>
            </div>
            <div class="col-md-6 products-finishes products-active">
                <p>Finishes</p>
            </div>
        </div>
    </div>
</div>
<div class="products-content">
    <div class="products-finishes-content">
        <div class="row">
        <?php
            $page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            if(!$page)
                $page = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
  
            $args_2 = array(
                'post_type' => 'product_finishes',
                'orderby'   => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 9,
                'paged'=>$page
            );

            $f_product_2 = new WP_Query( $args_2 );
            global $wp_query;
            // Put default query object in a temp variable
            $tmp_query = $wp_query;
            // Now wipe it out completely
            $wp_query = null;
            // Re-populate the global with our custom query
            $wp_query = $f_product_2;
            if ( $f_product_2->have_posts() ) {
                while ( $f_product_2->have_posts() ) : $f_product_2->the_post();
                        ?>
            <div class="col-md-6 col-lg-4">
                <div class="box">
                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                    <div class="box-content">
                        <h3 class="title"><?php the_title();?></h3>
                        <span class="post"><?php the_excerpt();?></span>

                    </div>
                </div>
            </div>
            <?php
                endwhile;
            }
           
            ?>

   
        </div>


        <div class="pagination">
        <?php  echo paginate_links($args_2);?>

    </div>
</div>
 
        <!-- <ul class="pagination">

            
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul> -->
    </div>
    <div class="products-funiture-content">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators products-carousel-control">
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
                    if($f_product->current_post == 0){
                        ?>
                <div data-bs-target="#carousel" data-bs-slide-to="0" class="active products-carousel-control-item"
                    aria-current="true" aria-label="Slide 1">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                </div>

                <?php
                    }else{
                        ?>
                <div data-bs-target="#carousel" data-bs-slide-to="<?php echo $f_product->current_post; ?>"
                    class=" products-carousel-control-item" aria-current="true" aria-label="Slide 2">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                </div>
                <?php
                    }

                endwhile;
            }

            ?>



            </div>
            <div class="carousel-inner product-carousel-item">
                <?php
            if ( $f_product->have_posts() ) {
                while ( $f_product->have_posts() ) : $f_product->the_post();
                    if($f_product->current_post == 0){
                        ?>
                <div class="carousel-item active">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                    <p class="product-carousel-title"><?php the_title();?></p>

                </div>
                <?php
                    }else{
                        ?>
                <div class="carousel-item ">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'d-block') );?>
                    <p class="product-carousel-title"><?php the_title();?></p>

                </div>
                <?php
                    }
                endwhile;
            }
            ?>



            </div>

        </div>
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


<!-- <script>
$(document).ready(function() {
    $(".products-carousel-control").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 6000,
        nav: false,
        dots: false,
        responsive: {
            1199: {
                items: 4
            }
        }
    });
});
</script> -->

<script>
$(".products-funiture-content").hide();

$('.products-finishes').on('click', function() {
    $(".products-funiture-content").hide();
    $(".products-finishes-content").show(200);
    $('.products-finishes').addClass("products-active");
    $('.products-funiture').removeClass("products-active");

});

$('.products-funiture').on('click', function() {
    $(".products-funiture-content").show(100);
    $(".products-finishes-content").hide();
    $('.products-funiture').addClass("products-active");
    $('.products-finishes').removeClass("products-active");


});

</script>


<?php get_footer();?>