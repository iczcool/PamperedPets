<?php
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../templates/header.php');?>
<style>
	.cat-foods{
		background: transparent;
		width: inherit;
		height: 700px;
		margin: 80px 0;
		padding: 0;
	}
	.cat-foods ul{
		margin: 0;
		padding: 0 60px;
	}
	.cat-foods ul li{
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
	.cat-foods ul li a{
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
	  		<div class="cat-foods">
				<ul>
					<li>
						<a href="food/cat_tuna.php">
							<div>
								<span>
									<img src="img/brand/nature/cats/95-cat-tuna.png" width="180px" height="120px">
									<p>Tuna Recipe</p>
									<p>£8.90</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="food/beef_chicken.php">
							<div>
								<span>
									<img src="img/brand/nature/cats/beef-chicken-stew-lg.png" width="200px" height="100px">
									<p>Beef & Chicken Stew</p>
									<p>£8.99</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="food/balanced_diet.php">
							<div>
								<span>
									<img src="img/brand/nature/cats/by-nature-cat-balanced-diet-turkey-peas-herring.png" width="160px" height="160px">
									<p>Turkey, Green Peas & Herring</p>
									<p>£12.50</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="food/ocean_whitefish.php">
							<div>
								<span>
									<img src="img/brand/nature/cats/by-nature-cat-grain-free-ocean-white-fish-peas.png" width="160px" height="160px">
									<p>Ocean Whitefish & Green Peas Recipe</p>
									<p>£12.50</p><p><i>In Stock</i></p>
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
