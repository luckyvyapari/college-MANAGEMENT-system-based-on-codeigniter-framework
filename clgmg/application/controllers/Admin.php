<?php
defined('BASEPATH') OR exit('No direct script access allowed');//notes you can use construct method to apply session on every page go reference to ppt of codeigniter.

class Admin extends CI_Controller {


public function dashboard(){

$this->load->model('queries');
$collegeUsers  = $this->queries->viewAllColleges();
$this->load->view('dashboard',['collegeUsers'=>$collegeUsers]);







	// echo "welcome ";

// if(!$this->session->userdata('user_id')){
	
// 	return redirect("welcome/login");
// }
// $this->load->view('dashboard');


}


public function addCollege(){

$this->load->view('addCollege');

}


public function createCollege(){

$this->form_validation->set_rules('collegename', 'College Name', 'required');
$this->form_validation->set_rules('branch', 'Branch', 'required');




if($this->form_validation->run()){

$data=$this->input->post();


$this->load->model('queries');

if($this->queries->insertCollege($data)){
	$this->session->set_flashdata('message','college added  successfully');
       
}
else{

 $this->session->set_flashdata('message', 'failed to  add college');
  }
 return redirect("admin/addCollege");
 }
 else{



$this->addCollege();

   }

}




public function addCoadmin(){

$this->load->model('queries');


$colleges=$this->queries->getcolleges();
 $roles = $this ->queries->getRoles();

// echo'<pre>';
// print_r($colleges);
// echo'</pre>';

$this->load->view('addCoadmin',['colleges' =>$colleges,'roles'=> $roles]);



// $this->load->view('addCoadmin');
}



public function createCoadmin(){


$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('college_id', 'college name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('gender', 'Gender', 'required');
$this->form_validation->set_rules('role_id', 'Role', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->form_validation->set_rules('confpwd', 'Password Confirmation','required');


$this->form_validation->set_error_delimiters('<div class ="text-danger">','</div>');

if($this->form_validation->run()){

$data=$this->input->post();

$data['password']=sha1($this->input->post('password'));
$data['confpwd'] =sha1($this->input->post('confpwd'));


$this->load->model('queries');

if($this->queries->insertCoadmin($data)){
	$this->session->set_flashdata('message','Co-admin added added  successfully');
       
}
else{

 $this->session->set_flashdata('message', 'failed to  add Co-admin');
  }
 return redirect("admin/addCoadmin");


}else
{

$this->addCoadmin();

}



}





public function addStudent(){


$this->load->model('queries');

$colleges=$this->queries->getcolleges();
$this->load->view('addStudent',['colleges' =>$colleges]);

}

  
public function createStudent(){

$this->form_validation->set_rules('studentname', 'student name', 'required');
$this->form_validation->set_rules('college_id', 'college name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('gender', 'Gender', 'required');
$this->form_validation->set_rules('course', 'course', 'required');


if($this->form_validation->run()){

$data=$this->input->post();




$this->load->model('queries');

if($this->queries->insertStudent($data)){
	$this->session->set_flashdata('message','student added added  successfully');
       
}
else{

 $this->session->set_flashdata('message', 'failed to  add student');
  }
 return redirect("admin/addStudent");


}else{


	$this->addStudent();
}


}


public function viewStudents($college_id){

   $this->load->model('queries');


$students=$this->queries->getstudents($college_id);
$this->load->view('viewStudents',['students' =>$students]);


	


}



public function editStudent($student_id){



 $this->load->model('queries');
$colleges=$this->queries->getcolleges();

$studentInfo=$this->queries->getStudentRecord($student_id);

$this->load->view('editStudent',['colleges' =>$colleges , 'studentInfo' =>$studentInfo]);

}



public function modifyStudent($id){

 $this->load->model('queries');


$this->form_validation->set_rules('studentname', 'student name', 'required');
$this->form_validation->set_rules('college_id', 'college name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('gender', 'Gender', 'required');
$this->form_validation->set_rules('course', 'course', 'required');


if($this->form_validation->run()){

$data=$this->input->post();




$this->load->model('queries');

if($this->queries->updateStudent($data ,$id)){
	$this->session->set_flashdata('message','student update  successfully');
       
}
else{

 $this->session->set_flashdata('message', 'failed to  update student');
  }
 return redirect("admin/editStudent/{$id}");


}else{


	$this->editStudent();
}



                

}
         



          public function   deleteStudent($id){

             $this->load->model('queries');
      
             if($this->queries->removeStudent($id))
             {


              return  redirect("admin/dashboard");



             }

          }












 public function coadmins(){

$this->load->model('queries');
 	$coadmins  = $this->queries->viewAllColleges();

  $this->load->view('viewCoAdmins',['coadmins' => $coadmins]);
  


 }

 public function __construct(){

parent::__construct();
if(!$this->session->userdata("user_id"))
	return redirect("welcome/login");



 } 


}

