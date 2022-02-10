<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->library('repositories/jobs_repo');
	}

	public function index() {
		echo loadViewsFront('jobs', $this->jobs_repo->loadData());
	}

	public function send() {
		if($_POST['secret_key'] == $this->back_m->get_one('settings', 1)->captcha_secret) {
			$now = date('Y-m-d');
			if (!is_dir('mailer/attachment/'.$now)) {
				mkdir('./mailer/attachment/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './mailer/attachment/'.$now;
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if($_FILES['attachment'] != null) {
				if ($this->upload->do_upload('attachment')) {
					$data = $this->upload->data();
					$insert['attachment'] = $now.'/'.$data['file_name'];        
				}
			}

			$data['contact'] = $this->back_m->get_one('contact_settings', 1);

			$insert['name'] = $this->input->post('name');
			$insert['email'] = $this->input->post('email');
			$insert['work_place'] = $this->input->post('work_place');
			$insert['city'] = $this->input->post('city');
			$insert['subject'] = 'Aplikacja na stanowisko - '. $insert['work_place'];
			$insert['phone'] = $this->input->post('phone');
			$insert['message'] = $this->input->post('message');

			$_POST['subject'] = $insert['subject'];

			if($this->input->post('rodo1') != null ) { 
				$insert['rodo1'] = '1'; 
				$_POST['rodo1'] = 'Zaakceptowane';
			} else {
				$insert['rodo1'] = '0';
				$_POST['rodo1'] = 'Niezaakceptowane';
			}
			if($this->input->post('rodo2') != null ) { 
				$insert['rodo2'] = '1'; 
				$_POST['rodo2'] = 'Zaakceptowane';
			} else {
				$insert['rodo2'] = '0';
				$_POST['rodo2'] = 'Niezaakceptowane';
			}

			if (!$this->db->table_exists('job_applications')){
				$this->base_m->create_table('job_applications');
			}

			foreach ($insert as $key => $value) {
				if (!$this->db->field_exists($key, 'job_applications')) {
					$this->base_m->create_column('job_applications', $key);
				}
			}
			$this->back_m->insert('job_applications', $insert);  

			require 'application/libraries/mailer/config.php';
			require 'application/libraries/mailer/functions.php';
			require 'application/libraries/mailer/PHPMailerAutoload.php';

			$_POST['base_url'] = base_url(); 
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = $cfg['smtp_host'];
			$mail->SMTPAuth = true;         
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			$mail->Username = $cfg['smtp_user'];
			$mail->Password = $cfg['smtp_pass'];
			$mail->Port = $cfg['smtp_port'];
			$mail->setFrom($cfg['smtp_user'], $data['contact']->company .  ' - aplikacja na stanowisko - '. $insert['work_place']);
			if(isset($insert['attachment'])) $mail->addAttachment('mailer/attachment/'.$insert['attachment']);
			$mail->AddBCC($data['contact']->email1);
			if(!empty($_POST['email'])) {
				$mail->addReplyTo($_POST['email']);
			}
			$mail->isHTML(true);
			$mail->CharSet = 'UTF-8';
			$mail->Subject = $data['contact']->company .  ' - aplikacja na stanowisko - '. $insert['work_place'];
			$mail->Body    = build_mail_body($_POST, 'contact.php');
			if(!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				$this->session->set_flashdata('flashdata', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<p class="text-danger font-weight-bold mb-0">Błąd serwera, przepraszamy...</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				exit;
			} else {
				$this->session->set_flashdata('flashdata', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<p class="text-success font-weight-bold mb-0">Twoja aplikacja została wysłana!</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('praca');
			}
		} else {	

			$this->session->set_flashdata('flashdata', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<p class="text-danger font-weight-bold mb-0">Coś poszło nie tak...</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('praca');
		}
	}

	
}