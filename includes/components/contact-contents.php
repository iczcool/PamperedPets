<style>
	.content{
		position: relative;
		background: #f1f1f1;
		background: transparent;
		width: 95%;
		height: 1000px;
		/*height: auto;*/
		margin: 60px 2.5% 0 2.5%;
		padding: 1% 0 0 0;
		color: darkslategrey;
	}
	.content h1{
		background-color: #646060;
		background: transparent;
		line-height: 40px; 
		text-align: center;
		border: 0px solid blue;
		color: darkslategrey;
		/*margin: 8% 0;*/
		padding: 1% 0;
	}
	/*.about_us article{
		position: relative;
		background: transparent;
		width: auto;
		height: 220px;
		margin: 0 0 16% 0;
		padding: 20px 16%;
	}*/

	.content form{
		position: relative;
		background: transparent;
		width: 65%;
		height: auto;
	}
	.content p input[type=text]{
		height: 40px;
		width: 300px;
		border-top: 0;
		border-right: 0;
		border-left: 0;
		border-bottom: 1px solid lightgrey;

		padding: 0 4px;
		font-size: 20px;
		font-weight: 300;
	}
	.content p .name{
		float: left;
	}
	.content p .email{
		margin: 0 0 0 28px;
	}
	.content input:focus, .content select:focus, .content textarea:focus, .content button:focus {
	    outline: none;
	    border-bottom: 1px solid grey;
	}
	.content p input[type=submit]{
		background-color: #008CBA;
		width: 200px;
	    border: 2px solid #008CBA;
	    color: #ffffff;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}
	
	.address {
		position: absolute;
		background:transparent;
		width: 29%;
		height: auto;
		margin: 0;
		padding: 0 2% 0 2%;
		right: 0;
		top: 490px;
	}
</style>
<div class="content">
	<h1>Contact Us</h1>
	<iframe style="margin-bottom: 40px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.311801690529!2d-0.1398741842502648!3d50.95493917954823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48758c4ca9e0746f%3A0x1489121bc46c6038!2sSchool+Cl%2C+Burgess+Hill+RH15!5e0!3m2!1sen!2suk!4v1468682409665" width="1080" height="300" frameborder="1" style="border:1" allowfullscreen>
	</iframe>
		<!-- <embed style="background: transparent; border: 1px solid grey"></embed> -->
		<div>
			<form id="contact-form" class="contact-form" action="/Repository/Pampered Pets/v 1.0/information.php" method="post">
				<!-- Name -->
		        <p>
		          <input id="name" name="name" class="name" maxlength="120" type="text" autocomplete="off" placeholder="Name" required />
		        </p>
		        <!-- Email -->
		        <p>
		          <input id="email" name="email" class="email" maxlength="120" type="text" autocomplete="off" placeholder="E-mail" required />
		        </p>
		        <!-- Telephone -->
		        <p>
		          <input id="telephone" name="telephone" class="telephone" maxlength="120" type="text" autocomplete="off" placeholder="Telephone" />
		        </p>
		        <!-- Message -->
		        <p>
		          <textarea id="message" name="message" class="message" cols="77" rows="10" autocomplete="off" placeholder="Your Message" required></textarea>
		        </p>
		        <p class="submit">
		          <!-- <input id="send" type="button" value="Send Message"/> -->
		          <input id="send" type="submit" value="Send Message"/>
		        </p>
		    </form>
		</div>
		<div class="address">
			<h2>Our Address</h2>
			<p>
				Pampered Pets<br />
				School Close, Queen Elizabeth Avenue, Burgess Hill, West Sussex, RH15 9RX.
			</p>
			<p>Tel: 020 8977 8899</p>
			<p>Opening Hours: <br />
			Mon - Sat: 9:30am &#8211; 5:30pm<br />
			Sun: 2:00pm &#8211; 5:00pm</p>
		</div>
	</div>