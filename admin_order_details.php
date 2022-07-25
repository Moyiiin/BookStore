<?php
	session_start();
	require_once "./functions/admin.php";
	$orderId = $_GET['orderId'];
	$title = "Order #$orderId Details";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getOrderItems($conn, $orderId);
?>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Order ID</th>
			<th>Book ISBN</th>
			<th>Book Title</th>
			<th>Item Price</th>
			<th>Quantity</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['orderid']; ?></td>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['item_price']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>