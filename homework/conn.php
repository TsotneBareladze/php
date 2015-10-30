<?php
try {
	$dbh = new PDO('mysql:host = localhost, dbname= newproject', 'root','' );


	//Es aris bazashi monacemeis shetana
$sql = "INSERT INTO regForm(userName,password,email) VALUES (:userName,:password,:email)"
$stmt = $db-> prepare($sql);
$stmt->bindParam(':userName', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);
$stmt->execute();


//Es aris bazidan monacemebis gamotana
	$sql = "SELECT * FROM regForm";
    $users = $dbh->query($sql);
    $result = $users->fetch(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
    	return $row['username'] ."-".$row['email'];
         
    }
   
    $dbh = null;
}



} catch (PDOException $e) {
	echo $e->getMessage(); "<br>";
	die();
  }
?>
