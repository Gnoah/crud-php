<html>
<head>
	<title>Ajouter Profil</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
//var_dump($mysqli);

if(isset($_POST['Submit'])) {	
	var_dump($_POST['Submit']);
	$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
	$prenom = mysqli_real_escape_string($mysqli, $_POST['prenom']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checking empty fields
	if(empty($nom) || empty($prenom)|| empty($age) || empty($email)) {
				
		if(empty($nom)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($prenam)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(nom,prenom,age,email) VALUES('$nom','$prenom','$age','$email')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>

</body>
</html>
