<?php
class pagination_model extends CI_model{

  public function __construct(){
    parent::__construct();
    $this->load->library('pagination');
  }
  function record_count(){
    return $this->db->count_all("thesis");
  }

function fetch_country($limit,$start){
      $this->db->limit($limit,$start);
      $query = $this->db->get('thesis');
      if ($query->num_rows()>0) {
        foreach ($query->result() as $row) {
          $data[] =$row;
          # code...
        }
        return $data;
        # code...
      }
      return false;

}

}

?>
