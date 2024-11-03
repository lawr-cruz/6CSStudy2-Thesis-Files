<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('view_date')) {
	function view_date($date = "", $type = "")
	{

		if (($date == "0000-00-00 00:00:00") || ($date == NULL)) {
			return "N/A";
		}

		if (($type == "range") || ($type == "daterange")) {
			$dates = explode('-', $date);

			$from = date_format(date_create($dates[0]), 'F j, Y');
			$to = date_format(date_create($dates[1]), 'F j, Y');

			return $from . " to " . $to;
		} else if ($type == "month_year") {
			return date_format(date_create($date), 'F, Y');
		} else if (($type == "year_month")) {
			return date_format(date_create($date), 'F, Y');
		} else if ($type == "year") {
			return date_format(date_create($date), 'Y');
		} else if ($type == "day") {
			return date_format(date_create($date), 'j');
		} else if ($type == "month") {
			return date_format(date_create($date), 'F');
		} else if ($type == "his") {
			return date_format(date_create($date), 'F j, Y H:i:s');
		} else if ($type == "date") {
			return date_format(date_create($date), 'F j, Y');
		} else if ($type == "date_am_pm") {
			return date_format(date_create($date), 'F j, Y h:i A');
		} else if ($type == 'time') {
			return date_format(date_create($date), 'h:i A');
		} else {
			$his = date('H:i:s', strtotime($date));

			if ($his == "00:00:00") {
				return date_format(date_create($date), 'F j, Y');
			} else {
				return date_format(date_create($date), 'F j, Y  H:i:s');
			}
		}
	}
}
