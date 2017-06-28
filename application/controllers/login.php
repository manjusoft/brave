<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }
    
    public function process(){
        // Load the model
        $this->load->model('login_model');
        //$msg=login_model->getusername();
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            $msg=$result->name;
             $msg1=$result->lastname;
             $msgs='$msg'.'$msg1';
            redirect('home',$msgs);
        }  

    }

  public function register(){
     
        $this->load->view('registerview');
        }  


public function insert(){
     $this->load->model('login_model'); 
     $names=$this->input->post('name');
     $lastnames=$this->input->post('lastname');
$data = array(
'name' => $this->input->post('name'),
'lastname' => $this->input->post('lastname'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password')
);
//Transfering data to Model
$this->login_model->form_insert($data);
$ab['names']=$names;
$ab['lastnames']=$lastnames;
$ab['message']= 'Data Inserted Successfully';
//Loading View

$this->load->view('regsuccess', $ab);

 }  

public function view(){
  $this->load->model('login_model'); 
  $query = $this->login_model->getEmployees();
  $data['EMPLOYEES'] = null;
  if($query){
   $data['EMPLOYEES'] =  $query;
  }

  $this->load->view('userlist', $data);
 }
 

public function edit(){
    $id = $this->uri->segment(3);
  // $id=$this->uri->segment(4);
   $this->load->model('login_model'); 
 $query = $this->login_model->getEmployeesid($id);
  
 

    $user = $query;
    
    $data['users'] = $user;
   

  $this->load->view('editform', $data);
 }

 public function updatedata(){
     $this->load->model('login_model'); 
     $names=$this->input->post('name');
     $lastnames=$this->input->post('lastname');
$data = array(
'name' => $this->input->post('name'),
'lastname' => $this->input->post('lastname'),
'email' => $this->input->post('email'),
'password' => $this->input->post('password')
);
//Transfering data to Model
$this->login_model->update($data);
$ab['names']=$names;
$ab['lastnames']=$lastnames;
$ab['message']= 'Data updated Successfully';
//Loading View

//$this->load->view('updatesuccess', $ab);
$this->view();
 } 

public function delete(){
    $id = $this->uri->segment(3);
  // $id=$this->uri->segment(4);
   $this->load->model('login_model'); 
 $query = $this->login_model->delete($id);
  $this->view();
 

    }










 }
?>