<?php

/**
 * Template Name: Contact Template
 */

if(isset($_GET) && !empty($_GET)) {
    $W_name = $_GET['user'];
    $W_email = $_GET['email'];
    $W_message = $_GET['message'];
       
    
    $emailbody = "Ovo su podaci: $W_name , $W_email , $W_message";
    $result = mail("luka1cosic67@gmail.com", "poruka sa sajta", $emailbody);
}

get_header(); ?>

<!-- RIGHT SITE SIDE -->
                    <div class="col-lg-8 bg-light nopadding">
                        <article class="rightSiteSide">

                            <!-- MAP PART -->
                            <section>
                                <div class="row no-gutters bg-white boxshadow">
                                    <div class="col-12 text-center">
                                        <article>
                                            <div id="map_wrapper">
                                                <div id="map"></div>

                                            </div>

                                            <script>

                                                // Map .
                                                // When the user clicks the marker, an info window opens.
                                                function initMap() {
                                                    var uluru1 = {lat: 44.431937, lng: 20.877588};

                                                    var map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 16,
                                                        center: uluru1
                                                    });
                                                    var contentString1 = '<div id="content" class="text-center">' +
                                                            '<img  class="img-fluid" style="max-width:260px" src="img/rayhan.png"></img>' +
                                                            '<div id="bodyContent">' +
                                                            '<h2 style="margin-top:10px">Luka Cosic</h2>' +
                                                            '<p>Zike Cosica 3</p>' +
                                                            '<p>Tel:061-14-34-117</p>' +
                                                            '</div>' +
                                                            '</div>';
                                                    var infowindow1 = new google.maps.InfoWindow({
                                                        content: contentString1
                                                    });
                                                    var marker1 = new google.maps.Marker({
                                                        position: uluru1,
                                                        map: map,
                                                        title: 'Luka Cosic',
                                                        animation: google.maps.Animation.DROP
                                                    });
                                                    marker1.addListener('click', function () {
                                                        infowindow1.open(map, marker1);
                                                    });
                                                    marker1.addListener('click', toggleBounce);
                                                }
                                                function toggleBounce() {
                                                    if (marker1.getAnimation() !== null) {
                                                        marker1.setAnimation(null);
                                                    } else {
                                                        marker1.setAnimation(google.maps.Animation.BOUNCE);
                                                    }
                                                }
                                            </script>
                                            <script async defer
                                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXhSeCPjCui_heaEZGtuU7Nq4ISe3RzCs&callback=initMap&scrollwheel=false">
                                            </script>
                                        </article>
                                    </div>
                                </div> 
                            </section>


                            <!-- CONTACT FORM PART -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white boxshadow fadeInUp animated">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa fa-paper-plane-o "></span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-2 pr-lg-4 font14">
                                        <h2 class="h2respo">Contact</h2>
                                        <div class="row mt-5">
                                            <div class="col-11">



                                                <!----------------- CONTACT FORM -------------------->
                                                <form class="form-contact" method="get" action="">
                                                    <?php if(isset($result)){
                                                        if($result == TRUE){
                                                        echo '<h2>Vasa poruka je uspesno poslata</h2>';
                                                    }else{
                                                        echo '<h2>Vasa poruka nije uspesno poslata</h2>';
                                                    }}
                                                    ?>
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input name="W_name" value="" class="form-control">
                                                        <div class="error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input name="W_email" value="" class="form-control" >
                                                        <div class="error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Message*</label>
                                                        <textarea name="W_message" class="form-control"></textarea>
                                                        <div class="error"></div>
                                                    </div>
                                                    <button type="submit" class="btn hvr-shutter-in-vertical">SUBMIT</button>
                                                </form>



                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </section>

                            

                        </article>
                    </div><!-- RIGHT SITE SIDE ENDING -->


<?php get_footer(); ?>