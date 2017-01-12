<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>comp4711 lab01</title>
	</head>
	<body>
		<?php
		include('Student.php');
		
		// student array
		$students = array();
		
		// add first student
		$first = new Student();
		$first->surname = "Doe";
		$first->first_name = "John";
		$first->add_email('home','john@doe.com');
		$first->add_email('work','jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;
		
		// add second student
		$second = new Student();
		$second->surname = "Einstein";
		$second->first_name = "Albert";
		$second->add_email('home','albert@braniacs.com');
		$second->add_email('work1','a_einstein@bcit.ca');
		$second->add_email('work2','albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;

		// add third student
		$third = new Student();
		$third->surname = "Yang";
		$third->first_name = "Fred";
		$third->add_email('home','fredyang001@gmail.com');
		$third->add_email('work','myang71@my.bcit.ca');
		$third->add_grade(95);
		$third->add_grade(85);
		$third->add_grade(75);
		$students['c789'] = $third;
		
		// sort the list (by first name)
		ksort($students);
		
		// display the list of students
		foreach ($students as $student)
			echo $student->toString();
		?>
	</body>
</html>