<?php require 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Homestead</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 12%">
        <h4>Homestead Sites</h4>
        <ul>
      	<?php foreach (list_sites() as $site): ?>
      		<li><a href="http://<?= $site ?>/"><?= $site ?></a></li>
      	<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>