<?php
if(empty($_GET["table"])) {
  $table = "01ift";
  $bgcolor = "CCCCCC";
}
else {
  $table = htmlspecialchars($_GET["table"]);
  $bgcolor = htmlspecialchars($_GET["bgcolor"]);
}
$tabletoload = "tables/".$table .".html";
?>


<style> table {font-family: "Times New Roman", Times, serif;} </style>
<div class="w3-main w3-light-grey" >

  <!-- Header -->
  <div class="w3-bar w3-border w3-card-4" style="font-size:16px;font-weight:bold;">
  <a href="?content=tables&table=01ift&bgcolor=CCCCCC" class="w3-bar-item w3-button" style="margin:2px;background-color:#CCCCCC;">IFT</a>
  <a href="?content=tables&table=02tohit&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Hit</a>
  <a href="?content=tables&table=03tokill&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Kill</a>
  <a href="?content=tables&table=04cc&bgcolor=F2D7C5" class="w3-bar-item w3-button" style="margin:2px;background-color:#F2D7C5">Close Combat</a>
  <a href="?content=tables&table=05asniperhob&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Sniper | HOB</a>
  <a href="?content=tables&table=06aconcealment&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Concealment</a>
  <a href="?content=tables&table=07bterrain&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Terrain B</a>
  <a href="?content=tables&table=08smokewindfire&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Smoke | Wind | Fire</a>
  <a href="?content=tables&table=10dstunrecallpf&bgcolor=BBBBBB" class="w3-bar-item w3-button" style="margin:2px;background-color:#BBBBBB;color:white;">Stun | Recall | PF</a>
</div>


<div class="w3-container" style="background-color: #<?php echo $bgcolor;?>;">





    <?php
      include $tabletoload;
     ?>



</div>
