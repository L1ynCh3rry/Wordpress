<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Zavrsni projekat">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="Luka Cosic">
        <title>Zavrsni projekat</title>

        <!-- Bootstrap -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- GOOGLE FONTS -->

        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">



        <!-- CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>
        <nav class="menu">
            <ul class="side-menu list-unstyled bg-gradient">
                <?php 
                $top_menu = wp_get_nav_menu_items('MainMenu');
                
                foreach($top_menu as $menu){
                    ?>
                    <li><a href="<?php echo $menu->url; ?>" class="mt-1 hvr-icon-forward"><?php echo $menu->title; ?></a></li>
                    <?php } ?>

            </ul>
        </nav>
        <div class="menu-overlay">

        </div>




        <div class="container">
            <section>
                <div class="row justify-content-around">
                    <!-- LEFT SITE SIDE -->
                    <div class="col-lg-4 bg-gradient3 nopadding positionR">
                        <div class="toggle-menu bg-gradient3">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <section class="leftSiteSide">
                            <!-- PICTURE -->
                            <section class="rayhanSection">
                                <figure class="mb-0">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/rayhan.png" alt=""/>
                                </figure>
                                <div class="rayhan">
                                    <h2><?php echo get_field('first_name', 46); echo get_field('last_name', 46); ?></h2>
                                    <h3><?php echo get_field('position', 46); ?></h3>
                                    
                                </div>
                            </section> <!-- PICTURE END -->

                            <!-- FIRST ROW -->
                            <div class="row pt-5 text-white no-gutters insetsb">
                                <div class="col-3 text-center">
                                    <span class="fa fa-user-o"></span>
                                </div>
                                <div class="col-9 pr-4 font14">
                                    <p><?php echo get_field('about_me', 46); ?></p>
                                    <br><br>
                                </div>
                            </div>

                            <!-- SECOND ROW -->
                            <div class="row personInfo pt-4 text-white no-gutters insetsb">
                                <div class="col-3 text-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="col-9 pr-4 font14">
                                    <p class="font22"><?php echo get_field('personal_phone', 46); ?></p>
                                    <p>Mobile</p>
                                    <p class="font22"><?php echo get_field('public_phone', 46); ?></p>
                                    <p>Work</p>
                                    <br><br>
                                </div>
                            </div>

                            <!-- THIRD ROW -->
                            <div class="row personInfo pt-4 text-white no-gutters insetsb">
                                <div class="col-3 text-center">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="col-9 pr-4 font14">
                                    <p class="font22"><?php echo get_field('personal_email', 46); ?></p>
                                    <p>Mobile</p>
                                    <p class="font22"><?php echo get_field('work_email', 46); ?></p>
                                    <p>Work</p>
                                    <br><br>
                                </div>
                            </div>

                            <!-- 4TH ROW -->
                            <div class="row personInfo pt-4 text-white no-gutters insetsb">
                                <div class="col-3 text-center">
                                    <span class="fa fa-map-o"></span>
                                </div>
                                <div class="col-9 pr-4 font14">
                                    <p class="font22">24 Golden Tower <sup>(2nd floor)</sup></p>
                                    <p class="font22">Amberkhana, Sylhet</p>
                                    <p>SYL-3RF87W</p>
                                    <br><br>
                                </div>
                            </div>

                            <!-- 5TH ROW -->
                            <div class="row personInfo pt-4 text-white no-gutters insetsb">
                                <div class="col-3 text-center">
                                    <span class="fa fa-calendar-o"></span>
                                </div>
                                <div class="col-9 pr-4 skillz font14">
                                    <h2>Professional Skills</h2>
                                    <?php 
                                        $args = array(
                                            "numberposts" => -1,
                                            "post_type" => "professionalskills",
                                        );
                                        $professionalskills = get_posts($args);
                                        ?>
                                        
                                        <?php foreach($professionalskills as $e) { ?>
                                        
                                        <p class="font22 pt-3"><?php echo $e->post_title; ?></p>
                                    <div class="bg-white skill" data-skill="<?php echo $e->post_content; ?>">
                                        <div class="achieviment">
                                            <span></span>
                                        </div>
                                    </div>
                                        
                                        <?php } ?>
                                        <br><br><br>
                                </div>
                            </div>

                        </section>    
                    </div> <!-- LEFT SITE SIDE ENDING -->