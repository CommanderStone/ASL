<?php
require"aslfunctions.php";
if(empty($_GET["content"])) {
  $content = "home";
}
else {
  $content = htmlspecialchars($_GET["content"]);
}
$filetoload = "content/".$content.".php";


?>


<!DOCTYPE html>
<html lang="en">
<head>


</head>
<title>ASL - Helper | Tables | Scenariocards</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
<style>
  html, body, h1, h2, h3, h4, h5, h6 {
font-family: 'Baloo Thambi 2', cursive;
}
body {
  font-size:15px;
}

  .marright {
    margin-right:10px;
  }
</style>
<body>

<!-- Top Menü -->
<div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="?content=home" class="w3-bar-item w3-button w3-border-right ">Home</a>
  <a href="?content=phaser" class="w3-bar-item w3-button w3-border-right">Phase Reference</a>
  <a href="?content=scenarios" class="w3-bar-item w3-button w3-border-right">Scenarios</a>
  <a href="?content=tables" class="w3-bar-item w3-button w3-border-right">Tables</a>
</div>



<?php
include $filetoload;
?>

</body>
</html>
