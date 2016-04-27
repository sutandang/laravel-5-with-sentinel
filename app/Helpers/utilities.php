<?php 
	
	function idr_currency($num)
	{
		$formatted_num = number_format($num, 2, ',', '.');

		return 'Rp '.$formatted_num;
	}

?>