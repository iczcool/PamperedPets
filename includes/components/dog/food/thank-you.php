<?php
	session_start();
	if (isset($_POST['send'])) {
		$quantity = $_POST['quantity']; //quantity of items purchased
		$message = "Purchase successful, thank you!"; //action message
		//$price = $_SESSION["price"]; //price per item
		$price = $_POST['price']; //price per item
	}
	else{
		$message = "";
		$quantity = 0;
		$price = 0.00;
	}
	$totalPrice = $quantity*$price; //total price
 ?> 
 <?php 
	$title = "Pampered Pets ::. Thank You";
?>
<?php include('../../../templates/header.php');?>
<style>
	main{
		position: relative;
		background: transparent;
		width: 100%;
		height: 650px;
		/*margin-top: 60px;*/
	}
	main h1{
		text-align: center;
	}
	.products{
		background: transparent;
		margin: 0;
		padding: 0;
	}
	.products ul{
		margin: 0;
		padding: 0 60px;
	}
	.products ul li{
		background: transparent;
		width: 240px;
		height: 180px;
		list-style: none;
		display: inline-block;
		margin: 14px;
		padding: 10px 0;
		text-align: center;
		color: #000000;
	}
	.products ul .description{
		background: lightgrey;
		width: 40%;
		height: 300px;
		text-align: left;
		margin: 0 30%;
		padding: 12px;
	}
	.continue-shopping{
		text-decoration: none;
		margin: 10% 0 0 50%;
		font-size: 1.2em;
		font-weight: 600;
	}
</style>
<main>
	<table style="width:100%">
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background: transparent; width: 16%; min-height: auto;">
	  		<?php include('../../categories.php');?>
	  	</td>

	  	<!-- MAIN -->
	  	<td class="main" style="background: transparent; width: 84%; min-height: 100%">
	  		<div class="products">
	  			<h2 style="text-align: center;"><?php echo $message; ?></h2>
				<ul>
					<li class="description">
						<p>Quanttity: &nbsp; <?php echo $quantity; ?></p>
						<p>Total Price: &nbsp; <?php echo $totalPrice; ?></p>
					</li>
				</ul>
				<a class="continue-shopping" href="../../brands/brands.php">>> Continue to shop</a>
			</div>			
	  	</td>
	  </tr>
	</table>
</main>
<?php include('../../../templates/footer.php');?>