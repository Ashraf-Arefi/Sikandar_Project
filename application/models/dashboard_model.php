<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model {

public function get_table_count($table) {
  return $this->db->count_all($table);
}

}
