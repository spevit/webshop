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
		<title>Xbox live gold</title>
	</head>
	<body>
	
	<br><br><br> 
		<img src="/project periode 1/img/xbox live 48 uur.png" alt="Xbox live 48 uur" style="width:128px;height:180px;"> 
	
		<br>
		
			<?php
				echo "Xbox Live Gold 48 uur      €3,95";
			?>

		<Form Name ="gold 48 uur" Method ="post" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal" min="1" max="99"/>
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
	
			<?php 
				
				// invoer in de database	
				$aantal = (isset($_POST['aantal'])) ? $_POST['aantal'] : "" ;
				$artikelid = 1;
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
		<img src="/project periode 1/img/xbox live 14 dagen.png" alt="Xbox live 14 dagen" style="width:128px;height:180px;">
		
		<br>
			<?php
				echo "Xbox Live Gold 14 dagen     €6,95";
			?>
	
		<Form Name ="gold 14 dagen" Method ="post" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal2" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
		
			<?php 
				
				// invoer in de database	
				$aantal2 = (isset($_POST['aantal2'])) ? $_POST['aantal2'] : "" ;
				$artikelid2 = 2;
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
		<img src="/project periode 1/img/xbox live 1 maand.png" alt="Xbox live 1 maand" style="width:128px;height:180px;">
	
		<br>
			<?php
				echo "Xbox Live Gold 1 maand     €8,95";
			?>
	
		<Form Name ="gold 1 maand" Method ="post" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal3" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
				
				// invoer in de database	
				$aantal3 = (isset($_POST['aantal3'])) ? $_POST['aantal3'] : "" ;
				$artikelid3 = 3;
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
		<img src="/project periode 1/img/xbox live 3 maanden.png" alt="Xbox live 3 maanden" style="width:128px;height:180px;">
	
		<br>
			<?php
				echo "Xbox Live Gold 3 maanden      €19,25";
			?>
	
		<Form Name ="gold 3 maanden" Method ="post" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal4" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
			// invoer in de database	
				$aantal4 = (isset($_POST['aantal4'])) ? $_POST['aantal4'] : "" ;
				$artikelid4 = 4;
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
		<img src="/project periode 1/img/xbox live 6 maanden.png" alt="Xbox live 6 maanden" style="width:128px;height:180px;">
	
		<br>
			<?php
				echo "Xbox Live Gold 6 maanden      €31,95";
			?>
	
		<Form Name ="gold 6 maanden" Method ="post" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal5" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
		<?php 
				// invoer in de database	
				$aantal5 = (isset($_POST['aantal5'])) ? $_POST['aantal5'] : "" ;
				$artikelid5 = 5;
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
		<img src="/project periode 1/img/xbox live 12 maanden.png" alt="Xbox live 12 maanden" style="width:128px;height:180px;">
	
		<br>
			<?php
				echo "Xbox Live Gold 12 maanden      €42,49" . "<br>"  . " €17,51 Korting!";
			?>
	
		<Form Name ="gold 12 maanden" Method ="get" ACTION = "xbox live gold.php">
		Aantal: <input type="number" name="aantal6" min="1" max="99">
	
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		</form>
		
			<?php 
				
				// invoer in de database	
				$aantal6 = (isset($_POST['aantal6'])) ? $_POST['aantal6'] : "" ;
				$artikelid6 = 6;
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