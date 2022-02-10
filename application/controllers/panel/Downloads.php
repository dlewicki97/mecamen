<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(2))){
				$this->base_m->create_table($this->uri->segment(2));
			}
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all($this->uri->segment(2));
			echo loadSubViewsBack($this->uri->segment(2), 'index', $data);
		} else {
			redirect('panel');
		}
	}

	public function form($type, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

			if($id != '') {
				$data['value'] = $this->back_m->get_one($this->uri->segment(2), $id);
			}
			echo loadSubViewsBack($this->uri->segment(2), $type, $data);
		} else {
			redirect('panel');
		}
	} 

	public function action($type, $table, $id = '') {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/'.$now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/'.$now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			$columns = ['name', 'raw_name', 'type', 'size', 'path'];
			foreach($columns as $column) {
				if (!$this->db->field_exists($column, $table)) {
					$this->base_m->create_column($table, $column);
				}

			}
			
			foreach ($_POST as $key => $value) {

				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}

				if($key == 'name_file_1') {
					if ($this->upload->do_upload('file_1')) {
						$data = $this->upload->data();
						$insert['name'] = $data['file_name'];   
						$insert['raw_name'] = $data['raw_name'];   
						$insert['type'] = $data['file_type'];   
						$insert['size'] = $data['file_size'];   
						$insert['path'] = $now.'/'.$insert['name'];
						$types = ['image/jpg', 'image/jpeg', 'image/png', 'image/jfif', 'image/bmp'];
						if(in_array($data['file_type'], $types)) {
							
							if($data['image_width'] > 1440) {
								resizeImg($data['file_name'], $now, '1440');
							}  
							if ($data['file_type'] != 'image/svg' && isOnWebp()) {
								convert__to__webp($now.'/'.$data['file_name']); 
							} 
						}
						addMedia($data);
					}
				} else {
					$insert[$key] = $value; 
				}
			}
			if($type == 'insert') {
				$this->back_m->insert($table, $insert);
				$this->session->set_flashdata('flashdata', 'Rekord został dodany!');
			} else {
				$this->back_m->update($table, $insert, $id);
				$this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');   
			}
			redirect('panel/'.$table);
		} else {
			redirect('panel');
		}
	}
}