<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_employee extends CI_Model 
{
	private $_table='pegawai';
	public $id;
	public $nama;
	public $nama_subarea;
	public $nama_posisi;
	public $jenis;
	
	public function __construct()
	{
		parent::__construct();
	}

	public function rules($tipe = 1)
	{
		$is_unique = $tipe == 1 ? '|is_unique[pegawai.id]' : '';
		return [
			['field'=> 'id',
			'label' => 'kode pegawai',
			'rules' => 'required|trim|numeric'.$is_unique],

			['field'=> 'nama',
			'label' => 'nama',
			'rules' => 'required|trim'],

			['field'=> 'nama_subarea',
			'label' => 'nama_subarea',
			'rules' => 'required|trim'],

			['field'=> 'nama_posisi',
			'label' => 'nama_posisi',
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
			->get($this->_table)
			->result();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nama = $post['nama'];
		$this->nama_subarea = $post['nama_subarea'];
		$this->nama_posisi = $post['nama_posisi'];
		$this->jenis = $post['jenis'];
		return $this->db->insert($this->_table,$this);
	}

	public function get_employee($id)
	{
		return $this->db->get_where($this->_table, ['id' => $id])->row();
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post['id'];
		$this->nama = $post['nama'];
		$this->nama_subarea = $post['nama_subarea'];
		$this->nama_posisi = $post['nama_posisi'];
		$this->jenis = $post['jenis'];
		return $this->db->update($this->_table, $this, ['id'=> $this->id]);
	}
	
	public function delete($id)
	{
		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
