<?php
	$quizze= array(
				array(

					'title' => 'შეკითხვა ნომერი პირველი',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						1,3
						),

				),

					array(

					'title' => 'შეკითხვა ნომერი მეორე',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						1,2
						),
				),


					array(

					'title' => 'შეკითხვა ნომერი მესამე',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						2,4
						),

				),

					array(

					'title' => 'შეკითხვა ნომერი მეოთხე',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						1,3
						),
				),

					array(

					'title' => 'შეკითხვა ნომერი მეხუთე',
					
					'options' => array(
					
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						3,4
						)
				)

		);





if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
		
		$counter = 0;
		
		foreach ($_POST['options'] as $checkedIndex => $checkedValue){
			
			$_question = $quizze[$checkedIndex];
			
			if (in_array($_question['correct_answer'], $checkedValue)) {
				$counter++;
			}
	}
	echo '<p>სწორი პასუხების რაოდენობა: ' . $counter . '</p>';
	
}
?>

<form>

	
	<?php foreach ($quizze as $key => $qustions): ?>
		
		<hr>
		<p>
			<?php echo $qustions['title'];?>
		</p><br>
		<?php foreach ($qustions['options'] as $okey => $option): ?>
		
		<p>
			<label>
				<input type="checkbox" name="options[<?php echo $key;?>] value=<?php echo $okey?>">
			</label>
		
			<?php echo $option;?>
		</p>
			
		<?php endforeach ?>
		
	<?php endforeach ?>

	<p>
		<button type="submit">გაგზავნა</button>
	</p>
</form>