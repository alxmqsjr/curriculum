<?php 
	
	//Título da sessão
    $wp_customize->add_setting('cr_jobs_title', array('default'=>''));
	$wp_customize->add_control('cr_jobs_title', array(
			'label' => __( 'Título da Sessão:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)
    ));

	// Empresa 1
    $wp_customize->add_setting('cr_office_1', array('default'=>''));
	$wp_customize->add_control('cr_office_1', array(
			'label' => __( 'Cargo na 1ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_company_1', array('default'=>''));
	$wp_customize->add_control('cr_company_1', array(
			'label' => __( 'Nome da 1ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_date_work_1', array('default'=>''));
	$wp_customize->add_control('cr_date_work_1', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_jobs_1', array('default'=>''));
	$wp_customize->add_control('cr_jobs_1', array(
			'label' => __( 'Descrição das atividades:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));


	//Empresa 2
    $wp_customize->add_setting('cr_office_2', array('default'=>''));
	$wp_customize->add_control('cr_office_2', array(
			'label' => __( 'Cargo na 2ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_company_2', array('default'=>''));
	$wp_customize->add_control('cr_company_2', array(
			'label' => __( 'Nome da 2ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_date_work_2', array('default'=>''));
	$wp_customize->add_control('cr_date_work_2', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_jobs_2', array('default'=>''));
	$wp_customize->add_control('cr_jobs_2', array(
			'label' => __( 'Descrição das atividades:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));


	//Empresa 3
    $wp_customize->add_setting('cr_office_3', array('default'=>''));
	$wp_customize->add_control('cr_office_3', array(
			'label' => __( 'Cargo na 3ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_company_3', array('default'=>''));
	$wp_customize->add_control('cr_company_3', array(
			'label' => __( 'Nome da 3ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_date_work_3', array('default'=>''));
	$wp_customize->add_control('cr_date_work_3', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_jobs_3', array('default'=>''));
	$wp_customize->add_control('cr_jobs_3', array(
			'label' => __( 'Descrição das atividades:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));


	//Empresa 4
    $wp_customize->add_setting('cr_office_4', array('default'=>''));
	$wp_customize->add_control('cr_office_4', array(
			'label' => __( 'Cargo na 4ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_company_4', array('default'=>''));
	$wp_customize->add_control('cr_company_4', array(
			'label' => __( 'Nome da 4ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_date_work_4', array('default'=>''));
	$wp_customize->add_control('cr_date_work_4', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_jobs_4', array('default'=>''));
	$wp_customize->add_control('cr_jobs_4', array(
			'label' => __( 'Descrição das atividades:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'textarea', 
			'input_attrs' => array(
				'style' => 'margin-bottom:50px'
			)
    ));


  	//Empresa 5
    $wp_customize->add_setting('cr_office_5', array('default'=>''));
	$wp_customize->add_control('cr_office_5', array(
			'label' => __( 'Cargo na 5ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_company_5', array('default'=>''));
	$wp_customize->add_control('cr_company_5', array(
			'label' => __( 'Nome da 5ª Empresa:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_date_work_5', array('default'=>''));
	$wp_customize->add_control('cr_date_work_5', array(
			'label' => __( 'Período (ex: Maio de 2020 - Junho de 2021):', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'text', 
    ));
    $wp_customize->add_setting('cr_jobs_5', array('default'=>''));
	$wp_customize->add_control('cr_jobs_5', array(
			'label' => __( 'Descrição das atividades:', 'curriculum' ), 
			'section' => 'cr_config_work', 
			'type' => 'textarea', 
    ));