<?php
if(isset($_POST['inserer'])){

	$host="localhost";
	$data_name="music";
	$username="root";
	$pass='';
	
	$con = new  mysqli($host,$username,$pass,$data_name);
	$rslt = mysqli_query($con,"insert into test values(null,'".addslashes($_POST['nom'])."','".addslashes($_POST['prenom'])."');");
	if(mysqli_affected_rows($con)==1){
		header("Location: test.php?inserted=true");
		exit();	
	}
	header("Location: test.php?inserted=fasle");
	exit();
}
?>

<form method="POST" action="test.php">
	<?php
		if(isset($_GET['inserted'])){
			if($_GET['inserted']=='true'){
				echo 'bien inserer<br>';
			}else{
				//hadi f au cas ou kan mochkil f base donne 3ad ghadi iban 
				echo "Error : n'est pas inserer<br>";
			}
		}
	?><br>
	<input type="text" name="nom" required="" placeholder="your First name"><br><br>
	<input type="text" name="prenom" required="" placeholder="your last name"><br><br>
	<input type="submit" name="inserer">
</form>

