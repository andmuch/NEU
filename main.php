<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Practice</title>
	<link rel="stylesheet"  href="style.css" />
</head>
<body>
	
	<div class="flex-container">

		<div class="header">
			<?php include 'logo.inc.php' ?>
			<?php include 'menu.inc.php' ?>
		</div>

		<div class="about_me">
			
			<h1> <?php echo $p ?></h1>

			<div class="data">
				<div class="myImg">
					<?php
					echo '<img src="/img/php">';
					?>
				</div>

				<div class="fullname">
					<p> Меня зовут
					<?php echo $name,' ',$surname . '<br>';
						echo 'Родился в городе', ' ',$city; ?>
					</p>

					<p> Мне
					<?php echo $age; ?>
					лет </p>
					<p>Тут я показываю как создавать переменные</p>
					<p>и простые операции с ними</p>
				</div> 
			</div>
			
			<div class="knowledge">
				<p>	
				<?php include 'knowledge.inc.php'; ?></p>
				<?php 
					echo $a, ' ', $b, ' ', $c;
				?> <br>

				<?php
					$a = 10;
					$b = 20;
					$c = $a + $b;
					echo $c;
				?> <br>
				<?php
					echo $d;
				?>

			</div>
	
			<div class="article">
				<h2>
					<p class="text">
						На этом месте должна быть ваша реклама и описание моих скромных успехов.
					</p>
				</h2>
			</div>
		</div>
		
			<?php include 'footer.inc.php' ?>
		
		</div>


</body>
</html>






