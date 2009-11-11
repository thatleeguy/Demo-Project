<?php

class Urls extends Controller {

	var $affiliate = false;
		
	function Urls()
	{
		parent::Controller();	
		$this->load->model('url_model', 'urls');
	    $this->load->scaffolding('urls');
	}
	
	function index()
	{
		$this->load->view('homepage');	
	}

	function get($wee)
	{
		$url = $this->urls->get_wee($wee);
		return $url;
	}
	
	function hop()
	{
		$wee = $this->uri->segment(1);

		$url = $this->get($wee);
		if ($url) {
			header('Location: '. $url);
			return;
		}

		redirect('', 'location');
	}	

	function make()
	{
		header('Content-type: text/html; charset=utf-8');

		$data['url'] = $this->input->post('url');
		
		if ($data['url']) {
			$data['url'] = prep_url($data['url']);
			$this->load->plugin('linebreak');
			$data['wee'] = $this->urls->make_wee($data['url']);
			$this->load->view('make', $data);
		} else {
			echo '<h3 class="tight" align="center">Please provide a URL...</h3>';
		}
	}
}
?>