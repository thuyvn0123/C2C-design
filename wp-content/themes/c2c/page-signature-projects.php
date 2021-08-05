<?php get_header();?>
<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/signaturepj.png');background-size:100%">
    <h3>Signature Projects</h3>
    <?php the_breadcrumb(); ?>
</div>

<div class="signature-container">
    <div class="row">
        <?php
            $args = array(
                'post_type' => 'project',
                'orderby'   => 'ID',
                'order' => 'DESC',
                'posts_per_page' => 9,
            );

            $signature = new WP_Query( $args );
 
            if ( $signature->have_posts() ) {
                while ( $signature->have_posts() ) : $signature->the_post();
        ?>
        <div class="col-md-4">
            <a href="<?php the_permalink();?>">
                <div class="box">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
                    <div class="box-content">
                        <h3 class="title"><?php the_title();?></h3>
                        <span class="post"><?php the_excerpt();?></span>

                    </div>
           
            </div>
            </a>
        </div>
    <?php 
        endwhile;
    }
    ?>




</div>
<a href="<?php  echo get_permalink( get_page_by_path( 'master-list-of-projects' ) );?>"><button class="btn btn-primary"
        style="width:12rem;margin-top:1rem;">View All Projects</button></a>



</div>

<div class="get-quote">
        <h4>GET NEW & AMAZING FURNITURE FROM US!</h4>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
             Velit officia consequat duis enim velit mollit. Exercitation veniam conseq
             uat sunt nostrud amet.
        </p>
        <a href="<?php  echo get_permalink( get_page_by_path( 'contact-us' ) );?>"><button class="btn btn-primary">Get A Quote</button></a>
</div>

<?php get_footer();?>