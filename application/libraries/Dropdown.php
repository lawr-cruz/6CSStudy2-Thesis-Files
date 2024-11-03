<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dropdown
{
	private static $cache = array();

	public static function get_static($name, $value = false, $action = "form")
	{
		if (isset(self::$cache['static' . $name])) {
			$array = self::$cache['static' . $name];
			if (($value) || ($action != "form")) {
				return @$array[$value];
			}
			return $array;
		}
		switch ($name) {
			case 'bool':
				$array = array(
					'' => 'SELECT VALUE',
					0 => 'NO',
					1 => 'YES'
				);
				break;
			case 'roles':
				$array = array(
					'' => 'SELECT VALUE',
					1 => 'ADMINISTRATOR',
					2 => 'STUDENT'
				);
				break;
			case 'user_roles':
				$array = array(
					'' => 'SELECT VALUE',
					2 => 'STUDENT'
				);
				break;
			case 'gender':
				$array = array(
					'' => 'SELECT VALUE',
					'MALE' => 'MALE',
					'FEMALE' => 'FEMALE',
				);
				break;
			case 'civil_status':
				$array = array(
					'' => 'SELECT VALUE',
					1 => 'SINGLE',
					2 => 'MARRIED',
					3 => 'WIDOW/WIDOWER',
					4 => 'DIVORCED',
					5 => 'SEPARATED'
				);
				break;
			case 'categories':
				$array = array(
					'' => 'SELECT VALUE',
					1 => 'EASY',
					2 => 'MEDIUM',
					3 => 'HARD'
				);
				break;
			default:
				$array = array();
				break;
		}

		// set variable cache
		self::$cache['static' . $name] = $array;

		if (($value) || ($action != "form")) {
			return @$array[$value];
		}

		return $array;
	}
}
