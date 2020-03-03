<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_employee_numrows()
	{
		return $this->db
						->select('id')
						->get('pegawai')
						->num_rows();
	}

	public function get_holiday_numrows($id_periode = 0)
	{

		return $this->db
						->select('id')
						->where('id_periode', $id_periode)
						->get('hari_libur')
						->num_rows();
	}

	public function get_vacation_employee_numrows($id_periode = 0)
	{
		return $this->db
						->distinct()
						->select('id_pegawai')
						->where('id_periode', $id_periode)
						->get('perizinan')
						->num_rows();
	}

	public function get_periode_id($month, $year)
	{
		return $this->db
						->select('id')
						->where('bulan', $month)
						->where('tahun', $year)
						->limit(1)
						->get('periode')
						->row()
						->id;
	}
}
