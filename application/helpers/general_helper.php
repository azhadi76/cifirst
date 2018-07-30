<?php
if (! function_exists('pr'))
{
	function pr($param = '')
	{
		$CI =& get_instance();
		// $this->db->last_query();
		echo "<pre>";
		print_r($param);
		echo "</pre>";
		exit;
	}
}


