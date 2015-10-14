<?php

class category extends AppModel {
	
	public $hasMany = array (
	'Post' => array(
	'className' => 'Post',
	'dependend' => true
	) 
	
	);
	
public $validate = array (
'title' => 'notEmpty'
 );
}