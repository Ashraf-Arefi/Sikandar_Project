<?php
class manager_model extends CI_model{
public function create($formArray){
    //insert in a database
    $this->db->insert('users',$formArray);
}
function getuser($userId){
    $this->db->where('id',$userId);
  return $user = $this->db->get('users')->row_array();

}
function get_all_users() {
  return $this->db->get('users')->result_array();
}
function deleteUser($userId){
        $this->db->where('id',$userId);
        $this->db->delete('users');
      }

}
 ?>
