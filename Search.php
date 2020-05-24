<?php
	function search($a,$z,$y){
		if($a[sizeof($a)-$z]==$y)
		{
			echo "found it";
		}
		else{
			if($z==1){
				echo "cannot find it";
			}
			else{
			search($a,$z-1,$y);
			}
		}
	}
	
	$array = array("apple","orange","tea");
	search($array,sizeof($array),"apple");
?>