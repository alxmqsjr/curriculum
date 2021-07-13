<?php

	//Título da sessão
    $wp_customize->add_setting('cr_educ_title', array('default'=>''));
	$wp_customize->add_control('cr_educ_title', array(
			'label' => __( 'Título da Sessão:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)
    ));


	//Escola 1
    $wp_customize->add_setting('cr_inst_1', array('default'=>''));
	$wp_customize->add_control('cr_inst_1', array(
			'label' => __( 'Instituição de ensino 1:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Curso
    $wp_customize->add_setting('cr_course_1', array('default'=>''));
	$wp_customize->add_control('cr_course_1', array(
			'label' => __( 'Curso da instituição 1:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Período
    $wp_customize->add_setting('cr_date_educ_1', array('default'=>''));
	$wp_customize->add_control('cr_date_educ_1', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Mais informações
    $wp_customize->add_setting('cr_educ_more_1', array('default'=>''));
	$wp_customize->add_control('cr_educ_more_1', array(
			'label' => __( 'Mais informações sobre sua formação (premiações, conquistas, desempenho...):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));



	// Escola 2
    $wp_customize->add_setting('cr_inst_2', array('default'=>''));
	$wp_customize->add_control('cr_inst_2', array(
			'label' => __( 'Instituição de ensino 2:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Curso
    $wp_customize->add_setting('cr_course_2', array('default'=>''));
	$wp_customize->add_control('cr_course_2', array(
			'label' => __( 'Curso da instituição 2:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Período
    $wp_customize->add_setting('cr_date_educ_2', array('default'=>''));
	$wp_customize->add_control('cr_date_educ_2', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Mais informações
    $wp_customize->add_setting('cr_educ_more_2', array('default'=>''));
	$wp_customize->add_control('cr_educ_more_2', array(
			'label' => __( 'Mais informações sobre sua formação (premiações, conquistas, desempenho...):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));



 	// Escola 3
    $wp_customize->add_setting('cr_inst_3', array('default'=>''));
	$wp_customize->add_control('cr_inst_3', array(
			'label' => __( 'Instituição de ensino 3:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Curso
    $wp_customize->add_setting('cr_course_3', array('default'=>''));
	$wp_customize->add_control('cr_course_3', array(
			'label' => __( 'Curso da instituição 3:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Período
    $wp_customize->add_setting('cr_date_educ_3', array('default'=>''));
	$wp_customize->add_control('cr_date_educ_3', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Mais informações
    $wp_customize->add_setting('cr_educ_more_3', array('default'=>''));
	$wp_customize->add_control('cr_educ_more_3', array(
			'label' => __( 'Mais informações sobre sua formação (premiações, conquistas, desempenho...):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));



 	// Escola 4
    $wp_customize->add_setting('cr_inst_4', array('default'=>''));
	$wp_customize->add_control('cr_inst_4', array(
			'label' => __( 'Instituição de ensino 4:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Curso
    $wp_customize->add_setting('cr_course_4', array('default'=>''));
	$wp_customize->add_control('cr_course_4', array(
			'label' => __( 'Curso da instituição 4:', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Período
    $wp_customize->add_setting('cr_date_educ_4', array('default'=>''));
	$wp_customize->add_control('cr_date_educ_4', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'text', 
    ));

	//Mais informações
    $wp_customize->add_setting('cr_educ_more_4', array('default'=>''));
	$wp_customize->add_control('cr_educ_more_4', array(
			'label' => __( 'Mais informações sobre sua formação (premiações, conquistas, desempenho...):', 'curriculum' ), 
			'section' => 'cr_config_educ', 
			'type' => 'textarea'
    ));