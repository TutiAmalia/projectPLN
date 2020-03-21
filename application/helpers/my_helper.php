<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_month_name')) {
	function get_month_name($id)
	{
		$month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		
		return $month[(int) $id - 1];
	}
}

if (!function_exists('count_weekdays')) {
	function count_weekdays($month, $year)
	{
		$count = 0;
		$counter = mktime(0, 0, 0, $month, 1, $year);
		$weekend = array(0, 6);
		while(date('n', $counter) == $month) {
			if (in_array(date('w', $counter), $weekend) == false)
				$count++;
			$counter = strtotime('+1 day', $counter);
		}
		return $count;
	}
}

if (!function_exists('is_friday')) {
	function is_friday($date, $month, $year)
	{
		$date = "${year}-${month}-${date}";
		$day = date('N', strtotime($date));
		return ($day == 5);
	}
}