<?php
class Url_model extends Model 
{
	
	function Url_model()
	{
		parent::Model();
	}
	

	function make_wee($url)
	{
		$res = $this->db->query('SELECT id FROM urls WHERE checksum=\''.md5(trim($url)) .'\'');
		if ($res->num_rows() > 0)
		{
			$wee = $res->result_array();
			return $wee[0]['id'];
		}
		else
		{
			// create wee
			$sql = $this->db->insert_string('urls', array('url'=>$url, 'checksum'=>md5($url)));
			$res = $this->db->query($sql);
			$wee = $this->db->insert_id();
			return "$wee";
		}
		
	}
	
	
	function get_wee($wee)
	{
		$res = $this->db->query('SELECT url FROM urls WHERE id='.$wee);
		if ($res->num_rows() > 0)
		{
			$wee = $res->result_array();
			return $wee[0]['url'];
		}
		
		return false;
	}
	
	
}
?>