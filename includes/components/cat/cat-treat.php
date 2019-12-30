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
						<a href="treatment/brushing_bite.php">
							<div>
								<span>
									<img src="img/brand/meowmix/cats/MM_BrBites_Chkn_WEB3D_1300.png" width="120px" height="120px">
									<p>Brushing Bites® Dental Treats Made with Real Chicken</p>
									<p>£16.99</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/crunchy.php">
							<div>
								<span>
									<img src="img/brand/meowmix/cats/bb.png" width="120px" height="120px">
									<p>Irresistibles® - Crunchy With Tuna & Shrimp</p>
									<p>£16.99</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/ocean_explosion.php">
							<div>
								<span>
									<img src="img/brand/meowmix/cats/ocean.png" width="140px" height="140px">
									<p>Ocean Explosion® Treats</p>
									<p>£20.00</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/proactive.php">
							<div>
								<span>
									<img src="img/brand/iams/cats/iamscat.jpg" width="140px" height="140px">
									<p>IAMS™ PROACTIVE HEALTH™ HAIRBALL CHICKEN FLAVOR DAILY TREATS</p>
									<p>£18.00</p><p><i>In Stock</i></p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="treatment/pet_bed.php">
							<div>
								<span>
									<img src="img/brand/entirely pets/bed.jpg" width="140px" height="140px">
									<p>Petpals™ Corduroy Bed</p>
									<p>£32.00</p><p><i>In Stock</i></p>
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
