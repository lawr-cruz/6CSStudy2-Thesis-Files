<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

if (!function_exists('generateRandomString')) {
	function generateRandomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}

if (!function_exists('display_value')) {
	function display_value($value)
	{
		if (empty($value)) {
			return '-';
		}

		return $value;
	}
}


if (!function_exists('set_string_value')) {
	function set_string_value($value)
	{
		if (empty($value)) {
			return null;
		}

		return strtoupper($value);
	}
}
