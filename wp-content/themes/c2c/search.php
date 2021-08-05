<?php get_header();?>
<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/services.png');background-size:100%">
    <h3>Search Result</h3>
    <?php the_breadcrumb(); ?>
</div>

<div class="search-result">
    <h4>Search Results for “<?php echo get_search_query();?>”</h4>
    <p><?php echo count($posts); ?> results found</p>

    <div class="search-result-container row">
        <?php 
            if (have_posts() ): while( have_posts() ): the_post();
        ?>
        <div class="col-md-12 search-result-item">
            <a href="<?php the_permalink();?>">
                <div class="row">
                    <div class="col-xl-4">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'') );?>
                    </div>
                    <div class="col-xl-8">
                        <h4><?php echo get_post_type();?></h4>
                        <h5><?php the_title()?></h5>
                        <p><?php echo get_the_date()?> | By <?php echo get_the_author()?></p>
                        <p><?php the_excerpt()?></p>

                    </div>
                </div>
            </a>

        </div>
        <hr>
        <?php endwhile;
    endif;
    ?>



    </div>


</div>


<?php get_footer();?>