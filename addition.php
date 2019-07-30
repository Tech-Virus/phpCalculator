<html>
<body>
<h1>This will add up two numbers</h1>

<?php
  $holder = $_GET['first'] + $_GET['second'];
  echo $_GET['first']." + ". $_GET['second']. " = ". $holder;
?>
 
  </br>

<a href="index.php">Reset</a>
</body>
</html>
