<?php get_header();?>
<div class="banner"
    style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/services.png');background-size:100%">
    <h3>Contact Us</h3>
    <?php the_breadcrumb(); ?>
</div>
<div class="select-position">
    <div class="row">
        <div class="col-md-6  ">
            <div class="select-position-item d-flex justify-content-start align-items-center" id="p1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/position-ab.png" alt="">
                <p>Headquarters
                    <br>
                    C2C Designs
                </p>
            </div>
        </div>
        <div class="col-md-6  ">
            <div class="select-position-item d-flex justify-content-start align-items-center" id="p2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/position-ab1.png" alt="">
                <p>Ho Chi Minh Office
                    <br>
                    C2C Designs
                </p>
            </div>
        </div>

    </div>
</div>
</div>
<div id="googleMap" class="google-map"></div>

<div class="contact-container">
    <h4>GET NEW & AMAZING FURNITURE FROM US!</h4>
    <p class="contact-excerpt">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
        Velit officia consequat duis enim velit mollit. Exercitation veniam conseq
        uat sunt nostrud amet.
    </p>
    <div class="contact-form">
        <?php echo do_shortcode("[contact-form-7 id= 215 title='Contact']"); ?>
    </div>
</div>



<script>
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(10.802869, 106.732715),
        zoom: 15,

    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    var marker1 = new google.maps.Marker({
        position: {
            lat: 10.80250574651576,
            lng: 106.73400409516807
        },
    });
    var marker2 = new google.maps.Marker({
        position: {
            lat: 10.804506628955535,
            lng: 106.7298881295659
        },
    });
    document.getElementById("p2").onclick = function() {
        marker2.setMap(map);
        marker1.setMap(null);


        var infowindow = new google.maps.InfoWindow({
            content: "Headquarters Coast to Coast Designs <br><br> No. 17, Street 38, Thao Dien Ward, District 2, HCMC, Vietnam</span>"
        });

        google.maps.event.addListener(marker2, 'click', function() {
            infowindow.open(map, marker2);
            map.setZoom(20);
            map.setCenter(marker.getPosition());
        });
        map.setZoom(15);
        map.setCenter(marker1.getPosition());


    };

    document.getElementById("p1").onclick = function() {


        marker1.setMap(map);
        marker2.setMap(null);

        var infowindow = new google.maps.InfoWindow({
            content: "Headquarters Coast to Coast Designs <br><br> No. 17, Street 38, Thao Dien Ward, District 2, HCMC, Vietnam</span>"
        });

        google.maps.event.addListener(marker1, 'click', function() {
            infowindow.open(map, marker1);
            map.setZoom(20);
            map.setCenter(marker1.getPosition());
        });
        map.setZoom(15);
        map.setCenter(marker2.getPosition());

    };



}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-QJslvixmkqN_rNldVHQmzSl51ubRnY&callback=myMap">
</script>


<script>
$('#p1').click(function() {
    $('#p1').addClass('position-active');
    $('#p2').removeClass('position-active');
});
$('#p2').click(function() {
    $('#p2').addClass('position-active');
    $('#p1').removeClass('position-active');
});
</script>
<?php get_footer();?>