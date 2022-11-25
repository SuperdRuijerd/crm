<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfs extends CI_Controller
{

   public function __construct()
   {
		parent::__construct();
		$this -> auth -> isLoggedIn();
   }

   public function permission($id = "")
   {
		if($id == "") { redirect('employee/permission', 'refresh'); }

		$data['session_user_get_permission'] = $this -> employee -> session_user_get_permission($id);
		$data['session_user_get_permission_group'] = $this -> employee -> session_user_get_permission_group($data['session_user_get_permission']['izinform_grup']);

		$this -> load -> view('pdfs/permission', $data);
		$html = $this -> output -> get_output();
		$this -> pdf -> load_html($html);
		$this -> pdf -> render();
		$this -> pdf -> stream("izin formu.pdf", array( "Attachment" => 0 ));
    }

    public function duty($id = "")
    {
		 if($id == "") { redirect('employee/duty', 'refresh'); }

		 $data['session_user_get_permission'] = $this -> employee -> session_user_get_permission($id);
		 $data['session_user_get_permission_group'] = $this -> employee -> session_user_get_permission_group($data['session_user_get_permission']['izinform_grup']);

		 $this -> load -> view('pdfs/duty', $data);
		 $html = $this -> output -> get_output();
		 $this -> pdf -> load_html($html);
		 $this -> pdf -> render();
		 $this -> pdf -> stream("görev formu.pdf", array( "Attachment" => 0 ));
    }

	public function job_application($id = "")
	{
		if($id == "") { redirect('humanresources/job_application', 'refresh'); }

		$data['job_application_info'] = $this -> humanresources -> job_application_info($id);

		$this -> load -> view('pdfs/job_application', $data);
		$html = $this -> output -> get_output();
		$this -> pdf -> load_html($html);
		$this -> pdf -> render();
		$this -> pdf -> stream("iş başvuru formu.pdf", array( "Attachment" => 0 ));

	}

}
