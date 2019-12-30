<style>
	aside{
		background: orange;
		background: transparent;
		width: 100%;
		height: 600px;
		margin: 0;
		padding: 0;
	}
	.navigation ul{
		margin: 0;
		padding: 0;
	}
	.navigation ul .products, .navigation ul .brands{
		background: #646060;
		border-bottom: 0px solid #646060;
		border-top: 0px solid #646060;
	}
	.navigation ul .products:hover, .navigation ul .brands:hover{
		background: #646060;
	}
	.navigation ul li p{
		margin: 0;
		padding: 0;
		color: #ffffff;
		text-align: center;
	}
	.navigation ul li{
		list-style: none;
		display: block;
		background: transparent;
		width: ;
		height: 30px;
		border-bottom: 1px solid #e4e4e4;
		padding: 12px 0 0 10%;
	}
	.navigation ul li:hover{
		background: #e4e4e4;
		transition: 0.3s;
	}
	.navigation ul a{
		text-decoration: none;
		color: rgb(72,159,69);
	}
	.navigation ul a li span{
		margin: 0 0 0 60%;
		color: #cccccc;
	}
	.advert{
		margin: 20% 10% 0 10%
	}
</style>
<aside id="categories" class="categories">
	<div class="navigation">
		<ul>
			<li class="products"><p>Products</p></li>
			<a href="<?php echo "includes/components/dog/dog.php"; ?>"><li>Dog &nbsp;&nbsp;&nbsp; <span>(5)</span></li></a>
			<a href="<?php echo "includes/components/cat/cat.php"; ?>"><li>Cat &nbsp;&nbsp;&nbsp;&nbsp; <span>(3)</span></li></a>
			<a href="<?php echo "includes/components/bird/bird.php"; ?>"><li>Bird &nbsp;&nbsp;&nbsp; <span>(0)</span></li></a>
			<a href="<?php echo "includes/components/reptile/reptile.php"; ?>"><li>Reptile <span>(0)</span></li></a>
		</ul>
		<ul>
			<li class="brands"><p>Brands</p></li>
			<li><a href="<?php echo "includes/components/brands/brands.php"; ?>">Shop by Brand</a></li>
		</ul>
		<div class="advert">
			<p><a href="includes/components/brands/iams.php"><img src="img/logos/iams-ad.jpg" width="165px" height="auto"></a></p>
			<p><a href="terms.php"><img src="img/logos/delivery.jpg"></a></p>
		</div>
	</div>
</aside>
