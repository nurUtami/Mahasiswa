<?php if( ! defined ('BASEPATH')) exit ('No direct script access allowed');

class Watermark extends CI_Controller
{

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('image_lib');
		$this->load->library('upload');
	}
	
	public function index()
	{
	$this->load->view('watermark_view', array ('error' => ''));
	}
	
	public function do_upload()
	{
		var_dump($_FILES);
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png|JPG';
		$config['max_size'] = '1000';
		$config['max_width'] = '10240';
		$config['max_weight'] = '7680';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload("userfile"))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('watermark_view', $error);
		}
		else
		{
			$image_data = $this->upload->data();
			$config["manipulation"]['source_image'] = $image_data['full_path'];
			$this->load->library('image_lib', $config["manipulation"]);
			$config["manipulation"]['wm_text'] = 'Copyright 2016 - Rizqi Ul Husna';
			$config["manipulation"]['wm_type'] = 'text';
			$config["manipulation"]['wm_font_size'] = '25';
			$config["manipulation"]['wm_font_color'] = '#ffffff';
			$this->image_lib->initialize($config["manipulation"]);
			$this->image_lib->watermark();
			$data = array('upload_data' => $image_data['file_name']);
			$this->load->view('watermark_view', $data);
		}
	}

			
		}
		