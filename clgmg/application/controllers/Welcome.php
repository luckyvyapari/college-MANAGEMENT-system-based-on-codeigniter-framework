<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
//	public function index()
//	{
//		$this->load->view('home');
//	}
//    
    
    
    public function index()
	{

       $this->load->view('home'); 
	}


	    
    public function adminRegister()
	{
        $this->load->model('queries');
        $roles = $this ->queries->getRoles();

		$this->load->view('register',['roles'=> $roles]); 
	}
	
	

        
       
 public function adminSignup(){
$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('gender', 'Gender', 'required');
$this->form_validation->set_rules('role_id', 'Role', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confpwd', 'Password Confirmation','required');


$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');

if($this->form_validation->run())
{
	$data=$this->input->post();


$data['password']=sha1($this->input->post('password'));
$data['confpwd'] =sha1($this->input->post('confpwd'));

$this->load->model('queries');


if($this->queries->insertAdmin($data)){
	$this->session->set_flashdata('message','Admin saved successfully');

        return redirect("welcome/adminRegister");
}
else{

 $this->session->set_flashdata('message', 'failed to  save admin');

 return redirect("welcome/adminRegister");


   }

} 
else{

	  $this->adminRegister();
     }
   }
     


 public function login(){

if($this->session->userdata('user_id')){
	
	return redirect("admin/dashboard");
}




 	$this->load->view('login'); 
 }




 public function Signin(){



$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');

$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');




if($this->form_validation->run()){

$email=$this->input->post('email');

$password = sha1($this->input->post('password'));

$this->load->model('queries');

$userExist=$this->queries->adminExist($email,$password);

// echo'<pre>';
// print_r($userExist);
// echo'</pre>';




if($userExist){
	if($userExist->user_id =='1'){

   
	$sessionData =[

		'user_id' => $userExist->user_id,
		'username'=>$userExist->username,
		'email' =>$userExist->email,
		'role_id' =>$userExist->role_id,



	];

	$this->session->set_userdata($sessionData);
	return redirect("admin/dashboard");
}
elseif ($userExist->user_id >'1') {


	$sessionData =[

		'user_id' => $userExist->user_id,
		'username'=>$userExist->username,
		'email' =>$userExist->email,
		'college_id' =>$userExist->college_id,
		'role_id' =>$userExist->role_id,




	];

	$this->session->set_userdata($sessionData);
	return redirect("users/dashboard");


	# code...
}




	}


else{


	$this->session->set_flashdata("message", "Email or password is incorrect");
	return redirect("welcome/login");
}
}


else{


	$this->login();
}


}








 public function logout(){





 	$this->session->unset_userdata('user_id');
 	return redirect ("welcome/login");
 }












}







