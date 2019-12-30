<?php
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../templates/header.php');?>
<style>
	.cat-products{
		background: transparent;
		width: inherit;
		height: 680px;
		margin: 80px 0;
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
		color: #ffffff;
	}
	.cat-products ul li a{
		color: indigo;
		text-decoration: none;
	}
</style>
<main>
	<table style="width:100%">
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background: transparent; width: 16%; min-height: auto;">
	  		<?php include('../categories.php');?>
	  	</td>

	  	<!-- MAIN -->
	  	<td style="background: transparent; width: 84%; min-height: 100%">
	  		<div class="cat-products">
				<ul>
					<li>
						<a href="cat-food.php">
							<div>
								<span>
									<img src="img/brand/nature/cats/by-nature-dry-cat-food.jpg" width="160px" height="140px">
									<p>Foods & Treats</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="cat-treat.php">
							<div>
								<span>
									<img src="img/logos/cat_treatment.jpg" width="150px" height="160px">
									<p>Treatment</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="cat-toy.php">
							<div>
								<span>
									<img src="img/logos/cat_toys.jpg" width="150px" height="150px">
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
