<?php 

session_start();
try {
	$db = new PDO('mysql:host=127.0.0.1; dbname=newproject', 'root', '');
	$db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	// 	$query = $db->query('SELECT * FROM users');//dakavshireba cxriltan anu tabletan
	
// 	while ($row = $query->fetch()) {// monacemebis amogeba cxrilidan row_ebad
// 	echo $row['email'] .'--'. $row['name'], '<br>';
// }
	$name = $_POST['name'];
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$password = $_POST['password'];


	// $name = 'ASFHASKHFAKJ';
	// $email = 'SAKFSKDHS';
	// $fullname = 'SADKFJSLDK';
	// $password = 'skdjfslkdfgsklh';

	
	$sql ="INSERT INTO users(name,email,fullname,password)
			VALUES(:name,:email,:fullname,:password)";
	$query=$db->prepare($sql);
	$query->execute(array(
		':name'=>$name,
		':email'=>$email,
		':fullname'=>$fullname,
		':password'=>$password
		));	

} 
	catch (PDOException $e) {
		echo $e->setAttribute();
		die();
}

	
	
	
	
	
?>