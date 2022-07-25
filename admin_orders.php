<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "View Orders";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getOrders($conn);
?>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Order ID</th>
			<th>Customer Name</th>
			<th>Shipping Address</th>
			<th>Order Date</th>
			<th>Order Amount</th>
			<th>Action</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['orderid']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['ship_name']; ?>, <?php echo $row['ship_address']; ?>, <?php echo $row['ship_city']; ?>, <?php echo $row['ship_zip_code']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td>
				<a href="admin_order_details.php?orderId=<?php echo $row['orderid']; ?>">View Details</a>
			</td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>