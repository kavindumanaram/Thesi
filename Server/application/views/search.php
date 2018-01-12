<a href="<?php echo base_url();?>index.php/HomeController/navigate_to_search/HomeView">Back to Home</a>
<form action="<?php echo base_url();?>index.php/HomeController/search/" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
</form>

<?php 
foreach($results as $row)
{
	echo $row->id."<br/>";
	echo $row->name."<br/>";
	echo $row->email."<br/>";
	echo $row->address."<br/>";
	echo $row->mobile."<br/>";
	echo "==================<br/>";
}
?>