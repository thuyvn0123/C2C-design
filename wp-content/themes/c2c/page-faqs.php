<?php get_header();?>

<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/signaturepj.png');background-size:100%">
    <h3>FAQs</h3>
    <?php the_breadcrumb(); ?>
</div>


<div class="faqs-menu ">
    <div class="row">
        <div class="faqs-menu-item col-lg-3 general-info faqs-active">
            <p style="padding:.8rem 0">General Information</p>
        </div>
        <div class="faqs-menu-item col-lg-3 product-info ">
            <p style="padding:.8rem 0">Product Information</p>
        </div>
        <div class="faqs-menu-item col-lg-3 orders-info ">
            <p style="padding:.8rem 0"> Orders </p>
        </div>
        <div class="faqs-menu-item col-lg-3 freight-info ">
            <p style="padding:.8rem 0">Freight</p>
        </div>

    </div>
</div>

<div class="faqs-content">
    <div class="faqs-general">
        <?php
            $args1 = array(
                'post_type' => 'faqs',
                'category_name' =>'general-information',
                'orderby'   => 'ID',
                'order' => 'DESC',

            );
            $general = new WP_Query( $args1 );

            if ( $general->have_posts() ) {
                while ( $general->have_posts() ) : $general->the_post();
        ?>
        <div class="faqs-item row align-items-center">
            <div class="col-lg-5"> <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
            </div>
            <div class="col-lg-7">
                <h5><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
            </div>

        </div>

        <?php endwhile;
            }
            ?>


    </div>

    <div class="faqs-product">
        <?php
            $args2 = array(
                'post_type' => 'faqs',
                'category_name' =>'product-information',
                'orderby'   => 'ID',
                'order' => 'DESC',

            );
            $product = new WP_Query( $args2 );

            if ( $product->have_posts() ) {
                while ( $product->have_posts() ) : $product->the_post();
        ?>
        <div class="faqs-item row align-items-center">
            <div class="col-lg-5"> <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
            </div>
            <div class="col-lg-7">
                <h5><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
            </div>

        </div>
        <?php endwhile;
            }
            ?>


    </div>

    <div class="faqs-orders">
        <?php
            $args3 = array(
                'post_type' => 'faqs',
                'category_name' =>'orders',
                'orderby'   => 'ID',
                'order' => 'DESC',

            );
            $orders = new WP_Query( $args3 );

            if ( $orders->have_posts() ) {
                while ( $orders->have_posts() ) : $orders->the_post();
        ?>
        <div class="faqs-item row align-items-center">
            <div class="col-lg-5"> <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
            </div>
            <div class="col-lg-7">
                <h5><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
            </div>

        </div>
        <?php endwhile;
            }
            ?>


    </div>

    <div class="faqs-freight">
        <?php
            $args4 = array(
                'post_type' => 'faqs',
                'category_name' =>'freight',
                'orderby'   => 'ID',
                'order' => 'DESC',

            );
            $freight = new WP_Query( $args4 );

            if ( $freight->have_posts() ) {
                while ( $freight->have_posts() ) : $freight->the_post();
        ?>
        <div class="faqs-item row align-items-center">
            <div class="col-lg-5"> <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
            </div>
            <div class="col-lg-7">
                <h5><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
            </div>

        </div>
        <?php endwhile;
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

<script>
$('.faqs-product').hide();
$('.faqs-orders').hide();
$('.faqs-freight').hide();
$('.general-info').on('click', function() {
    $('.general-info').addClass("faqs-active");
    $('.product-info').removeClass("faqs-active");
    $('.orders-info').removeClass("faqs-active");
    $('.freight-info').removeClass("faqs-active");

    $('.faqs-general').show(100);
    $('.faqs-product').hide();
    $('.faqs-orders').hide();
    $('.faqs-freight').hide();

});
$('.product-info').on('click', function() {
    $('.general-info').removeClass("faqs-active");
    $('.product-info').addClass("faqs-active");
    $('.orders-info').removeClass("faqs-active");
    $('.freight-info').removeClass("faqs-active");

    $('.faqs-general').hide();
    $('.faqs-product').show(100);
    $('.faqs-orders').hide();
    $('.faqs-freight').hide();

});
$('.orders-info').on('click', function() {
    $('.general-info').removeClass("faqs-active");
    $('.product-info').removeClass("faqs-active");
    $('.orders-info').addClass("faqs-active");
    $('.freight-info').removeClass("faqs-active");

    $('.faqs-general').hide();
    $('.faqs-product').hide();
    $('.faqs-orders').show(100);
    $('.faqs-freight').hide();

});
$('.freight-info').on('click', function() {
    $('.general-info').removeClass("faqs-active");
    $('.product-info').removeClass("faqs-active");
    $('.orders-info').removeClass("faqs-active");
    $('.freight-info').addClass("faqs-active");

    $('.faqs-general').hide();
    $('.faqs-product').hide();
    $('.faqs-orders').hide();
    $('.faqs-freight').show(100);

});
</script>
<?php get_footer();?>