<?php get_header();?>
<div class="new-detail-container">

    <h4><?php the_title(); ?>
    </h4>
    <span> <?php echo get_the_date(); ?>| By <?php echo get_the_author()?></span>
    <div class="new-detail-content">

        <?php echo get_the_content(); ?>


    </div>


    <hr>

    <div class="post-new-control d-flex justify-content-between">
    <?php previous_post_link( '<div class="d-flex align-items-center" style="width:18rem;text-align:start;cursor:pointer">
            <i class="fas fa-arrow-left"></i>
            <span style="margin-left:1rem">%link</span>
        </div>' ); ?> 


        <?php previous_post_link( '<div class="d-flex align-items-center" style="width:18rem;text-align:end;cursor:pointer">
            <span style="margin-right:1rem">%link</span>
            <i class="fas fa-arrow-right"></i>
        </div>'); ?> 


    </div>


</div>


<?php get_footer();?>