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
		'tag'	=>	array(
			'label'		=> 	__('Tag','bacon-ipsum'),
			'caption'	=>	__('Pick a Custom Image to Use','bacon-ipsum'),
			'type'		=>	'dropdown',
			'default'	=> 	'bacon||Bacon,bacon-eggs||Bacon and Eggs,bacon2||Bacon 2,beef||Beef,brisket||Brisket,corned-beef||Corned Beef,drumstick||Drumstick,drumstick2||Drum Stick 2,family-style-bbq||Family Style BBQ,flank-steak||Flank Steak,hamburger||Hamburger,pastrami||Pastrami,pork-ribs||Pork Ribs,pulled-pork||Pulled Pork,ribeye||Rib Eye,ribeye2||Rib Eye 2,ribeyes-and-bacon||Ribeye and Bacon,ribs-of-beef||Ribs of Beef,salami||Salami,sausage||Sausage,sausage2||Sausage 2,sirloin||Sirloin,wing-rib||Wing Rib,random||Random',
		),
	),
	'multiple'	=> false,
);

