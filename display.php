<?php
	//return the alignment txt file from "matt.cs.tufts.edu" server
	$id = $_GET["id"];
	$txtFile = "http://matt.cs.tufts.edu/results/$id/alignment.txt";
	$refreshUrl = "display.php?id=$id";
	while(!$fp=@fopen($txtFile,"r")){
		sleep(1);
	}
	$result = "";
	$result .= @stream_get_contents($fp);
	echo $result;
?>