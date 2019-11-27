<?php
class teacher_model extends CI_model{
    public function create($formArray){
        //insert in a database
        $this->db->insert('teacher',$formArray);
    }
    function getinfo(){
         $users =  $this->db->get('teacher');
         return $users->result_array();

    }

    function getuser($userId){
        $this->db->where('id',$userId);
      return $user = $this->db->get('teacher')->row_array();

    }
    function updateUser($userId,$formArray){
      $this->db->where('id',$userId);
      $this->db->update('teacher',$formArray);

    }
    function getbyid($code){
      return $this->db->query("select t.id,t.title,t.deparment,t.created_at,u.id as t_id, u.first_name,u.last_name from teacher as t, users as u where t.teacher_id = u.id and t.id = '$code'")->row_array();
    }



}

?>
