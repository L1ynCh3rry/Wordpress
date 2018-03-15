<?php 



/**
 * Template Name: Home-page Template
 */


get_header();
?>

<!-- RIGHT SITE SIDE -->
                    <div class="col-lg-8 bg-light nopadding">
                        <article class="rightSiteSide">

                            <!-- WORK EXPERIENCES PART -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 no-gutters bg-white boxshadow overflowhidden">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-check fa-stack-1x" style="margin-left:4px"></i>
                                            <i class="fa fa-check fa-inverse fa-stack-1x" style="margin-left:-3px;"></i>
                                            <i class="fa fa-check  fa-stack-1x" style="margin-left:-4px"></i>
                                        </span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-2 pr-lg-4 font14">
                                        <h2 class="h2respo bounceInRight animated">Work Experiences</h2>
                                        
                                        <?php 
                                        $args = array(
                                            "numberposts" => -1,
                                            "post_type" => "experience",
                                        );
                                        $experience = get_posts($args);
                                        ?>
                                        
                                        <?php foreach($experience as $e) { ?>
                                        
                                        <h3 class="h3respo bounceInRight animated"><?php echo $e->post_title; ?></h3>
                                        <p class="redtext borderbottomlink pnomargin bounceInRight animated"><?php echo $e->post_date; ?></p>
                                        <p class="bounceInRight animated"><?php echo $e->post_content; ?></p>
                                        
                                        
                                        <?php } ?>
                                    </div>
                                </div>
                            </section>


                            <!-- EDUCATION PART -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white boxshadow overflowhidden">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa fa-graduation-cap"></span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-2 pr-lg-4 font14">
                                        <h2 class="h2respo bounceInRight animated">Education</h2>
                                        <?php 
                                        $args = array(
                                            "numberposts" => -1,
                                            "post_type" => "education",
                                        );
                                        $education = get_posts($args);
                                        ?>
                                        
                                        <?php foreach($education as $e) { ?>
                                        
                                        <h3 class="h3respo bounceInRight animated"><?php echo $e->post_title; ?></h3>
                                        <p class="redtext borderbottomlink pnomargin bounceInRight animated"><?php echo $e->post_date; ?></p>
                                        <p class="bounceInRight animated"><?php echo $e->post_content; ?></p>
                                        
                                        
                                        <?php } ?>
                                    </div>
                                </div>
                            </section>


                            <!-- INTERESTS -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white boxshadow">
                                    <div class="col-3 col-sm-2 text-center">
                                        <span class="fa fa-pinterest-p "></span>
                                    </div>
                                    <div class="col-9 col-sm-10 pr-4 font14">
                                        <h2 class="h2respo">Interests</h2>
                                        <div class="row no-gutters interests justify-content-between pt-3">
                                            <div class="col-2"><a href="#"><span class="fa fa-music redtext"></span></a></div>
                                            <div class="col-2"><a href="#"><span class="fa fa-birthday-cake redtext"></span></a></div>
                                            <div class="col-2"><a href="#"><span class="fa fa-plane redtext"></span></a></div>
                                            <div class="col-2"><a href="#"><span class="fa fa-dribbble redtext"></span></a></div>
                                            <div class="col-2"><a href="#"><span class="fa fa-pencil redtext"></span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- FOOTER -->
                            <section>
                                <div class="row pt-3 pt-lg-5 pb-2 pb-lg-4 mt-2 mt-lg-4 no-gutters bg-white justify-content-around boxshadow">
                                    <div class="col-8 col-md-4"><a href="#"><p class="borderbottomlink redtext">www.alrayhan.com</p></a></div>
                                    <div class="col-8 col-md-4"><a href="#"><p class="borderbottomlink redtext">dribbble.com/rtralrayhan</p></a></div>
                                </div>
                            </section>

                        </article>
                    </div><!-- RIGHT SITE SIDE ENDING -->
                    
                    
                    <?php get_footer(); ?>