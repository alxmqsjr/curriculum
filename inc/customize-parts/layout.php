<?php

// Fonte de texto
$wp_customize->add_setting('cr_font', array('default'=>''));
$wp_customize->add_control( 'cr_font', array(
	'label' => __( 'Para modificar a fonte do texto, acesse "https://fonts.google.com", selecione a fonte desejada e seu estilo, copie o código do "@import" e cole-o no campo abaixo:', 'curriculum' ), 
	'section' => 'cr_config_layout', 
	'type' => 'textarea',
	'input_attrs' => array ('placeholder' => __('ex: <style>@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap");</style>')	
	)
));

// Nome da fonte
$wp_customize->add_setting('cr_fontname', array('default'=>''));
$wp_customize->add_control('cr_fontname', array(
	'label' => __( 'Digite o nome completo e correto da fonte que você escolheu (respeitando espaços, letras maiúsculas e minúsculas):', 'curriculum' ), 
	'section' => 'cr_config_layout', 
	'type' => 'text',
	'input_attrs' => array ('placeholder' => __('ex: Open Sans'), 'style' => 'margin-bottom:30px !important;')
));

// Cor primária
$wp_customize->add_setting('cr_color', array('default'=>''));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'cr_color', array(
	'label' => __( 'Cor de destaque:', 'curriculum' ), 
	'section' => 'cr_config_layout',
	'settings' => 'cr_color'
)));

// Cor do menu
$wp_customize->add_setting('cr_color_menu', array('default'=>''));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'cr_color_menu', array(
	'label' => __( 'Cor do menu:', 'curriculum' ), 
	'section' => 'cr_config_layout',
	'settings' => 'cr_color_menu'
)));

// Cor hover do menu
$wp_customize->add_setting('cr_color_menu_hover', array('default'=>''));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'cr_color_menu_hover', array(
	'label' => __( 'Cor hover do menu (quando passa o mouse):', 'curriculum' ), 
	'section' => 'cr_config_layout',
	'settings' => 'cr_color_menu_hover',
)));