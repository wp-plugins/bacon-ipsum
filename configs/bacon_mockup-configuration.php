<?php
/**
*
* fieldconfig for bacon-ipsum/Configuration
*
* @package Bacon_Ipsum
* @author Chris McCoy chris@lod.com
* @license GPL-2.0+
* @link http://github.com/chrismccoy
* @copyright 2014 Chris McCoy
*/


$group = array(
	'label' => __('Configuration','bacon-ipsum'),
	'id' => '71015425',
	'master' => 'width',
	'fields' => array(
		'width'	=>	array(
			'label'		=> 	__('Width','bacon-ipsum'),
			'caption'	=>	__('Width for Bacon Mockup Images','bacon-ipsum'),
			'type'		=>	'smalltextfield',
			'default'	=> 	'300',
		),
		'height'	=>	array(
			'label'		=> 	__('Height','bacon-ipsum'),
			'caption'	=>	__('Height for Bacon Mockup Images','bacon-ipsum'),
			'type'		=>	'smalltextfield',
			'default'	=> 	'200',
		),
		'alt'	=>	array(
			'label'		=> 	__('Alt Tag','bacon-ipsum'),
			'caption'	=>	__('Alt Tag for Bacon Mockup Images','bacon-ipsum'),
			'type'		=>	'textfield',
			'default'	=> 	'Yummy Bacon!',
		),
		'class'	=>	array(
			'label'		=> 	__('CSS Class','bacon-ipsum'),
			'caption'	=>	__('CSS Class for Bacon Mockup Images','bacon-ipsum'),
			'type'		=>	'smalltextfield',
			'default'	=> 	'baconthumb',
		),
	),
	'multiple'	=> false,
);

