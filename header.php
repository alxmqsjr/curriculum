<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <?php echo get_theme_mod('cr_font'); ?>
        <?php if (get_theme_mod('cr_fontname')) :?>
            <style>
                *{font-family: '<?php echo get_theme_mod('cr_fontname'); ?>', sans-serif !important;}
            </style>
        <?php endif; ?>
        <!-- Core theme CSS (includes Bootstrap)-->
        <?php require get_template_directory() . '/inc/color.php'; ?>
        <?php wp_head(); ?>
    </head>
    <body id="page-top" <?php body_class(); ?>>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">

            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">
                    <?php if(get_theme_mod('cr_name')) {echo get_theme_mod('cr_name');} else {?>Clarence<?php } ?> 
                    <?php if(get_theme_mod('cr_lastname')) {echo get_theme_mod('cr_lastname');} else {?>Taylor<?php } ?>
                </span>
                <span class="d-none d-lg-block">
                    <?php if (get_theme_mod('cr_photo')): ?>
                      <?php  echo wp_get_attachment_image( 
                        get_theme_mod('cr_photo'), 
                        array('500', '500'), 
                        "", 
                        array('class' => 'img-fluid img-profile rounded-circle mx-auto mb-2') ); ?>
                    <?php else: ?>
                        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" alt="" />
                    <?php endif; ?>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div style="display: block; margin:0 auto;">
                    <ul class="navbar-nav">
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_1')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#about'; ?>">
                                <?php if (get_theme_mod('cr_menu_1')) { echo get_theme_mod('cr_menu_1'); } else { ?>Sobre<?php } ?> 
                            </a>
                        </li>
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_2')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#experience'; ?>">
                                <?php if (get_theme_mod('cr_menu_2')) { echo get_theme_mod('cr_menu_2'); } else { ?>Experiência<?php } ?>
                            </a>
                        </li>
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_3')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#education'; ?>">
                                <?php if (get_theme_mod('cr_menu_3')) { echo get_theme_mod('cr_menu_3'); } else { ?>Educação<?php } ?>
                            </a>
                        </li>
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_4')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#skills'; ?>">
                                <?php if (get_theme_mod('cr_menu_4')) { echo get_theme_mod('cr_menu_4'); } else { ?>Conhecimentos<?php } ?>
                             </a>
                        </li>
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_5')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#interests'; ?>">
                                <?php if (get_theme_mod('cr_menu_5')) { echo get_theme_mod('cr_menu_5'); } else { ?>Interesses<?php } ?> 
                            </a>
                        </li>
                        <li class="nav-item" <?php if(get_theme_mod('cr_menu_check_6')) { echo "style=\"display:none !important;\""; } ?>>
                            <a class="nav-link js-scroll-trigger" href="<?php  echo get_home_url().'/#awards'; ?>">
                                <?php if (get_theme_mod('cr_menu_6')) { echo get_theme_mod('cr_menu_6'); } else { ?>Certificações<?php } ?>
                             </a>
                        </li>
                    </ul>
 
                    <?php
                        wp_nav_menu(
                            array(
                                'theme-location' => 'Principal',
                                'fallback_cb' => false,
                                'depth' => 1,
                                'container' => false,
                                'menu_class' => 'navbar-nav'                        
                            )
                        );
                    ?>                
                </div>
            </div>
        </nav>