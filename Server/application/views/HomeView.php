<?php 

echo "Records from database<br/>";
foreach ($records as $res){
	echo $res->Userid." ".$res->FirstName."<br/>";
}

?>