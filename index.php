<?php get_header(); ?>        

        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about" <?php if(get_theme_mod('cr_menu_check_1')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h1 class="mb-0" style="font-size: 4.5em !important;">
                        <?php if(get_theme_mod('cr_name')) {echo get_theme_mod('cr_name');} else {?>Clarence<?php } ?>
                        <span class="text-primary"><?php if(get_theme_mod('cr_lastname')) {echo get_theme_mod('cr_lastname');} else {?>Taylor<?php } ?></span>
                    </h1>
                    <div class="subheading mb-5">
                        <?php if(get_theme_mod('cr_mail')) { echo get_theme_mod('cr_mail'); echo " · ";} else {?>nome@email.com · <?php } ?><?php if(get_theme_mod('cr_phone')) { echo get_theme_mod('cr_phone'); echo " · ";} else {?>(22) 2222-2222 · <?php } ?>
                        <a class="resume-section-link" href="<?php $urlSite = get_theme_mod('cr_site'); echo "https://{$urlSite}";?>" target="_blank">
                            <?php if(get_theme_mod('cr_site')) {echo get_theme_mod('cr_site');} else {?>meusite.com.br<?php } ?>
                        </a>
                    </div>
                    <p class="lead mb-5"><?php if(get_theme_mod('cr_description-profile')) {echo get_theme_mod('cr_description-profile');} else {?>I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.<?php } ?></p>
                    <div class="social-icons">
                        <?php if(get_theme_mod('cr_linkedin')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_linkedin');?>"><i class="fab fa-linkedin-in"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_github')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_github');?>"><i class="fab fa-github"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_twitter')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_twitter');?>"><i class="fab fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_facebook')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_facebook');?>"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_instagram')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_instagram');?>"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_pinterest')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_pinterest');?>"><i class="fab fa-pinterest"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_youtube')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_youtube');?>"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                        <?php if(get_theme_mod('cr_academy')) : ?>
                            <a class="social-icon" target="_blank" href="<?php echo get_theme_mod('cr_academy');?>"><i class="fas fa-graduation-cap"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Experience-->
            <section class="resume-section" id="experience" <?php if(get_theme_mod('cr_menu_check_2')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php if(get_theme_mod('cr_jobs_title')) { echo get_theme_mod('cr_jobs_title'); } else { ?>Experiência<?php } ?></h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php if(get_theme_mod('cr_office_1')) { echo get_theme_mod('cr_office_1'); } else { ?>
                                    Web Developer
                                <?php } ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php if(get_theme_mod('cr_company_1')) { echo get_theme_mod('cr_company_1'); } else { ?>
                                    Intelitec Solutions
                                <?php } ?>
                            </div>
                            <p>
                                <?php if(get_theme_mod('cr_jobs_1')) { echo get_theme_mod('cr_jobs_1'); } else { ?>                            
                                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                                <?php } ?>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php if(get_theme_mod('cr_date_work_1')) { echo get_theme_mod('cr_date_work_1'); } else { ?>    
                                Dezembro de 2011 - Março de 2013
                            <?php } ?>
                        </span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_office_2'); ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_company_2'); ?>
                            </div>
                            <p>
                                <?php echo get_theme_mod('cr_jobs_2'); ?>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_work_2'); ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_office_3'); ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_company_3'); ?>
                            </div>
                            <p>
                                <?php echo get_theme_mod('cr_jobs_3'); ?>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_work_3'); ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_office_4'); ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_company_4'); ?>
                            </div>
                            <p>
                                <?php echo get_theme_mod('cr_jobs_4'); ?>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_work_4'); ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_office_5'); ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_company_5'); ?>
                            </div>
                            <p>
                                <?php echo get_theme_mod('cr_jobs_5'); ?>
                            </p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_work_5'); ?>
                        </span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Education-->
            <section class="resume-section" id="education" <?php if(get_theme_mod('cr_menu_check_3')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php if(get_theme_mod('cr_educ_title')) { echo get_theme_mod('cr_educ_title'); } else { ?>Educação <?php } ?></h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php if(get_theme_mod('cr_inst_1')) { echo get_theme_mod('cr_inst_1'); } else { ?>
                                    Universidade de São Paulo
                                <?php } ?>
                            </h3>  
                            <div class="subheading mb-3">
                                <?php if(get_theme_mod('cr_course_1')) { echo get_theme_mod('cr_course_1'); } else { ?>
                                    Bacharelado em Geografia
                                <?php } ?>
                            </div> 
                            <div>
                                <?php if(get_theme_mod('cr_educ_more_1')) { echo get_theme_mod('cr_educ_more_1'); } else { ?>
                                    Laureado da turma de 2006 - Medalhista na amostra de ciência de 2005
                                <?php } ?>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php if(get_theme_mod('cr_date_educ_1')) { echo get_theme_mod('cr_date_educ_1'); } else { ?>
                                Fevereiro de 2003 - Dezembro de 2006
                            <?php } ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_inst_2'); ?>
                            </h3>   
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_course_2'); ?>
                            </div> 
                            <div>
                                <?php echo get_theme_mod('cr_educ_more_2'); ?>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_educ_2'); ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_inst_3'); ?>
                            </h3>
                                
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_course_3');?>
                            </div> 
                            <div>
                                <?php  echo get_theme_mod('cr_educ_more_3'); ?>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_educ_3'); ?>
                        </span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">
                                <?php echo get_theme_mod('cr_inst_4'); ?>
                            </h3>
                            <div class="subheading mb-3">
                                <?php echo get_theme_mod('cr_course_4'); ?>
                            </div> 
                            <div>
                                <?php echo get_theme_mod('cr_educ_more_4'); ?>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">
                            <?php echo get_theme_mod('cr_date_educ_4'); ?>
                        </span></div>
                    </div>                    
                </div>
            </section>
            <hr class="m-0" />

            <!-- Skills-->
            <section class="resume-section" id="skills" <?php if(get_theme_mod('cr_menu_check_4')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php if(get_theme_mod('cr_skill_title')) { echo get_theme_mod('cr_skill_title'); } else { ?>Conhecimentos<?php } ?></h2>
                    <div class="subheading mb-3">
                        <?php if(get_theme_mod('cr_skill_title_1')) { echo get_theme_mod('cr_skill_title_1'); } else { ?>
                            Conhecimentos básicos
                        <?php } ?>
                    </div>
                    <ul class="fa-ul mb-0" <?php if(!get_theme_mod('cr_skill_check')) { echo "style=\"margin-bottom:50px !important;\""; } ?>>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_bskill_1')) { echo get_theme_mod('cr_bskill_1'); } else { ?>
                                Design Responsivo - Mobile-First
                            <?php } ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_bskill_2')) { echo get_theme_mod('cr_bskill_2'); } else { ?>
                                Desenvolvimento Desktop com Python
                            <?php } ?>                            
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_bskill_3')) { echo get_theme_mod('cr_bskill_3'); } else { ?>
                                Arquitetura e Testes de Software 
                            <?php } ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_bskill_4')) { echo get_theme_mod('cr_bskill_4'); } else { ?>
                                Desenvolvimento Ágil e Scrum
                            <?php } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_bskill_5')) { ?>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo get_theme_mod('cr_bskill_5'); } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_bskill_6')) { ?>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo get_theme_mod('cr_bskill_6'); } ?>
                        </li>
                    </ul>
                    <div class="subheading mb-3" <?php if(get_theme_mod('cr_skill_check')) { echo "style=\"display:none !important;\""; } ?>>
                        <?php if(get_theme_mod('cr_skill_title_2')) { echo get_theme_mod('cr_skill_title_2'); } else { ?>
                            Conhecimentos intermediários e avançados
                        <?php } ?>
                    </div>
                    <ul class="fa-ul mb-0" <?php if(get_theme_mod('cr_skill_check')) { echo "style=\"display:none !important;\""; } ?>>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_skill_1')) { echo get_theme_mod('cr_skill_1'); } else { ?>
                                Design Responsivo - Mobile-First
                            <?php } ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_skill_2')) { echo get_theme_mod('cr_skill_2'); } else { ?>
                                Desenvolvimento Desktop com Python
                            <?php } ?>                            
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_skill_3')) { echo get_theme_mod('cr_skill_3'); } else { ?>
                                Arquitetura e Testes de Software 
                            <?php } ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php if(get_theme_mod('cr_skill_4')) { echo get_theme_mod('cr_skill_4'); } else { ?>
                                Desenvolvimento Ágil e Scrum
                            <?php } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_skill_5')) { ?>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo get_theme_mod('cr_skill_5'); } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_skill_6')) { ?>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo get_theme_mod('cr_skill_6'); } ?>
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Interests-->
            <section class="resume-section" id="interests" <?php if(get_theme_mod('cr_menu_check_5')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php if(get_theme_mod('cr_interest_title')) { echo get_theme_mod('cr_interest_title'); } else { ?>Interesses<?php } ?></h2>
                    <p><?php if(get_theme_mod('cr_interest_desc_1')) { echo get_theme_mod('cr_interest_desc_1'); } else { ?>
                        Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.<?php } ?>
                    </p>
                    <p class="mb-0"><?php if(get_theme_mod('cr_interest_desc_2')) { echo get_theme_mod('cr_interest_desc_2'); } else { ?>
                        When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.<?php } ?>        
                    </p>
                </div>
            </section>
            <hr class="m-0" />
            
            <!-- Awards-->
            <section class="resume-section" id="awards" <?php if(get_theme_mod('cr_menu_check_6')) { echo "style=\"display:none !important;\""; } ?>>
                <div class="resume-section-content">
                    <h2 class="mb-5"><?php if(get_theme_mod('cr_awards_title')) { echo get_theme_mod('cr_awards_title'); } else { ?>Certificações e Premiações<?php } ?></h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span>
                            <?php if(get_theme_mod('cr_awards_1')) { echo get_theme_mod('cr_awards_1'); } else { ?>Google Analytics Certified Developer<?php } ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span>
                            <?php if(get_theme_mod('cr_awards_2')) { echo get_theme_mod('cr_awards_2'); } else { ?>Mobile Web Specialist - Google Certification<?php } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_3')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_3'); 
                            } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_4')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_4');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_5')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_5');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_6')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_6');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_7')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_7');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_8')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_8');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_9')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_9');
                             } ?>
                        </li>
                        <li>
                            <?php if(get_theme_mod('cr_awards_10')) { ?>
                                <span class="fa-li"><i class="<?php if(get_theme_mod('cr_awards_icon')) { echo get_theme_mod('cr_awards_icon'); } else { ?>fas fa-trophy<?php } ?> text-warning"></i></span><?php echo get_theme_mod('cr_awards_10');
                             } ?>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <?php get_footer(); ?>