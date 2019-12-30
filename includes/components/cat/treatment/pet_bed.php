<?php
	$price = "32.00";
	$quantity = 1;

 ?>
 <?php
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../../templates/header.php');?>
<style>
	main h1{
		text-align: center;
	}
	.cat-products{
		background: transparent;
		height: 600px;
		margin: 0;
		padding: 0;
	}
	.cat-products ul{
		margin: 0;
		padding: 0 60px;
	}
	.cat-products ul li{
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
	.cat-products ul .description{
		background: lightgrey;
		width: 400px;
		height: 350px;
		text-align: left;
		padding: 12px;
	}
	.cat-products ul li img{
		width: 100%;
		height: 100%;
		margin: 0 0 0 0;
	}
	.cat-products ul .description .buy-now form{
		position: relative;
		background: yellow;
		width: 190px;
		/*height: 80px;*/
		margin: 80px 0 0 100px;
	}
	.cat-products ul .description input{
		width: 38px;
		height: 46px;
	    border: 0px solid #008CBA;
	    color: #000000;
	    padding: 0 6px;
	    font-size: 16px;
	    float: left;
	}
	.cat-products ul .description button{
		background-color: #008CBA;
		width: 140px;
		height: 46px;
	    border: 0px solid #008CBA;
	    color: #ffffff;
	    text-decoration: none;
	    font-size: 16px;
	    cursor: pointer;
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
	  		<h2 style="text-align: center;">Petpals™ Corduroy Bed</h2>
	  		<div class="cat-products">
				<ul>
					<li>
						<div>
							<img src="img/brand/entirely pets/bed.jpg" width="140px" height="140px">
						</div>
					</li>
					<li class="description">
						<div>
							<p style="text-align: center; color: #000000; font-size: 1.6em"><span>£ <?php echo $price; ?></span></p>
							<p>
								Shipping weight: 	<br/>
								Units in stock:	4<br/>
								Brand: Petpals™
							</p>
							<p>Petpals™ Corduroy Bed is a soft and cozy bed that your pet will enjoy relaxing and sleeping. Soft & Cozy bed Dimensions: 24 x 20 x 6 inches</p>
						</div>
						<div class="buy-now">
							<form action="thank-you.php" method="post">
								<p><input type="text" name="quantity" value="<?php echo $quantity ?>"></input></p>
								<p><button id="send" type="send" name="send">Buy Now!</button></p>
								<p><input type="hidden" name="price" value="<?php echo $price ?>"></input></p>
							</form>
						</div>
					</li>
				</ul>
			</div>
	  	</td>
	  </tr>
	</table>
</main>
<?php include('../../../templates/footer.php');?>
