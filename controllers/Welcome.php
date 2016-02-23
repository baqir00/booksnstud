<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('show_model');
        $data['result'] = $this->show_model->show();
		$this->load->view('home',$data);
	}

	public function post()
	{
		$this->load->view('post');
	}

	public function upload_add()
{
    $post=$this->input->post(NULL,TRUE);
    //echo $post['userfile'];
     
    $tmp=$_FILES['userfile']['name'];
    $ext = $ext = pathinfo($tmp, PATHINFO_EXTENSION);
    $config['upload_path'] = 'C:/wamp/www/booksnstud/assets/images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '2400';
    $config['max_height']  = '1000';

    $name=$config['file_name'] = str_replace(' ', '_',$post['title']).'_'.time().'.'.$ext;
         
    $this->load->library('upload', $config);

   
      if ( ! is_really_writable($config['upload_path']))
    {
        //$this->set_error('upload_not_writable');
        echo "Not writatable directory";
    }

    if ( ! $this->upload->do_upload('userfile'))
    {
      $error = array('error' => $this->upload->display_errors());
    echo "Something went wrong!! :! ";
    foreach ($error as $key => $value) {
        echo $value;
        echo $config['upload_path'];
      }
    }

    
    else
    {
     $this->load->model('upload_add_model');
        $post['name'] = $name;
     $this->upload_add_model->new_add($post);
    
    }
    redirect('/');
  }
}
