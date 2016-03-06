<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Software Industry Student Group" />
		<title>Header and footer (includes) test page</title>
		<link rel="icon" href="favicon.png" type="image/png">
	</head>
	<body>
		
		
		<!-- navigation bar -->
		<?php include('../includes/navbar.include.php'); ?>

		
		<!-- main content -->	
			<main>
				<h1>Test Page</h1>
				<p>This is a test page</p>
				<p>The main purpose is to ensure correct and complete function of navigation and footer</p>
			</main>
		
		
		<!-- footer -->
		<?php include('../includes/footer.include.php'); ?>
			
			
		<!-- scripts and styles -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
		
	</body>
</html>