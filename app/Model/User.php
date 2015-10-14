<?php

class User extends AppModel {
	public $validate = array(
	'username' => 'isUnique',
	'password' => 'notEmpty'
	);
	
}