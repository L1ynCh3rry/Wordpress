<?php
get_header();

$cat_id = get_query_var('cat');
$args = array(
    "numberposts" => -1,
    "order" => "DESC",
    "orderby" => "post_date",
    "category" => "$cat_id"
);



$posts = get_posts($args);
?>

<!-- RIGHT SITE SIDE -->
<div class="col-lg-8 bg-light nopadding">
    <article class="rightSiteSide">

        <!-- NEWS PART -->
        <section>

            <?php foreach ($posts as $pt) { ?>
                <div class="row masonery has-gutters portfolio mb-2 mb-lg-4 pb-2 pb-lg-4">
                    <!-- NEWS 1 -->
                    <div class="col-12 col-lg-6 text-center">
                        <article class="bg-white mb-4 boxshadow">
                            <?php $pimage = wp_get_attachment_image_src(get_post_thumbnail_id($pt->ID), 'medium'); ?>
                            <a href="<?php echo get_permalink($pt->ID); ?>" class="figurenomargin">
                                <img src="<?php echo $pimage[0]; ?>" class='mh215' alt=""/>
                            </a>
                            <div class="pt-2 pt-lg-4 pb-2 pb-lg-3 text-white bg-gradient3">
                                <a href="<?php echo get_permalink($pt->ID); ?>" class='linkedtext'>
                                    <h2 class='d-inline-block'><?php echo $pt->post_title; ?></h2>
                                </a>
                                <p>branding, ui-ux, article,</p>
                            </div>
                            <p class="pt-2 pt-lg-3 px-1 px-lg-4 text-center"><?php echo portfolio_get_more_excerpt($pt->post_content); ?></p>
                        </article>
                    </div>
                </div>
            <?php } ?>





    </article>
</div><!-- RIGHT SITE SIDE ENDING -->

<?php
get_footer();
?>