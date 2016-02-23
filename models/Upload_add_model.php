<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_add_model extends CI_Model {
	public function new_add($post)
	{
        $data = array(
            'title' => $post['title'],
            'u_name' => $post['u_name'],
            'description' => $post['desc'],
            'phone' => $post['phone'],
            'price' => $post['price'],
            'location' => $post['loc'],
            'image' => $post['name'],
            'created_at' => DATE_ATOM
        );
        $this->db->insert('items',$data);
        echo $post['u_name'];
	}
}