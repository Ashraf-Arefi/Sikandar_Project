 <?php
class thesis_model extends CI_model{
    public function create($formArray){
        //insert in a database
        $this->db->insert('thesis',$formArray);
    }
    function getinfo($limit,$offset){
      $this->db->select('*')->from('thesis')->limit($limit,$offset);
         $users =  $this->db->get();
         return $users->result_array();

    }
  function post_count(){
    $this->db->select('id')->from('thesis');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function search($keyword) {
    return $this->db->select("*")->from('thesis')->like("title",$keyword)->get()->result_array();
  //  return $this->db->get()->result_array();
  }


    function getuser($userId){
        $this->db->where('id',$userId);
      return $user = $this->db->get('thesis')->row_array();

    }
    function updateUser($userId,$formArray){
      $this->db->where('id',$userId);
      $this->db->update('thesis',$formArray);

    }


}

?>
