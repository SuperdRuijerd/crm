<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Someclass
{
  	var $CI;
  	public function __construct()
	{
		$this -> CI =& get_instance();
		$this -> CI -> load -> helper('url');
		$this -> CI -> load -> library('session');
		$this -> CI -> load -> library('email');
		$this -> CI -> config -> item('base_url');
	}

  	public function sendmail($template, $data, $mail)
  	{
    	$mesaj = $this -> CI -> load -> view('email_templates/'.$template, $data, TRUE);
		$config = Array(
		  'protocol' => 'sendmail',
		  'smtp_host' => 'mail.neroindustry.com',
		  'smtp_port' => 587,
		  'smtp_user' => 'qcrm@neroindustry.com',
		  'smtp_pass' => 'qcrm19842033',
		  'smtp_timeout' => '4',
		  'mailtype' => 'html',
		  'charset' => 'utf-8'
		);
		$this -> CI -> email -> initialize($config);
		$this -> CI -> email -> from('qcrm@neroindustry.com','Qcrm');
		foreach($mail as $row)
		{
		  $this -> CI -> email -> to($row);
		}
		$this -> CI -> email -> subject($data['title']);
		$this -> CI -> email -> message($mesaj);
		$this -> CI -> email -> send();
  	}
}
