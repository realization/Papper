<?php

namespace Papper\Examples\Validation;

use Papper\Papper;

require_once __DIR__ . '/../vendor/autoload.php';

class User
{
	public $name;
}

class UserDTO
{
	public $name;
	public $unmappedProperty;
}

Papper::createMap('Papper\Examples\Validation\User', 'Papper\Examples\Validation\UserDTO');
Papper::validate();
