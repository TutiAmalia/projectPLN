<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('get_month_name')) {
	function get_month_name($id)
	{
		$month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		
		return $month[(int) $id - 1];
	}
}