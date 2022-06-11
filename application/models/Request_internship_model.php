<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request_internship_model extends CI_Model
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
			$years[] = '1/' . ($i + 543);
			$years[] = '2/' . ($i + 543);
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
		// input from application/views/form/request_internship.php
		$in->title = trim(isset($post['title']) ? $post['title'] : '');
		$in->firstname = trim(isset($post['firstname']) ? $post['firstname'] : '');
		$in->lastname = trim(isset($post['lastname']) ? $post['lastname'] : '');
		$in->std_code = trim(isset($post['std_code']) ? $post['std_code'] : '');
		$in->group = trim(isset($post['group']) ? $post['group'] : '');
		$in->class = trim(isset($post['class']) ? $post['class'] : '');
		$in->dep = trim(isset($post['dep']) ? $post['dep'] : '');
		$in->minor = trim(isset($post['minor']) ? $post['minor'] : '');
		$in->grade = trim(isset($post['grade']) ? $post['grade'] : '');
		$in->year_form = trim(isset($post['year_form']) ? $post['year_form'] : '');
		$in->year_to = trim(isset($post['year_to']) ? $post['year_to'] : '');
		$in->date_form = trim(isset($post['date_form']) ? $post['date_form'] : '');
		$in->date_to = trim(isset($post['date_to']) ? $post['date_to'] : '');
		$in->location = trim(isset($post['location']) ? $post['location'] : '');
		$in->name_lo = trim(isset($post['name_lo']) ? $post['name_lo'] : '');
		$in->position = trim(isset($post['position']) ? $post['position'] : '');
		$in->number = trim(isset($post['number']) ? $post['number'] : '');
		$in->road = trim(isset($post['road']) ? $post['road'] : '');
		$in->sub_district = trim(isset($post['sub_district']) ? $post['sub_district'] : '');
		$in->district = trim(isset($post['district']) ? $post['district'] : '');
		$in->provice = trim(isset($post['provice']) ? $post['provice'] : '');
		$in->code_p = trim(isset($post['code_p']) ? $post['code_p'] : '');
		$in->tel = trim(isset($post['tel']) ? $post['tel'] : '');
		$in->parent = trim(isset($post['parent']) ? $post['parent'] : '');

		$user_ck = $this->db->get_where('users', ['std_id' => $in->std_code])->row();
		if (empty($user_ck)) {
			// INSERT INTO `users`(`id`, `std_id`, `id_card`, `prefix`, `firstname`, `lastname`, `std_class`, `year`, `std_group`, `majors`, `minors`, `grade`, `semester`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')
			$this->db->insert('users', [
				'std_id' => $in->std_code,
				'prefix' => $in->title,
				'firstname' => $in->firstname,
				'lastname' => $in->lastname,
				'std_class' => $in->class, 
				'std_group' => $in->group,
				'majors' => $in->dep,
				'minors' => $in->minor,
				'grade' => $in->grade, 
				'std_img' => $this->_uploadimg('std_signature')
			]);
		} else {
			$this->db->where('std_id', $in->std_code);
			$this->db->update('users', [
				'prefix' => $in->title,
				'firstname' => $in->firstname,
				'lastname' => $in->lastname,
				'std_class' => $in->class,
				'std_group' => $in->group,
				'majors' => $in->dep,
				'minors' => $in->minor,
				'grade' => $in->grade, 
				'std_img' => $this->_uploadimg('std_signature')
			]);
		}
		$user_id = $this->db->insert_id();

		$location_ck = $this->db->get_where('location', ['std_id' => $user_id])->row();
		if (empty($location_ck)) {
			// INSERT INTO `location`(`id`, `std_id`, `status`, `location_name`, `contact_position`, `number`, `road`, `Sub_area`, `area`, `province`, `zip_code`, `tel`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')
			$this->db->insert('location', [
				'std_id' => $user_id,
				'status' => $in->location,
				'location_name' => $in->name_lo,
				'contact_position' => $in->position,
				'number' => $in->number,
				'road' => $in->road,
				'Sub_area' => $in->sub_district,
				'area' => $in->district,
				'province' => $in->provice,
				'zip_code' => $in->code_p,
				'tel' => $in->tel
			]);
		} else {
			$this->db->where('std_id', $user_id);
			$this->db->update('location', [
				'std_id' => $user_id,
				'status' => $in->location,
				'location_name' => $in->name_lo,
				'contact_position' => $in->position,
				'number' => $in->number,
				'road' => $in->road,
				'Sub_area' => $in->sub_district,
				'area' => $in->district,
				'province' => $in->provice,
				'zip_code' => $in->code_p,
				'tel' => $in->tel
			]);
		}

		$train_ck = $this->db->get_where('train', ['std_id' => $user_id])->row();
		if (empty($train_ck)) {
			// INSERT INTO `train`(`id`, `std_id`, `parent_comment`, `parent_img`, `department_comment`, `department_img`, `Counselor_comment`, `Counselor_img`, `during_day`, `up_day`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
			$this->db->insert('train', [
				'std_id' => $user_id,
				'parent_comment' => $in->parent,
				'parent_img' => $this->_uploadimg('parent_signature'),
			]);
		} else {
			$this->db->where('std_id', $user_id);
			$this->db->update('train', [
				'std_id' => $user_id, 
				'parent_comment' => $in->parent,
				'parent_img' => $this->_uploadimg('parent_signature'),
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
