<?php 
	function read_all_data($connect, $table)
	{
		$query =  "SELECT * FROM $table";
		$process= mysqli_query ($connect, $query);
		return $process;
	}

?>