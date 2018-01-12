<!DOCTYPE html>
<html>
<head>
	<title>CI CRUD</title>
	<script type="text/javascript">
		var isAction = "false";
		function show_confirm(act,gotoid)
		{
			if(act=="edit")
			{
				var r=confirm("Do you really want to edit?");
				isAction = "true"
			}
			else
			{
				var r=confirm("Do you really want to delete?");
				isAction = "true"
			}
			
		if(isAction == "true")
		{
			window.location="<?php echo base_url();?>index.php/HomeController/"+act+"/"+gotoid;
		}	
		}

	</script>
</head>

<body>

<h2> </h2>

 <a href="<?php echo base_url();?>index.php/HomeController/navigate_to_search/search">Search User</a>

<table width="600" border="1" cellpadding="5">

<tr>

<th scope="col">Id</th>

<th scope="col">User Name</th>

<th scope="col">Email</th>

<th scope="col">Mobile</th>

<th scope="col">Address</th>

</tr>

<?php foreach ($records as $u_key){ ?>

<tr>

<td><?php echo $u_key->id; ?></td>

<td><?php echo $u_key->name; ?></td>

<td><?php echo $u_key->email; ?></td>

<td><?php echo $u_key->address; ?></td>

<td><?php echo $u_key->mobile; ?></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>

<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>

</tr>

<?php }?>

<tr>

<td colspan="7" align="right"> <a href="<?php echo base_url();?>index.php/HomeController/add_form">Insert New User</a></td>

</tr>

</table>

</body>

</html>


