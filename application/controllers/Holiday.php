<?php defined('BASEPATH') or exit('No direct script access allowed');

class Holiday extends Admin_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_holiday', 'holiday');
	}

	public function index()
	{
		$data['title'] = 'Hari Libur';
		$data['page'] = 'admin/pages/holiday/form';
		$data['holiday'] = $this->holiday->get_all_data();
        $this->load->view('admin/index', $data);
	}

	public function process(){
		$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
		$db = mysql_select_db("hari_libur", $connection); // Selecting Database from Server
		if(isset($_POST['simpan'])){ // Fetching variables of the form which travels in URL
		$id_periode = $this->input->post['id_periode'];
		$tanggal = $this->input-post['tanggal'];
		$ket = $this->input->post['ket'];
		if($tanggal !=''||$ket !=''){
		//Insert Query of SQL
		$query = mysql_query("insert into hari_libur(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')");
		echo "<br/><br/><span>Data Inserted successfully...!!</span>";
		}
		else{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
		}
		}
		mysql_close($connection); // Closing Connection with Server
		?>
	}
    
}