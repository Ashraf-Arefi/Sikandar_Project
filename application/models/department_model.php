<?php
class Department_model extends CI_model{

	public function add($f_code){

	$this->db->insert('department',
			array(
				'id'=>'',
				'name'=>$this->input->post('d_name'),
				'dean_id'=>$this->input->post('d_mgr'),
				'desc'=>$this->input->post('d_desc'),
				'faculty_code'=>$this->input->post('f_code'),

				)
		);
	}

	public function getbyfacultycode($faculty_code){
		return $this->db->query('select * from department where faculty_code="'.$faculty_code.'"')->result_array();
	}

	public function getcountbyfcode($faculty_code){
		return $this->db->query('select count(*) as count from department where faculty_code="'.$faculty_code.'"')->row_array();
	}

	public function detail($id){

		return $this->db->query('select * from department where id='.$id.';')->row_array();
	}

	public function edit($id){

		$data = array(
			'faculty_code'=>$this->input->post('f_code'),
			'name'=>$this->input->post('d_name'),
			'dean_id'=>$this->input->post('d_mgr'),
			'desc'=>$this->input->post('d_desc')

			);
		$this->db->where('id',$id);
		$this->db->update('department',$data);
	}

	public function delete($id){
		$this->db->query('update department set is_deleted=1 where id='.$id);

	}

	public function restore($id){
		$this->db->query('update department set is_deleted=0 where id='.$id);
	}


	public function getcountcourses($dep){

		return $this->db->query("

			select count(*) as count

			from course

			where dep_id=".$dep."

			")->row_array();
	}


	public function getcountclasses($dep){

		return $this->db->query("

			select count(*) as count

			from course_period

			where course_id in (select id from course where dep_id=".$dep.")

			")->row_array();
	}

}


?>