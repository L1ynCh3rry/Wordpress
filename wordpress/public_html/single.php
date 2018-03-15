<?php


get_header();
?>

<!-- RIGHT SITE SIDE -->
                    <div class="col-lg-8 bg-light nopadding">
                        <article class="rightSiteSide">

                            <!-- WEBSITE REDESIGN PART -->
                            <section>
                                <div class="row pb-1 pb-lg-2 no-gutters bg-white boxshadow fadeIn animated">
                                    <div class="col-12 text-left">
                                        <article class="bg-white pb-4">
                                            <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                                            <figure class="figurenomargin">
                                                <img src="<?php echo $pimage[0]; ?>" alt=""/>
                                            </figure>
                                            <div class="pt-2 pt-lg-4 pb-2 pb-lg-3 pl-2 pl-lg-4 text-white bg-gradient3">
                                                <h2 class="h2respo"><?php echo $post->post_title; ?></h2>
                                                <p>Share us and help our community grow</p>
                                                <div class="ssk-group ssk-sm">
                                                    <a href="" class="ssk ssk-facebook"></a>
                                                    <a href="" class="ssk ssk-twitter"></a>
                                                    <a href="" class="ssk ssk-google-plus"></a>
                                                    <a href="" class="ssk ssk-pinterest"></a>
                                                    <a href="" class="ssk ssk-tumblr"></a>
                                                    <a href="" class="ssk ssk-linkedin"></a>
                                                </div>
                                            </div>
                                            <p class="pt-2 pt-lg-3 px-1 px-lg-4 text-left"><?php echo portfolio_get_more_excerpt($post->post_content); ?></p>

                                        </article>
                                    </div>
                                </div>
                            </section>




                            <!-- COMMENT -->
                            <section>
                                <div class="row mt-2 mt-lg-4 no-gutters bg-white boxshadow">
                                    <div class="col-3">
                                        <figure class="figurenomargin">
                                            <img src="img/comment1.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-9 text-left pl-2 pl-lg-4 pt-2 pt-lg-3">
                                        <h3 class="h3respo">Jenny Doe</h3>
                                        <p class="redtext borderbottomlink font14 textrespo">February 18, 2015 at 2:56 pm</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                </div>
                            </section>


                            <!-- REPLY -->
                            <section>
                                <div class="row no-gutters mt-2 mt-lg-4">
                                    <div class="col-2">

                                    </div>
                                    <div class="col-10">
                                        <div class="row no-gutters boxshadow">
                                            <div class="col-3 bg-white">
                                                <figure class="figurenomargin">
                                                    <img src="img/comment2.png" alt=""/>
                                                </figure>
                                            </div>
                                            <div class="col-9 text-left pl-2 pl-lg-4 pt-2 pt-lg-3 bg-white">
                                                <h3 class="h3respo">Jenny Doe</h3>
                                                <p class="redtext borderbottomlink font14 textrespo">February 18, 2015 at 3:56 pm</p>
                                                <p>Yahooooo,I you did this</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <!-- EDUCATION PART -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white boxshadow">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa fa-comments-o"></span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-2 pr-lg-4 font14">
                                        <h2 class="h2respo">LEAVE US A COMMENT!</h2>
                                        <div class="row mt-5">
                                            <div class="col-11">



                                                <!----------------- CONTACT FORM -------------------->
                                                <form class="form-contact" method="post" action="">
                                                    <div class="form-group">
                                                        <label>Your Name*</label>
                                                        <input name="name" value="" class="form-control">
                                                        <div class="error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter a date</label>
                                                        <input name="date" value="" class="form-control" >
                                                        <div class="error"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Message*</label>
                                                        <textarea name="message" class="form-control"></textarea>
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


<?php
get_footer();
?>