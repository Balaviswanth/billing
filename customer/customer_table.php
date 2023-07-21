<?php
include("../connection.php");
if($con){
	$query="select * from customer";
	$res=mysqli_query($con,$query);
	$cus_type=array("Regular","Wholesale","Unknown");
	echo"<div class='w-100 text-center p-2 mb-1'>
			<span class='h4 text-center'>Customer Table</span>
			<button class='float-right  btn-sm btn-warning'>&times;</button>
		
			<div class='input-group-sm col-12 mt-2 '>
				<input type='text' id='table_search_input' class='form-control ' onkeyup='myFunction()' placeholder='Search for names..' title='Type in a name'>
			</div>
		</div>";
	echo"<table id='customer_table' class='table table-bordered '>";
	echo"<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
		</thead>";
	while($row=mysqli_fetch_array($res)){
		echo"<tr>
				<td>".$row['customer_id']."</td>
				<td>".$row['name']."</td>
			</tr>";
	}
	echo"</table>";
}
?>