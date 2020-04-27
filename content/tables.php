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


<style> table {font-family: "Times New Roman", Times, serif;}
		body {
			background-color: <?php echo "#".$bgcolor;?>
		}
 </style>

<div class="w3-main w3-light-grey">

  <!-- Header -->
  <div class="w3-bar w3-border w3-card-4" style="font-size:16px;font-weight:bold;">
    <?php
    if($_SESSION["ift"] ==   "iift") { ?>
        <a href="?content=tables&table=01ift&bgcolor=CCCCCC" class="w3-bar-item w3-button" style="margin:2px;background-color:#CCCCCC;">IIFT</a>
    <?php }
    if($_SESSION["ift"] === "ift") {?>
        <a href="?content=tables&table=01ift&bgcolor=CCCCCC" class="w3-bar-item w3-button" style="margin:2px;background-color:#CCCCCC;">IFT</a>
    <?php } ?>
  
  <a href="?content=tables&table=02tohit&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Hit</a>
  <a href="?content=tables&table=03tokill&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Kill</a>
  <a href="?content=tables&table=04cc&bgcolor=F2D7C5" class="w3-bar-item w3-button" style="margin:2px;background-color:#F2D7C5">Close Combat</a>
  <a href="?content=tables&table=05asniperhob&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Sniper | HOB</a>
  <a href="?content=tables&table=06aconcealment&bgcolor=F7D2C2" class="w3-bar-item w3-button" style="margin:2px;background-color:#F7D2C2;">Concealment</a>
  <a href="?content=tables&table=07bterrain&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Terrain B</a>
  <a href="?content=tables&table=08smokewindfire&bgcolor=33BB33" class="w3-bar-item w3-button" style="margin:2px;background-color:#33BB33;">Smoke | Wind | Fire</a>
  <a href="?content=tables&table=16mf&bgcolor=F2D7C5" class="w3-bar-item w3-button" style="margin:2px;background-color:#F2D7C5;">MF & PP Chart</a>
  <div class="w3-dropdown-hover">
    <button class="w3-bar-item w3-button" style="background-color:#E09494;border:2px solid white;">Miscellaneous Tables</button>
    <div class="w3-dropdown-content w3-bar-block w3-border"  style="margin-top:35px;">
    <a href="?content=tables&table=09tohitextras&bgcolor=85C7E5" class="w3-bar-item w3-button" style="margin:2px;background-color:#85C7E5;">To Hit Extras</a>
    <a href="?content=tables&table=11bdemiscellaneous&bgcolor=9A9292" class="w3-bar-item w3-button" style="margin:2px;background-color:#9A9292;">B - D - E Miscellaneous Charts</a>
    <a href="?content=tables&table=13terrainf&bgcolor=C5AA77" class="w3-bar-item w3-button" style="margin:2px;background-color:#C5AA77;">Terrain F - Desert</a>
    <a href="?content=tables&table=14terraing&bgcolor=BFD771" class="w3-bar-item w3-button" style="margin:2px;background-color:#BFD771">Terrain G - PTO</a>
    <a href="?content=tables&table=15nc&bgcolor=58AA00" class="w3-bar-item w3-button" style="margin:2px;background-color:#58AA00;">National Capabilities</a>
    <a href="?content=tables&table=10dstunrecallpf&bgcolor=BBBBBB" class="w3-bar-item w3-button" style="margin:2px;background-color:#BBBBBB;color:white;">Stun | Recall | PF</a>


  </div>
</div>

</div>
</div>
</div>

<div class="contentheight">
<div class="w3-container" style="background-color: #<?php echo $bgcolor;?>; height:100%;">





    <?php
      include $tabletoload;
     ?>



</div>
