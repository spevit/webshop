<?php
	//1. Maakt een connectie met een database
	$dbhost = "localhost";
	$dbuser = "nick1";
	$dbpass = "project1";
	$dbname = "periode1";
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
				echo "XBOX Live Gold 48 uur      €3,95";
			?>

		<Form Name ="gold 48 uur" Method ="post" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal" min="1" max="99"/>
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
	
			<?php 
				
				
				$aantal = (isset($_POST['aantal'])) ? $_POST['aantal'] : "" ;
				$artikelid = 1;
				$prijs = 3.95;
				$query = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
				values ($artikelid, $aantal, $prijs)";

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
				echo "XBOX Live Gold 14 dagen     €6,95";
			?>
	
		<Form Name ="gold 14 dagen" Method ="post" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal2" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
	
		</form>
		
			<?php 
				
		
				$aantal2 = (isset($_POST['aantal2'])) ? $_POST['aantal2'] : "" ;
				$artikelid2 = 2;
				$prijs2 = 6.95;
				$query2 = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
				values ($artikelid2, $aantal2, $prijs2)";
			

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
				echo "XBOX Live Gold 1 maand     €8,95";
			?>
	
		<Form Name ="gold 1 maand" Method ="post" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal3" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
				
			
				$aantal3 = (isset($_POST['aantal3'])) ? $_POST['aantal3'] : "" ;
				$artikelid3 = 3;
				$prijs3 = 8.95;
				$query3 = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
				values ($artikelid3, $aantal3, $prijs3)";
			
				
	
			  
	
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
				echo "XBOX Live Gold 3 maanden      €19,25";
			?>
	
		<Form Name ="gold 3 maanden" Method ="post" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal4" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
			<?php 
				
				$aantal4 = (isset($_POST['aantal4'])) ? $_POST['aantal4'] : "" ;
				$artikelid4 = 4;
				$prijs4 = 19.25;
				$query4 = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
				values ($artikelid4, $aantal4, $prijs4)";
			
				  
	
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
				echo "XBOX Live Gold 6 maanden      €31,95";
			?>
	
		<Form Name ="gold 6 maanden" Method ="post" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal5" min="1" max="99">
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		
		</form>
		
		<?php 
			
				$aantal5 = (isset($_POST['aantal5'])) ? $_POST['aantal5'] : "" ;
				$artikelid5 = 5;
				$prijs5 = 31.95;
				$query5 = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
				values ($artikelid5, $aantal5, $prijs5)";
			
					
		
			  
	
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
				echo "XBOX Live Gold 12 maanden      €42,49";
			?>
	
		<Form Name ="gold 12 maanden" Method ="get" ACTION = "test 500.php">
		Aantal: <input type="number" name="aantal6" min="1" max="99">
	
		<INPUT TYPE = "Submit" Name = "submit" VALUE = "Submit">
		</form>
		
			<?php 
				
					
					$aantal6 = (isset($_POST['aantal6'])) ? $_POST['aantal6'] : "" ;
					$artikelid6 = 6;
					$prijs6 = 42.49;
					$query6 = "insert into factuur (artikel_id_fk, aantal, verkoopprijs)
					values ($artikelid6, $aantal6, $prijs6)";
				
			  
				
				
	
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