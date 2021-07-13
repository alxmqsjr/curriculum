<?php 
	
	//Título da sessão
    $wp_customize->add_setting('cr_skill_title', array('default'=>''));
	$wp_customize->add_control('cr_skill_title', array(
			'label' => __( 'Título da Sessão:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)
    ));

	//Desativa uma das listas
    $wp_customize->add_setting('cr_skill_check', array('default'=>''));
	$wp_customize->add_control('cr_skill_check', array(
			'label' => __( 'Quero preencher apenas UMA lista', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'checkbox',
			'input_attrs' => array (
				'style' => 'margin-bottom:50px'
			)
    ));

	// Título da primeira lista
    $wp_customize->add_setting('cr_skill_title_1', array('default'=>''));
	$wp_customize->add_control('cr_skill_title_1', array(
			'label' => __( 'Título da primeira lista:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)
    ));



	// Conhecimento 1
    $wp_customize->add_setting('cr_bskill_1', array('default'=>''));
	$wp_customize->add_control('cr_bskill_1', array(
			'label' => __( 'Conhecimento 1:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 2
    $wp_customize->add_setting('cr_bskill_2', array('default'=>''));
	$wp_customize->add_control('cr_bskill_2', array(
			'label' => __( 'Conhecimento 2:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 3
    $wp_customize->add_setting('cr_bskill_3', array('default'=>''));
	$wp_customize->add_control('cr_bskill_3', array(
			'label' => __( 'Conhecimento 3:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 4
    $wp_customize->add_setting('cr_bskill_4', array('default'=>''));
	$wp_customize->add_control('cr_bskill_4', array(
			'label' => __( 'Conhecimento 4:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 5
    $wp_customize->add_setting('cr_bskill_5', array('default'=>''));
	$wp_customize->add_control('cr_bskill_5', array(
			'label' => __( 'Conhecimento 5:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 6
    $wp_customize->add_setting('cr_bskill_6', array('default'=>''));
	$wp_customize->add_control('cr_bskill_6', array(
			'label' => __( 'Conhecimento 6:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:50px'
			)
    ));



	// Título da segunda lista
    $wp_customize->add_setting('cr_skill_title_2', array('default'=>''));
	$wp_customize->add_control('cr_skill_title_2', array(
			'label' => __( 'Título da segunda lista:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)			 
    ));

	// Conhecimento 1
    $wp_customize->add_setting('cr_skill_1', array('default'=>''));
	$wp_customize->add_control('cr_skill_1', array(
			'label' => __( 'Conhecimento 1:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 2
    $wp_customize->add_setting('cr_skill_2', array('default'=>''));
	$wp_customize->add_control('cr_skill_2', array(
			'label' => __( 'Conhecimento 2:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 3
    $wp_customize->add_setting('cr_skill_3', array('default'=>''));
	$wp_customize->add_control('cr_skill_3', array(
			'label' => __( 'Conhecimento 3:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 4
    $wp_customize->add_setting('cr_skill_4', array('default'=>''));
	$wp_customize->add_control('cr_skill_4', array(
			'label' => __( 'Conhecimento 4:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 5
    $wp_customize->add_setting('cr_skill_5', array('default'=>''));
	$wp_customize->add_control('cr_skill_5', array(
			'label' => __( 'Conhecimento 5:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));

	// Conhecimento 6
    $wp_customize->add_setting('cr_skill_6', array('default'=>''));
	$wp_customize->add_control('cr_skill_6', array(
			'label' => __( 'Conhecimento 6:', 'curriculum' ), 
			'section' => 'cr_config_skills', 
			'type' => 'text', 
    ));