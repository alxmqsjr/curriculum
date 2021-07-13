<?php 

/*
	Customize para a versão 1.0 do Curriculum, uma adaptação para wordpress a partir
	do template bootstrap 'Resume' localizado em https://startbootstrap.com/theme/resume
*/

function curriculum_customize_register( $wp_customize ) {

    //Painel Curriculum
    $wp_customize->add_panel( 'ad_panel', array(
        'title' => __( 'Editar Currículo' ),
        'description' => 'Editar Currículo', 
        'priority' => 1, 
    ));


    //Sessão "Layout"
    $wp_customize->add_section('cr_config_layout', array ('title' => 'Layout', 'priority' => 1, 'panel' => 'ad_panel'));
 	//Settings e Controls da sessão de layout
   	require get_template_directory() . '/inc/customize-parts/menu.php';	
    require get_template_directory() . '/inc/customize-parts/layout.php';


    // Sessão "sobre"
    $wp_customize->add_section('cr_config_about', array ('title' => 'Sobre', 'priority' => 2, 'panel' => 'ad_panel'));
 	//Settings e Controls da sessão de sobre
    require get_template_directory() . '/inc/customize-parts/about.php';


    //Sessão "Experiência"
    $wp_customize->add_section('cr_config_work', array ('title' => 'Experiência', 'priority' => 3, 'panel' => 'ad_panel'));
    //Settings e Controls da sessão de experiência
    require get_template_directory() . '/inc/customize-parts/jobs.php';


    //Sessão "Educação"
    $wp_customize->add_section('cr_config_educ', array ('title' => 'Formação', 'priority' => 4, 'panel' => 'ad_panel'));
    //Settings e Controls da sessão de educação
    require get_template_directory() . '/inc/customize-parts/educ.php';


    //Sessão "Conhecimentos"
    $wp_customize->add_section('cr_config_skills', array ('title' => 'Conhecimentos', 'priority' => 5, 'panel' => 'ad_panel'));
    //Settings e Controls da sessão de conhecimentos
    require get_template_directory() . '/inc/customize-parts/skills.php';


    //Sessão "Interesses"
    $wp_customize->add_section('cr_config_interests', array ('title' => 'Interesses', 'priority' => 6, 'panel' => 'ad_panel'));
    //Settings e Controls da sessão de conhecimentos
    require get_template_directory() . '/inc/customize-parts/interests.php';


    //Sessão "Certificações"
    $wp_customize->add_section('cr_config_awards', array ('title' => 'Certificações', 'priority' => 7, 'panel' => 'ad_panel'));
    //Settings e Controls da sessão de certificações
    require get_template_directory() . '/inc/customize-parts/awards.php';

}
add_action( 'customize_register', 'curriculum_customize_register' );