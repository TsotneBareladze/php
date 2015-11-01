<?php 
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	
	<?php 
		if(isset($_SESSION['success']) && $_SESSION['success']==1) : ?>
		<p>შეკითხვა წარმატებით დაემატა</p>
	<?php 
	$_SESSION['success']=0;
	endif;?>

	<div class="logout" style="position:absolute; margin-left: 80%; ">
		<h1><a href="login.php">Log Out</a><h1>
	</div>

	<form method="post" action="add.php">
		
		<p><input type="text" name="title" placeholder="შეკითხვის სათაური"></p>
		
		<?php for ($i=0; $i <4 ; $i++) :?>
		<p>
			<input type="text" name="options[]" placeholder="სავარაუდო პასუხი<?=($i+1)?>">
			<input type="radio" name="correct_answer" value="<?=$i?>">
		</p>
	<?php endfor;?>
	<button type="submit">დამატება</button>
	</form>

</body>
</html>