<?php
	$title = "Pampered Pets ::. Our Brands";
?>
<?php include('../../templates/header.php');?>
<style>
	.brands{
		background: transparent;
		margin: 0;
		padding: 0;
	}
	.brands ul{
		margin: 0;
		padding: 0 60px;
	}
	.brands ul li{
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
	.brands ul li a{
		color: indigo;
		text-decoration: none;
	}
	.brand-names{
		position: relative;
		background: transparent;
		width: 80%;
		height: 800px;
		margin: 0;
		padding: 0 10%;
	}
	.brand-names ul li{
		list-style: none;
		display: inline-block;
	}
</style>
<main>
	<table>
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background: transparent; width: 16%; min-height: auto;">
	  		<?php include('../categories.php');?>
	  	</td>

	  	<!-- MAIN -->
	  	<td class="main" style="background: transparent; width: 84%; min-height: 100%">
	  		<!-- Brand products -->
	  		<div class="brands">
				<ul>
					<li>
						<a href="includes/components/brands/brands_nature.php">
							<div>
								<span>
									<img src="../../../img/brand/nature/by-nature.png" width="300px" height="140px">
									<p>By Nature</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="includes/components/brands/iams.php">
							<div>
								<span>
									<img src="../../../img/logos/aims_groups.png" width="180px" height="140px">
									<p>IAMS</p>
								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="includes/components/brands/meow_mix.php">
							<div>
								<span>
									<img src="../../../img/logos/meow_mix_groups.png" width="180px" height="140px">
									<p>Meow Mix</p>
								</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<!-- brand names -->
			<div class="brand-names">
				<h2>Some of the brands that we stock</h2>
				<article>
					<ul>
						<li style="width: 82%; margin-right: 3%">
							<h3>By Nature</h3>
							<p>By Nature® is the premium pet food built on the idea that all ingredients aren’t equal and that a more advanced diet can ensure pets have the nutrients they need to remain active and healthy. Our formulas provide a new level of nutrition that helps protect the pets we love and the moments that make life special.</p>
						</li>
						<li style="width: 14%; margin: 0; padding: 0;"><a href="http://www.bynaturepetfoods.com/"><img src="img/logos/by-nature-pet-foods.png" width="120px" height="50px"></a></li>
					</ul>
					<hr>
				</article>
				<article>
					<ul>
						<li style="width: 82%; margin-right: 3%">
							<h3>IAMS</h3>
							<p>Iams is a popular brand name for dog food and cat food manufactured by Spectrum Brands in Europe and Mars, Inc worldwide. The company sells pet food for cats and dogs formulated for puppy/kitten, adult and mature.</p>
						</li>
						<li style="width: 14%; margin: 0; padding: 0;"><a href=""><img src="img/logos/iams.png" width="120px" height="30px"></a></li>
					</ul>
					<hr>
				</article>
				<article>
					<ul>
						<li style="width: 82%; margin-right: 3%">
							<h3>Meow Mix</h3>
							<p>Meow Mix® brand understands the special bond you and your cat share. He's your buddy, your friend, a part of the family. We believe mealtime is a special moment between you and your cat and a chance to show him how much you care.</p>
						</li>
						<li style="width: 14%; margin: 0; padding: 0;"><a href=""><img src="img/logos/meow.png" width="100px" height="80px"></a></li>
					</ul>
					<hr>
				</article>
			</div>
	  	</td>
	  </tr>
	</table>
</main>
<?php include('../../templates/footer.php');?>
