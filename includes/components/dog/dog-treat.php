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
						<a href="treatment/rice_biscuits.php">
							<div>
								<span>
									<img src="img/brand/iams/dogs/rice_biscuits.jpg" width="120px" height="120px">
									<p>IAMS™ PROACTIVE HEALTH™ ADULT LAMB MEAL & RICE BISCUITS</p>
									<p>£16.99</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/advantage_2_flea.php">
							<div>
								<span>
									<img src="img/brand/entirely pets/4-month-advantage-ii-flea-control-large-dog-for-dogs-21-55-lbs-70.jpg" width="120px" height="120px">
									<p>4 MONTH Advantage II Flea Control</p>
									<p>£25.99</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/shampoo.php">
							<div>
								<span>
									<img src="img/brand/entirely pets/advantage-treatment-shampoo-for-dogs-24-oz-27.jpg" width="120px" height="120px">
									<p>Advantage Treatment Shampoo for Dogs</p>
									<p>£10.00</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/lounger.php">
							<div>
								<span>
									<img src="img/brand/entirely pets/duke-right-angle-bolster-lounger-3.jpg" width="120px" height="120px">
									<p>Duke Right Angle Bolster Lounger</p>
									<p>£16.00</p><p><i>In Stock</i></p>
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
