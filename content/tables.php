<?php
if(empty($_GET["table"])) {
  $table = "01ift";
}
else {
  $table = htmlspecialchars($_GET["table"]);
}
$tabletoload = "tables/".$table .".html";
?>


<style> table {font-family: "Times New Roman", Times, serif;} </style>
<div class="w3-main w3-light-grey" >

  <!-- Header -->
  <div class="w3-bar w3-border w3-card-4" style="font-size:16px;font-weight:bold;">
  <a href="?content=tables&table=01ift" class="w3-bar-item w3-button" style="margin:2px;background-color:#E7E3F6;">IFT</a>
  <a href="?content=tables&table=02tohit" class="w3-bar-item w3-button" style="margin:2px;background-color:#007fff;">To Hit</a>
  <a href="?content=tables&table=03tokill" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff8607;">To Kill</a>
  <a href="?content=tables&table=04cc" class="w3-bar-item w3-button" style="margin:2px;background-color:#0aa82a">Close Combat</a>
  <a href="?content=tables&table=" class="w3-bar-item w3-button" style="margin:2px;background-color:#c904c9;">Sniper | HOB</a>
  <a href="?content=tables&table=" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff8607;">Concealment</a>
  <a href="?content=tables&table=" class="w3-bar-item w3-button w3-black" style="margin:2px">Terrain B</a>
  <a href="?content=tables&table=" class="w3-bar-item w3-button w3-black" style="margin:2px">Smoke | Wind | Fire</a>
  <a href="?content=tables&table=" class="w3-bar-item w3-button" style="margin:2px;background-color:#ff1f1f;color:white;">Stun | Recall | PF</a>
</div>


<div class="w3-container" style="background-color: #CCCCCC;">





    <?php
      include $tabletoload;
     ?>



</div>
