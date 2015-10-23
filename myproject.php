<?php
	$quizze= array(
				array(

					'title' => 'შეკითხვა ნომერი პირველი(2 სწორი პასუხი)',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						'1','3'
						),

				),

					array(

					'title' => 'შეკითხვა ნომერი მეორე (2 სწორი პასუხი)',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						'1','2'
						),
				),


					array(

					'title' => 'შეკითხვა ნომერი მესამე (2 სწორი პასუხი)',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						'2','4'
						),

				),

					array(

					'title' => 'შეკითხვა ნომერი მეოთხე (2 სწორი პასუხი)',
					
					'options' => array(
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						'1','3'
						),
				),

					array(

					'title' => 'შეკითხვა ნომერი მეხუთე (2 სწორი პასუხი)',
					
					'options' => array(
					
					'პასუხი1','პასუხი2','პასუხი3','პასუხი4'
					),
					'correct_answer' => array(
						'3','4'
						)
				)

		);



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