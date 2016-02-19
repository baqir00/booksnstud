<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_add_model extends CI_Model{
	public function new_add($post)
	{
		//$sql = "INSERT INTO `admin_ops_login`(`uname`, `password`) VALUES ('$uname','".md5($password)."')";
		echo $post['title'];


	}
}