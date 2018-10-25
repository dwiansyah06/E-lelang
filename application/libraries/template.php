<?php  

class Template {
 	// protected $_ci;

    function __construct(){
        $this->CI = & get_instance();
    }

    function display($template, $data=null){
    	$this->CI->load->model('M_data');
    	$response['user'] = $this->CI->M_data->get_data();

    	$data['_content'] = $this->CI->load->view($template, $data, true);
    	$data['_header'] = $this->CI->load->view('myTemp/header', $response, true);
    	$data['_sidebar'] = $this->CI->load->view('myTemp/sidebar', $response, true);
    	$this->CI->load->view('/template.php', $data);
    }
}

?>