<?php
	$title = "Pampered Pets ::. Home";
?>
<?php include('includes/templates/header.php');?>
<style>
	.carousel{
		position: relative;
		background: grey;
		width: 90%;
		left: 5%;
		left: 7%;
		height: 400px;
		margin-top: 60px;
	}
	.new{
		position: relative;
		background: transparent;
		width: 90%;
		left: 5%;
		height: 600px;
		margin-top: 60px;
	}
	.featured{
		position: relative;
		background: transparent;
		width: 90%;
		left: 5%;
		height: 400px;
		margin-top: 60px;
		margin-bottom: 120px;
	}
	table, table tr, table tr td{
		/*margin: 0;
		padding: 0;
		border: 0;*/
	}
	table tr .aside{
		position: absolute;
		background: yellow;
		top: 60px;
		margin: 0;
		padding: 0;
	}
	table td .new h3, table td .featured h3{
		background-color: #646060;
		line-height: 40px;
		text-align: center;
		border: 0px solid blue;
		color: #ffffff;
	}
</style>
<main>
	<table>
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background:transparent; width: 16%; min-height: auto;">
	  		<?php include_once('includes/components/categories.php');?>
	  	</td>

	  	<!-- MAIN -->
	  	<td style="background: transparent; width: 84%; min-height: 100%">
	  		<div id="carousel" class="carousel">
		  		<img src="img/brand/nature/slider1.jpg" width="980px" height="400px" alt="" />
	     		<img src="img/slider2.gif" width="980px" height="400px" alt="" />
	     		<img src="img/slider4.jpg" width="980px" height="400px" alt="" />
	     		<img src="img/slider3.jpg" width="980px" height="400px" alt="" />
	  		</div>
	  		<!-- Captions for Orbit -->
			<span class="orbit-caption" id="htmlCaption">I'm A Badass Caption</span>

			<div class="new">
				<h3>New Products For July</h3>
				<?php include('includes/components/new-products.php');?>
			</div>
			<div class="featured">
				<h3>Featured Products</h3>
				<?php include('includes/components/featured-products.php');?>
			</div>
	  	</td>
	  </tr>
	</table>
</main>
<?php include('includes/templates/footer.php');?>
