<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		// avariables
		$number1 = 10;
		$number2 = 20;

		// constant
		define("Course", "PHP Mastery");

		// arrays - normal and associative
		$colors = array('red', 'green', 'blue');
		$name_age = array('John'=>30, 'James'=>40, 'Jake'=>50);

		echo "Solution #1:" . $number1 + $number2 . "<br>";
		echo "Solution #2:" . $colors[0] . "<br>";
		echo "Solution #3:" . $name_age['Jake'] . "<br>";
		echo "Solution #4:" . Course;

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */

		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>