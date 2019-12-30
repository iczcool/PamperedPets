<?php 
	$title = "Pampered Pets ::. Products";
?>
<?php include('../../templates/header.php');?>
<style>
	.bird-products{
		background: transparent;
		height: 680px;
		margin: 180px 0 0 0;
		padding: 0 30%;
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
	  		<div class="bird-products">
				<h1>New Products Coming Soon!</h1>
				<p>In the mean time, feel free and browse through our available products at our <a href="../brands/brands.php"><b><em>Shop</em></b></a></p><br><br><br><br>
				<a style="font-size: 1.2em" href="/Repository/Pampered Pets/v 1.0/index.php"><b>>> Home</b></a>
			</div>			
	  	</td>
	  </tr>
	</table>
</main>
<?php include('../../templates/footer.php');?>