<?php
session_start();
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
<title>ASL - Assist | Tables and Phase Reminder</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="assist.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="icon.png">
</head>

<body>
  <script>


      window.onload = function () {
          console.log('Dokument geladen');
          ;
          var headerheight = document.getElementById("myHeader").offsetHeight;
          console.log(headerheight);


          var style = document.createElement('style');
          style.innerHTML = `
          .contentheight {
            margin-top: ` + headerheight + `px;
          }`;
  document.head.appendChild(style);
      }

</script>
<!-- Top Menü -->
<div class="header sticky" id="myHeader" style="z-index: 50000;">
  <div class="w3-bar w3-border w3-card-4 w3-light-grey">
    <a href="?content=home" class="w3-bar-item w3-button w3-border-right <?php if ($content == "home") {echo "w3-yellow";}?>">Home</a>
    <div class="w3-dropdown-hover">
      <a href="?content=phaser&phase=status" class="w3-bar-item w3-button w3-border-right <?php if ($content == "phaser") {echo "w3-yellow";}?> ">Phase Reference</a>
      <div class="w3-dropdown-content w3-bar-block w3-border"  style="margin-top:35px;">
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

  <!-- <a href="?content=tables" class="w3-bar-item w3-button w3-border-right <?php if ($content == "tables") {echo "w3-yellow";}?>">Tables</a> -->
  <div class="w3-dropdown-hover">
    <a href="?content=tables&table=01ift&bgcolor=CCCCCC" class="w3-bar-item w3-button w3-border-right <?php if ($content == "tables") {echo "w3-yellow";}?> ">Tables</a>
    <div class="w3-dropdown-content w3-bar-block w3-border"  style="margin-top:35px;">
    <a href="?content=tables&table=01ift&bgcolor=CCCCCC" class="w3-bar-item w3-button" style="margin:2px;background-color:#CCCCCC;">IFT</a>
    <a href="?content=tables&table=02tohit&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Hit</a>
    <a href="?content=tables&table=03tokill&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Kill</a>
    <a href="?content=tables&table=04cc&bgcolor=F2D7C5" class="w3-bar-item w3-button" style="margin:2px;background-color:#F2D7C5">Close Combat</a>
    <a href="?content=tables&table=05asniperhob&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Sniper | HOB</a>
    <a href="?content=tables&table=06aconcealment&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Concealment</a>
    <a href="?content=tables&table=07bterrain&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Terrain B</a>
    <a href="?content=tables&table=08smokewindfire&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Smoke | Wind | Fire</a>
    <a href="?content=tables&table=16mf&bgcolor=F2D7C5" class="w3-bar-item w3-button" style="margin:2px;background-color:#F2D7C5;">MF & PP Chart</a>

  </div>
</div>
<a href="?content=scenarioaid" class="w3-bar-item w3-button w3-border-right <?php if ($content == "scenarios") {echo "w3-yellow";}?>">Scenario Aid</a>
<a href="?content=prefs" class="w3-bar-item w3-button w3-border-right <?php if ($content == "preferences") {echo "w3-yellow";}?>">Preferences</a>
<a href="?content=contact" class="w3-bar-item w3-button w3-border-right <?php if ($content == "preferences") {echo "w3-yellow";}?>">Contact</a>
</div>

<!-- </div> -->


<?php
include $filetoload;
?>
</div>
</body>
</html>
