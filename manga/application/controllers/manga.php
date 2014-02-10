<?php 

class Manga extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('manga_model');
		$this->load->library('mangas');
		$this->load->library('table');
		
		
		
	}
	
	public function index() {
			$list = $this->manga_model->get_latest();
		
		$this->table->set_heading('Title', 'Date');
		foreach ($list as $key => $value) {
			$this->table->add_row($value['title'], date('Y-m-d H:i:s', $value['last_chapter_date']));
		} 
		$data['list'] = $this->table->generate(); 
		$this->load->view('includes/header');
		$this->load->view('manga/body', $data);
		$this->load->view('includes/footer');
	}
	
	public function manga_list($page = null) {
	
		$config["per_page"] = 20;
		$config["base_url"] = site_url('manga/manga_list');
		$config["total_rows"] = $this->manga_model->get_manga_count();
		$config['use_page_numbers'] = TRUE;
    //$config['num_links'] = 20;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config["uri_segment"] = 2;
		
		$this->pagination->initialize($config);
	 	//$page = $this->uri->segment(2);
		$limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0){
            $limit_end = 0;
        } 
		if($this->session->userdata('table_id')) {
			$this->session->unset_userdata('table_id');
			$this->session->unset_userdata('chepters1');
		}  
		$data["list"]  =  $this->manga_model->get_manga_list($config["per_page"], $limit_end);
		$data["links"] = $this->pagination->create_links();
		$this->load->view('includes/header');
		$this->load->view('manga/list', $data);
		$this->load->view('includes/footer');
	}
	
	public function chepter_list($table_id = NULL, $manga_alias = NULL) {
		if($table_id == NULL) {
			show_404();
		}	
		$manga_ID  =  $this->manga_model->get_manga_ID($table_id, $manga_alias);
		$chepters =	$this->mangas->chepters_data($manga_ID);
		$data = array(
			'table_id' => $table_id,
			'chepters1' => $chepters
		);
		$this->session->set_userdata($data);
		$this->load->view('includes/header');
		$this->load->view('manga/chepters');
		$this->load->view('includes/footer');
	}
	
	public function chepters_data($alias, $chepter_number) {
	
		/* if($chepter_id == NULL) {
			show_404();
		}	 */
		$chepters = $this->session->userdata('chepters1');
		$chapterid = '';
		 foreach($chepters->chapters as $chapter) {
			if($chapter[0] == $chepter_number) {
				$chapterid = $chapter[3];
			}
		} 
		echo $chapterid.'--------';
		$data["chept"] =	$this->mangas->chepters($chapterid);
		print_r($data["chept"]); die;
		
		$this->load->view('includes/header');
		$this->load->view('manga/episode');
		$this->load->view('includes/footer');
	}
	
	function experiment() {
		
			shell_exec("php tt2.php> domain_whois2.txt &");
		
	
	}
	function insertexperiment() {
		
			shell_exec("php insert.php> insertexperiment.txt &");
		
	
	}
	function tt() {
		$this->load->view('tt');
	}
	
	function api_request1($url) {
		$response = file_get_contents($url);
		$data = json_decode($response);
		return $data;
	}
	//http://www.goodmanga.net/4/bleach
	//http://www.goodmanga.net/bleach/chapter/565
	//http://www.goodmanga.net/manga-list
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */