<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<?php wp_head();?>
</head>

<body <?php body_class()?>>

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img
                    src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if(is_home()) echo "active"?>" data-toggle="page" aria-current="page"
                            href="<?php echo home_url(); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(get_permalink()==get_permalink( get_page_by_path( 'about' ) )){ echo "active";}?>"
                            href="<?php  echo get_permalink( get_page_by_path( 'about' ) );?>">ABOUT
                            US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(get_permalink()==get_permalink( get_page_by_path( 'products' ) )){ echo "active";}?>"
                            href="<?php  echo get_permalink( get_page_by_path( 'products' ) );?>">PRODUCTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if(get_permalink()==get_permalink( get_page_by_path( 'signature-projects' )) || get_permalink()==get_permalink( get_page_by_path( 'master-list-of-projects' ))){ echo "active";}?>"
                            href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROJECTS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item  <?php if(get_permalink()==get_permalink( get_page_by_path( 'signature-projects' ) )){ echo "active";}?>"
                                    href="<?php  echo get_permalink( get_page_by_path( 'signature-projects' ) );?>">Signature
                                    Project</a></li>
                            <li><a class="dropdown-item <?php if(get_permalink()==get_permalink( get_page_by_path( 'master-list-of-projects' ) )){ echo "active";}?>"
                                    href="<?php  echo get_permalink( get_page_by_path( 'master-list-of-projects' ) );?>">Master
                                    List Of Project</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(get_permalink()==get_permalink( get_page_by_path( 'services' ) )){ echo "active";}?>"
                            href="<?php  echo get_permalink( get_page_by_path( 'services' ) );?>">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(get_permalink()==get_permalink( get_page_by_path( 'news' ) ) || get_permalink()==get_permalink( get_page_by_path( 'new-detail' ) )){ echo "active";}?>"
                            href="<?php  echo get_permalink( get_page_by_path( 'news' ) );?>">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(get_permalink()==get_permalink( get_page_by_path( 'contact-us' ) )){ echo "active";}?>"
                            href="<?php  echo get_permalink( get_page_by_path( 'contact-us' ) );?>">CONTACT US</a>
                    </li>

                </ul>
                
            </div>

            <div class="social-link d-flex">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram-square"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
            </div>

        </div>
        <?php get_search_form();?>

    </nav>

    <div id="back-to-top"> <i class="far fa-arrow-alt-circle-up"></i></div>

    <script>
    var btn = $('#back-to-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '100');
    });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>