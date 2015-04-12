<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
		function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library("pagination");
		$this->load->library("form_validation");
		$this->load->model('basedb');
		$this->_init();
	}
	private function _init()
	{
		$this->output->set_template('default');
		$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');
		$this->load->js('assets/themes/default/hero_files/bootstrap-transition.js');
		$this->load->js('assets/themes/default/hero_files/bootstrap-collapse.js');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function search()
	{
		$data['state'] = $this->basedb->get_state();
		$this->load->view('find_donor', $data);		
	}
	public function who_can()
	{
		
	 echo $this->load->view('who');
	
		
	}
	public function blood_bank()
	{
		echo "blood bank";
	}
	public function contact()
	{
		echo "contact";
	}
	public function state()
	{
		
	}
	public function district()
	{
		//echo "<option >".$_POST['state']."</option>";
		$data['result']= $this->basedb->get_city($_POST['state']);
		foreach($data['result'] as $row)
		{
				echo "<option >".$row->city_name."</option>";
		}
		
		//echo $_POST['state'];		
	}
	public function myprofile()
	{
		if($this->session->userdata('is_logged_in'))
		{
		$data['state'] = $this->basedb->get_state();
		$this->load->view('myprofile', $data);
		}
		else
		{
				$this->index();
		}
	}
	/* Profile information */
	public function update_profile()
	{
		if($this->session->userdata('is_logged_in'))
		{
				$this->form_validation->set_rules('name', 'Name', 'required');
				//tgf				
				if($this->form_validation->run() == false)
				{
						$this->myprofile();			
				}
				else
				{//tgf
						$data = array(
					      'userid'=>$this->session->userdata('id'),
					      'name' =>$this->input->post('name')
						);
						$this->basedb->insert_db('register', $data);
				}
		/*		echo "<br/>".$this->input->post('name');
		echo "<br/>".$this->input->post('blood_group');
		echo "<br/>".$this->input->post('dob');
		echo "<br/>".$this->input->post('gender');
		echo "<br/>".$this->input->post('marriage');
		echo "<br/>".$this->input->post('contact_no');
		echo "<br/>".$this->input->post('address');
		echo "<br/>".$this->input->post('state');
		echo "<br/>".$this->input->post('district');*/
		}
		else
		{
				$this->index();
		}
		
	}
	public function mytest()
	{
		$this->load->view('test_page');
	}
	public function user_home()
	{
		if($this->session->userdata('is_logged_in'))
		{
		$this->myprofile();
		}
		else
		{
				$this->index();
		}
	}
	//login session	
	public function login()
	{
		if($this->session->userdata('is_logged_in'))
		{
			header('Location:user_home');
		}
		$this->form_validation->set_rules("userid", "Email ID","trim|required|xss_clean|callback_user_validation" );
		$this->form_validation->set_rules("pass", "Password" , "trim|required|xss_clean|md5");
		if($this->form_validation->run() == false)
		{
			$this->index();
		}
		else
		{
				$get_user = $this->basedb->get_user('user_data', 'userid', $this->input->post('userid'));
				foreach($get_user->result() as $row)
				{
						$id= $row->id;
				}
				
			$data = array(
				'userid' => $this->input->post('userid'),
				'is_logged_in' => 1,
				'id'=>$id
				      );
			$this->session->set_userdata($data);
			$this->user_home();
		}
	}
	public function user_validation()
	{
		if($this->basedb->can_login())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('user_validation', 'Incurrect Username/ Password!');
			return false;
		}
	}
	public function user_check()
	{
		if($this->basedb->user_check())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('user_check', 'User name already register!');
			return false;
		}
	}
	public function registration()
	{
		if($this->session->set_userdata('is_logged_in'))
		{
			header('Location:user_home');
		}
		else
		{
			$this->form_validation->set_rules('email','Email','tirm|required|xss_clean|valid_email|is_unique[user_data.userid]');
			$this->form_validation->set_rules('password',' Password','tirm|required|min_length[6]|matches[re_password]|md5');
			$this->form_validation->set_rules('re_password',' Re-password','tirm|required');
			if($this->form_validation->run() == false)
			{
				$this->index();
			}
			else
			{
				
				$data = array(
					'userid' => $this->input->post('email'),
					'password' =>$this->input->post('password') 
					      );
				
				$this->basedb->registration($data);
				$get_user = $this->basedb->get_user('user_data', 'userid', $this->input->post('email'));
				foreach($get_user->result() as $row)
				{
						$id= $row->id;
				}
				$data = array(
					'userid' => $this->input->post('email'),
					'is_logged_in' => 1,
					'id'=> $id
					      );
				$this->session->set_userdata($data);
				header('Location:user_home');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(),'welcome/index');		
	}
	//test
	public function post_test()
	{
		$name= $_POST['name'];
		
		echo "<br/> <br/>post test=".$name;
		
	}
}

