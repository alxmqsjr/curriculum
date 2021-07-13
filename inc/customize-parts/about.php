<?php

// Foto de Perfil
$wp_customize->add_setting('cr_photo', array('default'=>''));
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'cr_photo', array(
	'label' => __( 'Foto de Perfil:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'height'=> 500, 
	'width'=> 500,
	'settings' => 'cr_photo',
	'flex_width' => false,
	'flex_height' => false
)));


//Nome do perfil
$wp_customize->add_setting('cr_name', array('default'=>''));
$wp_customize->add_control('cr_name', array(
	'label' => __( 'Primeiro nome:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'text', 
));

//Sobrenome
$wp_customize->add_setting('cr_lastname', array('default'=>''));
$wp_customize->add_control('cr_lastname', array(
	'label' => __( 'Sobrenome:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'text', 
));

//Telefone
$wp_customize->add_setting('cr_phone', array('default'=>''));
$wp_customize->add_control('cr_phone', array(
	'label' => __( 'Telefone / Celular:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'text',
	'input_attrs' => array('placeholder' => __('(XX) XXXXX-XXXX'))
));

// E-mail
$wp_customize->add_setting('cr_mail', array('default'=>''));
$wp_customize->add_control('cr_mail', array(
	'label' => __( 'E-mail:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'text', 
));

// Site
$wp_customize->add_setting('cr_site', array('default'=>''));
$wp_customize->add_control('cr_site', array(
	'label' => __( 'URL do seu Site (escreva sem o "https://"):', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url',
	'input_attrs' => array('placeholder' => __('site.com.br'))
));

// Descrição de Perfil
$wp_customize->add_setting('cr_description-profile', array('default'=>''));
$wp_customize->add_control('cr_description-profile', array(
	'label' => __( 'Descreva brevemente sobre você:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'textarea', 
	'input_attrs' => array('style' => 'margin-bottom:30px')
));

// Redes Sociais (Linkedin)
$wp_customize->add_setting('cr_linkedin', array('default'=>''));
$wp_customize->add_control('cr_linkedin', array(
	'label' => __( 'Copie TODA a URL da rede social e insira no campo correspondente. Caso NÃO possua algumas das redes sociais listadas, deixe o campo em branco. Agora insira, caso tenha, a URL do Linkedin:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url',
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Github
$wp_customize->add_setting('cr_github', array('default'=>''));
$wp_customize->add_control('cr_github', array(
	'label' => __( 'URL do GitHub:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url',
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Twitter
$wp_customize->add_setting('cr_twitter', array('default'=>''));
$wp_customize->add_control('cr_twitter', array(
	'label' => __( 'URL do Twitter:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Facebook
$wp_customize->add_setting('cr_facebook', array('default'=>''));
$wp_customize->add_control('cr_facebook', array(
	'label' => __( 'URL do Facebook:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Instagram
$wp_customize->add_setting('cr_instagram', array('default'=>''));
$wp_customize->add_control('cr_instagram', array(
	'label' => __( 'URL do Instagram:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Pinterest
$wp_customize->add_setting('cr_pinterest', array('default'=>''));
$wp_customize->add_control('cr_pinterest', array(
	'label' => __( 'URL do Pinterest:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Youtube
$wp_customize->add_setting('cr_youtube', array('default'=>''));
$wp_customize->add_control('cr_youtube', array(
	'label' => __( 'URL do Youtube:', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));

// Acadêmico
$wp_customize->add_setting('cr_academy', array('default'=>''));
$wp_customize->add_control('cr_academy', array(
	'label' => __( 'URL de Portfólio Acadêmico (ex: Lattes):', 'curriculum' ), 
	'section' => 'cr_config_about', 
	'type' => 'url', 
	'input_attrs' => array('placeholder' => __('https://...'))
));