<?php /* Template Name: Signle Projects */ ?>


<?php get_header();?>

<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/signaturepj.png');background-size:100%">
    <h3>Signature Projects</h3>
    <?php the_breadcrumb(); ?>
</div>


<div class="projects-detail-img">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <?php 
                for($i=1;$i<=4;$i++){
                    $image[$i] = get_field('image_' . $i);
                    ?>
                <div class="carousel-item <?php if($i==1) echo 'active';?>">
                    <img src="<?php  echo $image[$i]['url'];?>" class="d-block w-100" alt="" >
                </div>
            <?php
                
            }
            ?>
           
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
</div>

<div class="projects-detail-content row mb-2">
    <div class="col-md-6 projects-detail-content-item ">
        <h5><?php the_title()?></h5>
        <p><span>Location:</span> <?php echo get_field('location')?>
            <br>
            <span>Scope of work:</span> <?php echo get_field('scope_of_work')?>
            <br>
            <span>Designer:</span> <?php echo get_field('designer')?>
        </p>
    </div>
    <div class="col-md-6 projects-detail-content-item">
        <p style="font-size:.8rem;"><?php the_content();?></p>
    </div>


</div>

<div class="projects-detail-info">

    <h5>More Information</h5>
    <div class="row projects-detail-info-content">
        <?php for($a=1;$a<=4;$a++){
            ?>
        <div class="col-md-6">
        <?php echo get_field('info_'.$a)?>

     </div>
     <?php
        }
        ?>


    </div>
</div>

<div class="related-projects">
    <h5>Related Projects</h5>

    <div class="row">
        <?php

            $args = array(
                'post_type' => 'project',
                'orderby'   => 'rand',
                'posts_per_page' => 3,
            );

            $related = new WP_Query( $args );

 
            if ( $related->have_posts() ) {
                while ( $related->have_posts() ) : $related->the_post();

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
</div>


<?php get_footer();?>