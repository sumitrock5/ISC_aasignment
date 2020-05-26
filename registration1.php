<!-- php to add the registered information to the database -->
<?php
    require_once("config.php");
	if(isset($_POST['create'])){
		$name=$_POST["names"];
		$roll=$_POST["roll"];
		$errors=array();
		$sql1="SELECT * FROM rolllist WHERE roll=? LIMIT 1";
		// rolllist is the name of the database already created using xampp
		$stmtselect1=$db->prepare($sql1);
		$result1 = $stmtselect1->execute([$roll]);
		if($result1){
			$user1=$stmtselect1->fetch(PDO::FETCH_ASSOC);
			if($stmtselect1->rowCount()>0){
				array_push($errors,"Roll No already present");
			}
		}
		if(count($errors)===0)
		{
			$sql= "INSERT INTO rolllist(name,roll) VALUES (?,?)";
			$stmtinsert= $db->prepare($sql);
			$result=$stmtinsert->execute([$name,$roll]);
			if($result)
			{
				echo "<h2>Successfully Registered</h2><br>";
			}
			else
			{
				echo "error";
			}
		}
		else
		{
			echo $errors[0]."<br>";
			echo "Register again<br>";
		}
	}
?> 