<?php 
	
// Título da sessão
$wp_customize->add_setting('cr_interest_title', array('default'=>''));
$wp_customize->add_control('cr_interest_title', array(
	'label' => __( 'Título da Sessão:', 'curriculum' ), 
	'section' => 'cr_config_interests', 
	'type' => 'text',
	'input_attrs' => array ('style' => 'margin-bottom:20px')
));

// Descrição dos interesses
$wp_customize->add_setting('cr_interest_desc_1', array('default'=>''));
$wp_customize->add_control('cr_interest_desc_1', array(
	'label' => __( 'Descreva sobre você, suas metas, personalidade, etc. (este campo equivale a um parágrafo):', 'curriculum' ), 
	'section' => 'cr_config_interests', 
	'type' => 'textarea',
	'input_attrs' => array ('style' => 'height:150px')
));

// Descrição dos interesses
$wp_customize->add_setting('cr_interest_desc_2', array('default'=>''));
$wp_customize->add_control('cr_interest_desc_2', array(
	'label' => __( 'Quer adicionar mais informações para o segundo parágrafo?', 'curriculum' ), 
	'section' => 'cr_config_interests', 
	'type' => 'textarea',
	'input_attrs' => array ('style' => 'height:150px')
));

