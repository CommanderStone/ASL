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
<title>ASL - Assist | Tables | Scenariocards</title>
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
  <div class="w3-dropdown-hover">
    <button class="w3-bar-item w3-button w3-border-right <?php if ($content == "phaser") {echo "w3-yellow";}?>">Phase Reference</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
      <a href="?content=phaser&phase=status" class="w3-bar-item w3-button" style="margin:2px;background-color:#E7E3F6;">Status Summaries</a>
      <a href="?content=phaser&phase=rally" class="w3-bar-item w3-button" style="margin:2px;background-color:#007fff;">Rally Phase</a>
      <a href="?content=phaser&phase=prep" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff8607;">Prep Fire Phase</a>
      <a href="?content=phaser&phase=movement" class="w3-bar-item w3-button" style="margin:2px;background-color:#0aa82a">Movement Phase</a>
      <a href="?content=phaser&phase=defensive" class="w3-bar-item w3-button" style="margin:2px;background-color:#c904c9;">Defensive Fire Phase</a>
      <a href="?content=phaser&phase=advanced" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff8607;">Advancing Fire Phase</a>
      <a href="?content=phaser&phase=rout" class="w3-bar-item w3-button w3-black" style="margin:2px">Rout Phase</a>
      <a href="?content=phaser&phase=advance" class="w3-bar-item w3-button w3-black" style="margin:2px">Advance Phase</a>
      <a href="?content=phaser&phase=close" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff1f1f;color:white;">Close Combat Phase</a>
    </div>
  </div>
  <!--<a href="?content=phaser" class="w3-bar-item w3-button w3-border-right <?php if ($content == "phaser") {echo "w3-yellow";}?>">Phase Reference</a>-->
  <a href="?content=scenarios" class="w3-bar-item w3-button w3-border-right <?php if ($content == "scenarios") {echo "w3-yellow";}?>">Scenarios</a>
  <a href="?content=tables" class="w3-bar-item w3-button w3-border-right <?php if ($content == "tables") {echo "w3-yellow";}?>">Tables</a>

</div>



<?php
include $filetoload;
?>

</body>
</html>
