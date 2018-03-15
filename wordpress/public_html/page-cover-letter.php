<?php 
/**
 * Template Name: page-cover-letter Template
 */
get_header(); 
?>



<!-- RIGHT SITE SIDE -->
                    <div class="col-lg-8 bg-light nopadding">
                        <article class="rightSiteSide">

                            <!-- WORK EXPERIENCES PART -->
                            <section>
                                <div class="row px-3 px-lg-5 py-3 py-lg-5 no-gutters bg-white boxshadow zoomInUp animated">
                                    <div class="col-12">
                                        <p class="redtext borderbottomlink"><b><?php echo $post->post_date; ?></b></p>
                                        <p class="pnomargin"><b><?php echo $post->post_except; ?></b></p>
                                        <p><b><?php echo get_field('letter_person', $post-> ID ); ?></b></p>
                                        <p><b><?php echo get_field('letter_company', $post-> ID ); ?></b></p>

                                        <?php echo $post->post_content; ?>
                                        <p><b><?php echo get_field('subtitle', $post-> ID ); ?></b></p>
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
                                        <?php 
                                        $args = array(
                                            "numberposts" => -1,
                                            "post_type" => "references",
                                        );
                                        $references = get_posts($args);
                                        ?>
                                        
                                        <?php foreach($references as $e) { ?>
                                        
                                        
                                        <h3 class="h3respo pnomargin"><?php echo $e->post_title; ?></h3>
                                        <p class="redtext borderbottomlink pnomargin"><?php echo $e->post_date; ?></p>
                                        <p class="pb-4"><?php echo $e->post_content; ?></p>
                                        
                                        <?php } ?>
                                    </div>
                                </div>
                            </section>

                        </article>
                    </div><!-- RIGHT SITE SIDE ENDING -->



<?php get_footer();