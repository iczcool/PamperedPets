<style>
	.brand-foods{
		background: transparent;
		width: inherit;
		height: 700px;
		margin: 80px 0;
		padding: 0;
	}
	.brand-foods ul{
		margin: 0;
		padding: 0 60px;
	}
	.brand-foods ul li{
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
	.brand-foods ul li a{
		color: indigo;
		text-decoration: none;
	}
</style>
<?php
	$title = "Pampered Pets ::. Products";
?>
<?php include_once('../../../includes/templates/header.php');?>
<main>
	<table>
	  <tr>
	  	<td class="aside" style="background: transparent; width: 16%; min-height: auto;">
	  		<?php include('../categories.php');?>
	  	</td>

	  	<td class="main" style="background: transparent; width: 84%; min-height: 100%">
	  		<div class="brand-foods">
				<ul>
					<li>
						<a href="../cat/food/cat_tuna.php">
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
						<a href="../cat/food/beef_chicken.php">
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
						<a href="../dog/food/beef_salmond.php">
							<div>
								<span>
									<img src="img/brand/nature/dog/beef-salmon-lg.png" width="120px" height="80px">
									<p>Beef & Salmon Stew with Sweet Potato & Carrots</p>
									<p>£8.90</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="../dog/food/chicken_lamb_recipe.php">
							<div>
								<span>
									<img src="img/brand/nature/dog/95-chicken-lamb-l.png" width="120px" height="120px">
									<p>Chicken & Lamb Recipe</p>
									<p>£10.00</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="../dog/food/wild_cod_twist.php">
							<div>
								<span>
									<img src="img/brand/nature/dog/by-nature-dog-twists-wild-cod.png" width="120px" height="140px">
									<p>Wild Cod Twists</p>
									<p>£5.40</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="../cat/food/balanced_diet.php">
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
						<a href="../cat/food/ocean_whitefish.php">
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
<?php include_once('../../../includes/templates/footer.php');?>
