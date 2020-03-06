<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_vacation extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }

    private $_table = 'perizinan';
    public $id;
    public $id_pegawai;
    public $id_periode;
    public $tanggal;
    public $keterangan;

    public function rules()
    {
        return [
            ['field'=> 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required|trim|numeric'],

            ['field'=> 'id_pegawai',
            'label' => 'pegawai',
            'rules' => 'required|trim'],

            ['field'=> 'id_periode',
            'label' => 'periode',
            'rules' => 'required|trim'],

            ['field'=>'keterangan',
            'label'=>'keterangan',
            'rules'=>'required|trim']
        ];
    }

    public function get_all_data()
    {
        return $this->db
                ->select('a.bulan, a.tahun,b.id, b.tanggal, b.keterangan, b.id_pegawai, c.nama, c.jenis')
                ->from('periode a, perizinan b, pegawai c')
                ->where('a.id = b.id_periode')
                ->where('c.id = b.id_pegawai')
                ->get()
                ->result();
    }

    public function get_periode()
    {
        return $this->db 
            ->select()
            ->get('periode')
            ->result();
    }

    public function get_employee()
    {
        return $this->db
            ->select()
            ->get('pegawai')
            ->result();
    }

    public function get_vacation_by_periode($id_periode)
    {
        return $this->db
            ->select('a.bulan, a.tahun, b.tanggal, b.keterangan')
            ->from('periode a, hari_libur b')
            ->where('id_periode', $id_periode)
            ->get()
            ->result();
    }

    public function get_vacation($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row( );
    }

    public function save()
    {
        $post = $this->input->post();
        $this->tanggal = $post['tanggal'];
        $this->keterangan = $post['keterangan'];
        $this->id_periode = $post['id_periode'];
        $this->id_pegawai = $post['id_pegawai'];
        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->tanggal = $post['tanggal'];
        $this->keterangan = $post['keterangan'];
        $this->id_periode = $post['id_periode'];
        $this->id_pegawai = $post['id_pegawai'];
        return $this->db->update($this->_table, $this, ['id'=> $id]);
    }
}
