<?php 
	$title = "Pampered Pets ::. Contact";
?>
<?php include('includes/templates/header.php'); ?>
<style>
	main h1{
		text-align: center;
	}
</style>

<main>
	<table>
	  <tr>
	  	<!-- ASIDE -->
	  	<td class="aside" style="background:transparent; width: 16%; min-height: auto">
	  		<?php include_once('includes/components/categories.php');?>
	  	</td>

	  	<td style="background: transparent; width: 84%; min-height: 100%">
	  		<?php include_once('includes/components/contact-contents.php');?>
		</td>
	  </tr>
	</table>
</main>
<?php include('includes/templates/footer.php'); ?>








