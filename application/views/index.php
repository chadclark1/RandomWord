<?php var_dump($this->session->all_userdata()); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Random Word Generator</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/style.css">

</head>
<body>
	<header>
		<nav class="navbar navbar-light bg-faded">
		  <h1 class="navbar-brand">Random Word Generator</h1>
		</nav>
	</header>
	<div class="container text-center">

		<h4 class="col-md-6 col-md-offset-3 attempt">Random Word (attempt # <?php echo $counter ?>)</h4>
		<h2 class="col-md-4 col-md-offset-4 random"><?php echo $string ?></h2>
		<div class=" col-md-12 text-center">
			<form action="/random/generate" method="post">
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>
