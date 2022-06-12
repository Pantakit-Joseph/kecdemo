<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit0_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = new stdClass();
		$majors = $this->db->get_where('majors', ['status' => 1])->result();
		$minors = $this->db->get_where('minors', ['status' => 1])->result();
		$data->majors = $majors;
		$data->minors = $minors;

		$years = array();
		for ($i = 2020; $i <= intval(date("Y")) + 1; $i++) {
			$years[] = '' . ($i + 543);
		}
		$years = array_reverse($years);
		$data->years = $years;

		return $data;
	}

	public function submit()
	{
		$post = $this->input->post();
		// trim() 
		$in = new stdClass();
		// input from application/views/form/edit0.php
		$in->title = trim(isset($post['title']) ? $post['title'] : '');
		$in->firstname = trim(isset($post['firstname']) ? $post['firstname'] : '');
		$in->lastname = trim(isset($post['lastname']) ? $post['lastname'] : '');
		$in->std_code = trim(isset($post['std_code']) ? $post['std_code'] : '');
		$in->class = trim(isset($post['class']) ? $post['class'] : '');
		$in->dep = trim(isset($post['dep']) ? $post['dep'] : '');
		$in->year = trim(isset($post['year']) ? $post['year'] : '');
		$in->group = trim(isset($post['group']) ? $post['group'] : '');
		$in->subject = trim(isset($post['subject']) ? $post['subject'] : '');
		$in->year0 = trim(isset($post['year0']) ? $post['year0'] : '');
		$in->term = trim(isset($post['term']) ? $post['term'] : '');
		$in->subject_code = trim(isset($post['subject_code']) ? $post['subject_code'] : '');
		$in->unit = trim(isset($post['unit']) ? $post['unit'] : '');
		$in->title_te = trim(isset($post['title_te']) ? $post['title_te'] : '');
		$in->firstname_te = trim(isset($post['firstname_te']) ? $post['firstname_te'] : '');
		$in->lastname_te = trim(isset($post['lastname_te']) ? $post['lastname_te'] : '');

		$user_ck = $this->db->get_where('users', ['std_id' => $in->std_code])->row();
		if (empty($user_ck)) {
			// INSERT INTO `users`(`id`, `std_id`, `id_card`, `prefix`, `firstname`, `lastname`, `std_class`, `year`, `std_group`, `majors`, `minors`, `grade`, `semester`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')
			$this->db->insert('users', [
				'std_id' => $in->std_code,
				'prefix' => $in->title,
				'firstname' => $in->firstname,
				'lastname' => $in->lastname,
				'std_class' => $in->class,
				'year' => $in->year,
				'std_group' => $in->group,
				'majors' => $in->dep,
				'std_img' => $this->_uploadimg('std_signature')
			]);
		} else {
			$this->db->where('std_id', $in->std_code);
			$this->db->update('users', [
				'prefix' => $in->title,
				'firstname' => $in->firstname,
				'lastname' => $in->lastname,
				'std_class' => $in->class,
				'year' => $in->year,
				'std_group' => $in->group,
				'majors' => $in->dep,
				'std_img' => $this->_uploadimg('std_signature')
			]);
		}
		$user_id = $this->db->insert_id();

		$edit_grades_ck = $this->db->get_where('edit_grades', ['std_id' => $user_id])->row();
		if (empty($edit_grades_ck)) {
			// INSERT INTO `edit_grades`(`id`, `std_id`, `id_subject`, `subject`, `term`, `year0`, `unit`, `title_te`, `name_te`, `lastname`, `img_teacher`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')
			$this->db->insert('edit_grades', [
				'std_id' => $user_id,
				'id_subject' => $in->subject_code,
				'subject' => $in->subject,
				'term' => $in->term,
				'year0' => $in->year0,
				'unit' => $in->unit,
				'title_te' => $in->title_te,
				'name_te' => $in->firstname_te,
				'lastname' => $in->lastname_te,
				'img_teacher' => $this->_uploadimg('teacher_signature')
			]);
		} else {
			$this->db->where('std_id', $user_id);
			$this->db->update('edit_grades', [
				'std_id' => $user_id,
				'id_subject' => $in->subject_code,
				'subject' => $in->subject,
				'term' => $in->term,
				'year0' => $in->year0,
				'unit' => $in->unit,
				'title_te' => $in->title_te,
				'name_te' => $in->firstname_te,
				'lastname' => $in->lastname_te,
				'img_teacher' => $this->_uploadimg('teacher_signature')
			]);
		}
		
	}

	private function _uploadimg($in_name)
	{
		$config['upload_path']          = './storage';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($in_name)) {
			return null;
		} else {
			$file = $this->upload->data();
			return $file['file_name'];
		}
	}
}
