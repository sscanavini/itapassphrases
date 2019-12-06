<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Password phrase generator in italiano</title>
  </head>
  <body>
    <div class="jumbotron text-center">
    <h1>Password phrase generator</h1>
    <h3>(in italiano)</h3>	
    <p>Selezionare le impostazioni e cliccare sul tasto Genera!</p> 
    <p></p>	
	<div class="form-group">
	<form action="passphrasegen.php" method="POST" id="wordform">
	<p>Inserire il numero di parole da generare: 
	<select class="selectpicker" data-style="btn-primary"  name="number" form="wordform">
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4" selected>4</option>
		<option value="5">5</option>
	</select>
	<p><input type="submit" class="btn btn-primary" value="Genera!"></input></p>
	</div>
	<p></p>
	<?php
	function getRandomLine() { 
    	$lines = file('./resources/words_italian') ; 
    	return $lines[array_rand($lines)] ; 
	} ?>
	<div class="panel panel-danger"><h5>
	<?php 
	if (isset($_POST['number']) && !empty($_POST['number'])) {
		for($i=1; $i<=$_POST['number'];$i++) {
			$word = getRandomLine();
			echo $word." ";
			}
	}
	?>
	</h5></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
