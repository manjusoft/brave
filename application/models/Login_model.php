wsj<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('phpregister');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->pk_s_uid,
                    'fname' => $row->s_firstname,
                    'lname' => $row->s_lastname,
                    'username' =>$row->s_username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }



function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('phpregister', $data);
}



function getEmployees(){
  $this->db->select("*");
  $this->db->from('phpregister');
  $query = $this->db->get();
  return $query->result();
 }


function getEmployeesid($id){
 $query=$this->db->query("SELECT *
                                 FROM phpregister  
                                 WHERE userid=$id");
        return $query->result();
 }
function update($data){
// Inserting in Table(students) of Database(college)
$id=$this->uri->segment(3);
$this->db->where('userid',$id);
$this->db->update('phpregister', $data);
}

function delete($id){
// Inserting in Table(students) of Database(college)
$data = array('userid' => $id);
//$this->db->where('userid',$id);
$this->db->delete('phpregister', $data);
}



    


}
?>




