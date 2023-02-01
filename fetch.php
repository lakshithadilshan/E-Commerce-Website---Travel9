<?php
$connect = mysqli_connect("localhost", "root", "", "cart");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	
	SELECT product_name,product_price,product_qty,product_image,category FROM product 
	WHERE product_name LIKE '%".$search."%'
	OR product_price LIKE '%".$search."%' 
	 
	
	
	";
}
else
{
	$query = "SELECT * FROM product ORDER BY product_code";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>product Name</th>
							<th>Price</th>
	
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["product_name"].'</td>
				<td>'.$row["product_price"].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>