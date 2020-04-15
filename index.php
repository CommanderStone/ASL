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
<title>ASL - Helper | Tables | Scenariocards</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="icon.png">
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
</head>
<body>

<!-- Top Menü -->
<div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="?content=home" class="w3-bar-item w3-button w3-border-right <?php if ($content == "home") {echo "w3-yellow";}?>">Home</a>
  <a href="?content=phaser" class="w3-bar-item w3-button w3-border-right <?php if ($content == "phaser") {echo "w3-yellow";}?>">Phase Reference</a>
  <a href="?content=scenarios" class="w3-bar-item w3-button w3-border-right <?php if ($content == "scenarios") {echo "w3-yellow";}?>">Scenarios</a>
  <a href="?content=tables" class="w3-bar-item w3-button w3-border-right <?php if ($content == "tables") {echo "w3-yellow";}?>">Tables</a>
</div>



<?php
include $filetoload;
?>

</body>
</html>
