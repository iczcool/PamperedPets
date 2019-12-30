<?php
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../templates/header.php');?>
<style>
	.dog-foods{
		background: transparent;
		height: 740px;
		margin: 60px 0;
		padding: 0;
	}
	.dog-foods ul{
		margin: 0;
		padding: 0 60px;
	}
	.dog-foods ul li{
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
	.dog-foods ul li a{
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
	  		<div class="dog-foods">
				<ul>
					<li>
						<a href="food/chicken_lamb_recipe.php">
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
						<a href="food/wild_cod_twist.php">
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
						<a href="food/beef_salmond.php">
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
						<a href="food/.php">
							<div>
								<span>
									<img src="img/brand/nature/" width="120px" height="80px">
									<p></p>
									<p>£0.00</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="food/.php">
							<div>
								<span>
									<img src="img/brand/nature/iams-proactive-health-dog-6-lb-pa-ad-lmb-rc-cr.jpg" width="140px" height="120px">
									<p></p>
									<p>£0.00</p><p><i>In Stock</i></p>
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
