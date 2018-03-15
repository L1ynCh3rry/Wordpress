<?php get_header(); ?>



<!-- RIGHT SITE SIDE -->
                    <div class="col-lg-8 bg-light nopadding">
                        <article class="rightSiteSide">

                            <!-- WORK EXPERIENCES PART -->
                            <section>
                                <div class="row px-3 px-lg-5 py-3 py-lg-5 no-gutters bg-white boxshadow zoomInUp animated">
                                    <div class="col-12">
                                        <p class="redtext borderbottomlink"><b><?php echo $post->post_date; ?></b></p>
                                        <p class="pnomargin"><b><?php echo $post->post_except; ?></b></p>
                                        <p><b><?php echo $post->post_title; ?></b></p>

                                        <?php echo $post->post_content; ?>
                                    </div>
                                </div>
                            </section>


                            <!-- EDUCATION PART -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white boxshadow zoomInUp animated">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa fa-graduation-cap"></span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-2 pr-lg-4 font14">
                                        <h2 class="h2respo pb-4">Refarances</h2>
                                        <h3 class="h3respo pnomargin">Mr.John Doe</h3>
                                        <p class="redtext borderbottomlink pnomargin">Founder &amp; CEO, Lorem Ipsum</p>
                                        <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing eli, sed do eiusmod 
                                            tempor incididunt ut labore et dolore magna aliqua</p>
                                        <hr>
                                        <h3 class="h3respo pnomargin">Mr.Anwar Hosain</h3>
                                        <p class="redtext borderbottomlink pnomargin">Co-Founder &amp; CEO. MedA-ID</p>
                                        <p class="pb-4">Lorem ipsum dolor sit amet, consecterum adipiscing elit, sed do eiusmod
                                            dolore magna aliqua. Ut enim ad quis nostrud exercitation</p>
                                    </div>
                                </div>
                            </section>

                        </article>
                    </div><!-- RIGHT SITE SIDE ENDING -->



<?php get_footer();