<?php
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../templates/header.php');?>
<style>
	.dog-products{
		background: transparent;
		height: 740px;
		margin: 60px 0 0 0;
		padding: 0;
	}
	.dog-products ul{
		margin: 0;
		padding: 0 60px;
	}
	.dog-products ul li{
		background: transparent;
		width: 240px;
		height: 180px;
		list-style: none;
		display: inline-block;
		margin: 14px;
		padding: 10px 0;
		text-align: center;
		color: #ffffff;
	}
	.dog-products ul li a{
		color: indigo;
		text-decoration: none;
	}
</style>
<main>
	<table style="width:100%">
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background: transparent; width: 16%; height: auto;">
	  		<?php include('../categories.php');?>
	  	</td>

	  	<!-- MAIN -->
	  	<td style="background: transparent; width: 84%; height: 100%">
	  		<div class="dog-products">
				<ul>
					<li>
						<a href="dog-food.php">
							<div>
								<span>
									<img src="img/brand/nature/by-nature-dry-dog-food.jpg" width="200px" height="140px">
									<p>Foods & Treats</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="dog-treat.php">
							<div>
								<span>
									<img src="img/logos/dog_treatment.png" width="180px" height="140px">
									<p>Treatment</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="dog-toy.php">
							<div>
								<span>
									<img src="img/logos/dog_toys.jpg" width="140px" height="160px">
									<p>Toys & Play</p>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
	  	</td>
	  </tr>
	</table>
</main>
<?php include('../../templates/footer.php');?>
