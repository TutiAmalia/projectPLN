<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_holiday extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	private $_table ="hari_libur";

	public $id_periode;
	public $tanggal;
	public $ket;

	public function rules()
	{
		return[
			['field'=> 'tanggal',
			'label' => 'tanggal',
			'rules' => 'required'],

			['field'=> 'ket',
			'label' => 'ket',
			'rules' => 'required']
		];
	}
	
	
	public function get_all_data()
	{
		return $this->db
						->select()
						->get('periode')
						->result();
	}
	
	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_periode" => $id_periode])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->tanggal = $post["tanggal"];
		$this->ket = $post["ket"];
		$this->id_periode=$post["id_periode"];
		return $this->db->insert($this->_table, $this);
	}
}