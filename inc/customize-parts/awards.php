<?php 

	//Título da sessão
    $wp_customize->add_setting('cr_awards_title', array('default'=>''));
	$wp_customize->add_control('cr_awards_title', array(
			'label' => __( 'Título da Sessão:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text',
			'input_attrs' => array (
				'style' => 'margin-bottom:20px'
			)
    ));

  	$wp_customize->add_setting('cr_color_award', array('default'=>''));
	$wp_customize->add_control( 
		new WP_Customize_Color_Control($wp_customize, 'cr_color_award', array(
			'label' => __( 'Cor do ícone da lista:', 'curriculum' ), 
			'section' => 'cr_config_awards',
			'settings' => 'cr_color_award'
    )));

	//Ícone da lista
    $wp_customize->add_setting('cr_awards_icon', array('default'=>''));
	$wp_customize->add_control('cr_awards_icon', array(
			'label' => __( 'Para alterar o ícone da lista, acesse "https://fontawesome.com/icons", selecione o ícone, copie na tag "<i class="fas fa-ad"></i> o código entre aspas duplas e cole-o no campo abaixo:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text',
			'input_attrs' => array (
				'placeholder' => __('ex: fas fa-ad'),
				'style' => 'margin-bottom:30px'
			)
    ));


 	//Item 1
    $wp_customize->add_setting('cr_awards_1', array('default'=>''));
	$wp_customize->add_control('cr_awards_1', array(
			'label' => __( 'Certificação / Premiação 1:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

   	//Item 2
    $wp_customize->add_setting('cr_awards_2', array('default'=>''));
	$wp_customize->add_control('cr_awards_2', array(
			'label' => __( 'Certificação / Premiação 2:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 3
    $wp_customize->add_setting('cr_awards_3', array('default'=>''));
	$wp_customize->add_control('cr_awards_3', array(
			'label' => __( 'Certificação / Premiação 3:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 4
    $wp_customize->add_setting('cr_awards_4', array('default'=>''));
	$wp_customize->add_control('cr_awards_4', array(
			'label' => __( 'Certificação / Premiação 4:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 5
    $wp_customize->add_setting('cr_awards_5', array('default'=>''));
	$wp_customize->add_control('cr_awards_5', array(
			'label' => __( 'Certificação / Premiação 5:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 6
    $wp_customize->add_setting('cr_awards_6', array('default'=>''));
	$wp_customize->add_control('cr_awards_6', array(
			'label' => __( 'Certificação / Premiação 6:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 7
    $wp_customize->add_setting('cr_awards_7', array('default'=>''));
	$wp_customize->add_control('cr_awards_7', array(
			'label' => __( 'Certificação / Premiação 7:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 8
    $wp_customize->add_setting('cr_awards_8', array('default'=>''));
	$wp_customize->add_control('cr_awards_8', array(
			'label' => __( 'Certificação / Premiação 8:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 9
    $wp_customize->add_setting('cr_awards_9', array('default'=>''));
	$wp_customize->add_control('cr_awards_9', array(
			'label' => __( 'Certificação / Premiação 9:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));

	//Item 10
    $wp_customize->add_setting('cr_awards_10', array('default'=>''));
	$wp_customize->add_control('cr_awards_10', array(
			'label' => __( 'Certificação / Premiação 10:', 'curriculum' ), 
			'section' => 'cr_config_awards', 
			'type' => 'text'
    ));