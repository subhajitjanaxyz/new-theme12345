<?php

function nex123_customizar_register($wp_customize){

    $wp_customize->add_section('head23644', array(
      'title' => __('heading', 'sjana'),
      'description' => 'If you interested to change or update your footer settings you can do it.'
    ));

    //company name
  
    $wp_customize->add_setting('dffdsdf454dxf', array(
      'default' => 'Software Company',
    ));
  
    $wp_customize-> add_control('dffdsdf454dxf', array(
      'label' => 'company name',
      'description' => '',
      'setting' => 'dffdsdf454dxf',
      'section' => 'head23644',
    ));

    //company description
  
    $wp_customize->add_setting('dffdsdf454dxffd', array(
        'default' => 'Software Company is a child theme of Rara Business Free WordPress theme.',
      ));
    
      $wp_customize-> add_control('dffdsdf454dxffd', array(
        'label' => 'company descriptions',
        'description' => '',
        'setting' => 'dffdsdf454dxffd',
        'section' => 'head23644',
      ));
      
    //heading name
  
    $wp_customize->add_setting('dffdsfdfdf454dxffd', array(
        'default' => 'Perfectionist at Every Level',
      ));
    
      $wp_customize-> add_control('dffdsfdfdf454dxffd', array(
        'label' => 'heading 1',
        'description' => '',
        'setting' => 'dffdsfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //heading bottom 
  
    $wp_customize->add_setting('dffdsffds33dfdfdf454dxffd', array(
        'default' => 'Believing in the possibility of attaining perfection.',
      ));
    
      $wp_customize-> add_control('dffdsffds33dfdfdf454dxffd', array(
        'label' => 'heading 1.1',
        'description' => '',
        'setting' => 'dffdsffds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //btn1 name
  
    $wp_customize->add_setting('dffdsfdsdfds33dfdfdf454dxffd', array(
        'default' => 'Free INQUIRY',
      ));
    
      $wp_customize-> add_control('dffdsfdsdfds33dfdfdf454dxffd', array(
        'label' => 'btn1',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'dffdsfdsdfds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));
      
    //btn2 name
  
    $wp_customize->add_setting('dffdsfdsdfdfds33dfdfdf454dxffd', array(
        'default' => 'VIEW SERVICES',
      ));
    
      $wp_customize-> add_control('dffdsfdsdfdfds33dfdfdf454dxffd', array(
        'label' => 'btn2',
        'description' => 'If need you can update your copyright text from here',
        'setting' => 'dffdsfdsdfdfds33dfdfdf454dxffd',
        'section' => 'head23644',
      ));
// ======================================================================================
$wp_customize->add_section('headdfdf23644', array(
  'title' => __('hero area', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

//hero area 1

$wp_customize->add_setting('dffdsdfdfdf454dxf', array(
  'default' => 'Our Case Studies',
));

$wp_customize-> add_control('dffdsdfdfdf454dxf', array(
  'label' => 'hero area 1',
  'description' => '',
  'setting' => 'dffdsdfdfdf454dxf',
  'section' => 'headdfdf23644',
));

//hero area 1.1

$wp_customize->add_setting('dffdsdfddfdfdf454dxf', array(
  'default' => 'It looks perfect on all major browsers, tablets and phones. The kind of product you are looking for.',
));

$wp_customize-> add_control('dffdsdfddfdfdf454dxf', array(
  'label' => 'hero area 1.1',
  'description' => '',
  'setting' => 'dffdsdfddfdfdf454dxf',
  'section' => 'headdfdf23644',
));
//hero area 2

$wp_customize->add_setting('dffdsdfdfddfdf454dxf', array(
  'default' => 'Our Blog',
));

$wp_customize-> add_control('dffdsdfdfddfdf454dxf', array(
  'label' => 'hero area 2',
  'description' => '',
  'setting' => 'dffdsdfdfddfdf454dxf',
  'section' => 'headdfdf23644',
));

//hero area 2.1

$wp_customize->add_setting('dffdsfdfdfddfdfdf454dxf', array(
  'default' => 'It looks perfect on all major browsers, tablets and phones. The kind of product you are looking for.',
));

$wp_customize-> add_control('dffdsfdfdfddfdfdf454dxf', array(
  'label' => 'hero area 2.1',
  'description' => '',
  'setting' => 'dffdsfdfdfddfdfdf454dxf',
  'section' => 'headdfdf23644',
));
//===============================================================
$wp_customize->add_section('headdfddfdf23644', array(
  'title' => __('footer', 'sjana'),
  'description' => 'If you interested to change or update your footer settings you can do it.'
));

//footer

$wp_customize->add_setting('dffdsddfdffdfdf454dxf', array(
  'default' => 'Copyright © 2025 Software Company. Software Company | Developed By Rara Theme. Powered by WordPress.',
));

$wp_customize-> add_control('dffdsddfdffdfdf454dxf', array(
  'label' => 'footer',
  'description' => '',
  'setting' => 'dffdsddfdffdfdf454dxf',
  'section' => 'headdfddfdf23644',
));

//===================================================================

  //Header Area Function
  $wp_customize->add_section('backgroundimg', array(
    'title' =>__('background img', 'alihossain'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('backgd435', array(
    'default' => "https://media.istockphoto.com/id/1271954989/photo/late-night-work.jpg?s=2048x2048&w=is&k=20&c=vuVticB_QJj8s-PO2fQQ-HIVXkMLSKHABASKd_FmYKs=",
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'backgd435', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'backgd435',
    'section' => 'backgroundimg',
  ) ));

  
    
  }
  
  add_action('customize_register', 'nex123_customizar_register');