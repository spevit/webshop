<?php
	//1. Maakt een connectie met een database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "online_gaming_cards";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// test als er een error is
	if(mysqli_connect_errno()) {
		die("Database connecion failed: " . 
				mysqli_connect_error() . 
				" (" . mysqli_connect_errno() . ")" 
				);
	}
	
?>

<html lang="en">
	<head>
		<title>Xbox Gift Cards</title>
	</head>
	<body>
	
	<br><br><br> 
		<img  src="/project periode 1/img/xbox gift card 10 euro.png" alt="Xbox Gift Card 10 euro" style="width:128px;height:180px" border="1";>
	
		<br>
		
			<?php
				echo "Xbox Gift Card 10 Euro      €12,95";
			?>

		<Form Name ="card 10 euro" Method ="post" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal" min="1" max="99"/>
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
	
			<?php 
				
				// invoer in de database	
				$aantal = (isset($_POST['aantal'])) ? $_POST['aantal'] : "" ;
				$artikelid = 7;
				$query = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid, $aantal)";

			?>
	
			<?php 
	
				// Kijkt als de invoer wel of niet gelukt is 
				$result = mysqli_query($connection, $query);
				if ($result) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>
	
	
	<br><br><br>
		<img src="/project periode 1/img/xbox gift card 20 euro.png" alt="xbox gift card 20 euro" style="width:128px;height:180px" border="1";>
		
		<br>
			<?php
				echo "Xbox Gift Card 20 Euro     €22,45";
			?>
	
		<Form Name ="card 20 euro" Method ="post" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal2" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
		
			<?php 
				
				// invoer in de database
				$aantal2 = (isset($_POST['aantal2'])) ? $_POST['aantal2'] : "" ;
				$artikelid2 = 8;
				$query2 = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid2, $aantal2)";
			

				// Kijkt als de invoer wel of niet gelukt is 
				$result2 = mysqli_query($connection, $query2);
				if ($result2) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>
		
	<br><br><br>
		<img src="/project periode 1/img/xbox gift card 30 euro.png" alt="xbox gift card 30 euro" style="width:128px;height:180px" border="1";>
	
		<br>
			<?php
				echo "Xbox Gift Card 30 Euro     €30,95";
			?>
	
		<Form Name ="card 30 euro" Method ="post" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal3" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
				
				// invoer in de database
				$aantal3 = (isset($_POST['aantal3'])) ? $_POST['aantal3'] : "" ;
				$artikelid3 = 9;
				$query3 = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid3, $aantal3)";
			
				
	
			  
	
				// Kijkt als de invoer wel of niet gelukt is 
				$result3 = mysqli_query($connection, $query3);
				if ($result3) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>
	
	<br><br><br>
		<img src="/project periode 1/img/xbox gift card 40 euro.png" alt="xbox gift card 40 euro" style="width:128px;height:180px" border="1";>
	
		<br>
			<?php
				echo "Xbox Gift Card 40 Euro      €40,95";
			?>
	
		<Form Name ="gold 3 maanden" Method ="post" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal4" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
				// invoer in de database
				$aantal4 = (isset($_POST['aantal4'])) ? $_POST['aantal4'] : "" ;
				$artikelid4 = 10;
				$query4 = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid4, $aantal4)";
			
				  
	
				// Kijkt als de invoer wel of niet gelukt is 
				$result4 = mysqli_query($connection, $query4);
				if ($result4) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>
	
	
	<br><br><br>
		<img src="/project periode 1/img/xbox gift card 50 euro.png" alt="xbox gift card 50 euro" style="width:128px;height:180px" border="1";>
	
		<br>
			<?php
				echo "Xbox Gift Card 50 Euro      €49,95";
			?>
	
		<Form Name ="card 50 euro" Method ="post" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal5" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
		<?php 
				// invoer in de database
				$aantal5 = (isset($_POST['aantal5'])) ? $_POST['aantal5'] : "" ;
				$artikelid5 = 11;
				$query5 = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid5, $aantal5)";
			
					
		
			  
	
				// Kijkt als de invoer wel of niet gelukt is 
				$result5 = mysqli_query($connection, $query5);
				if ($result5) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>

	<br><br><br>
		<img src="/project periode 1/img/xbox gift card 60 euro.png" alt="xbox gift card 60 euro" style="width:128px;height:180px" border="1";>
	
		<br>
			<?php
				echo "Xbox Gift Card 60 Euro     €59,95";
			?>
	
		<Form Name ="card 60 euro" Method ="get" ACTION = "xbox gift cards.php">
		Aantal: <input type="number" name="aantal6" min="1" max="99">
	
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		</form>
		
			<?php 
				
				// invoer in de database
				$aantal6 = (isset($_POST['aantal6'])) ? $_POST['aantal6'] : "" ;
				$artikelid6 = 12;
				$query6 = "insert into winkelwagen (artikel_id, aantal)
				values ($artikelid6, $aantal6)";
			
		  
				
				
	
				// Kijkt als de invoer wel of niet gelukt is 
				$result6 = mysqli_query($connection, $query6);
				if ($result6) {
					echo "Toegevoegd aan winkelwagen";
				}
				else {
					echo "";
				}
			?>
	
	</body>
</html>


<?php
	// 5. sluit de database connectie
	mysqli_close($connection);
?>