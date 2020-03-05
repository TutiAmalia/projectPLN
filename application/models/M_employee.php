<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_employee extends CI_Model 
{
	
	public function __construct()
	{
		parent::__construct();
	}

	private $_table="pegawai";
	public $id;
	public $nama;
	public $jenis;

	public function rules()
	{
		return [
			['field'=> 'id',
			'label' => 'kode pegawai',
			'rules' => 'required|trim|numeric|is_unique[pegawai.id]'],

			['field'=> 'nama',
			'label' => 'nama',
			'rules' => 'required|trim'],

			['field'=> 'jenis',
			'label' => 'status',
			'rules' => 'required|trim|numeric']
		];
	}

	public function get_all_data()
	{
		return $this->db
			->select()
			->get('pegawai')
			->result();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama = $post["nama"];
		$this->jenis = $post["jenis"];
		return $this->db->insert($this->_table,$this);
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id"=>$id]);
	}

	public function update()
	{
		$post =$this->input->post();
		$this->id=$post["id"];
		$this->nama=$post["nama"];
		$this->jenis=$post["jenis"];
		return $this->db->update($this->_table, $this, array('id'=> $post['id']));
	}
	
}
