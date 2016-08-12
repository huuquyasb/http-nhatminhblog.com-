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
	public function htmlmail(){
        $config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'trollhay.ctltqb@gmail.com',
		    'smtp_pass' => 'HUUQUY20081994a',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
       $this->email->set_newline("\r\n");
    
        $this->email->from('your mail id', 'Anil Labs');
        $data = array(
             'userName'=> 'Anil Kumar Panigrahi'
                 );
        $this->email->to($userEmail);  // replace it with receiver mail id
       $this->email->subject($subject); // replace it with relevant subject 
    
        $body = $this->load->view('welcome.php',$data,TRUE);
       $this->email->message($body);   
        $this->email->send();
    }
}
