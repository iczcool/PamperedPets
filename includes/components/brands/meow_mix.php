<style>
	.brand-foods{
		background: transparent;
		width: inherit;
		height: 480px;
		margin: 80px 0;
		padding: 0;
	}
	.brand-foods h1{
		text-align: center;
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
				<h1>New Products Coming Soon!</h1>
			</div>		
	  	</td>
	  </tr>
	</table>
</main>
<?php include_once('../../../includes/templates/footer.php');?>