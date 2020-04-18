<!-- !PAGE CONTENT! -->
<?php
if(empty($_GET["phase"])) {
  $phase = "rally";
}
else {
  $phase = htmlspecialchars($_GET["phase"]);
}

switch ($phase) {
  case "status":
    $pphase = "Status Summaries";
    break;
  case "rally":
    $pphase = "Rally Phase";
    break;
  case "prep":
    $pphase = "Prep Fire Phase";
    break;
  case "movement":
    $pphase = "Movement Phase";
    break;
  case "defensive":
    $pphase = "Defensive Fire Phase";
    break;
  case "advanced":
    $pphase = "Advancing Fire Phase";
    break;
  case "rout":
    $pphase = "Rout Phase";
    break;
  case "advance":
    $pphase = "Advance Phase";
    break;
  case "close":
    $pphase = "Close Combat Phase";
    break;

}



?>

<div class="w3-main w3-light-grey" >

  <!-- Header -->
  <div class="w3-bar w3-border w3-card-4" style="font-size:16px;font-weight:bold;">
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


  <div class="w3-container">
    <p><b style="font-size:25px;"><?php echo $pphase;?> </b> <?php if ($pphase != "Status Summaries") {echo "<span class='w3-badge w3-blue'>A</span> = ATTACKER Action <span class='w3-badge w3-green'>B</span> = BOTH SIDES Action <span class='w3-badge w3-red'>D</span> = DEFENDER Action";}?></p>

  </div>

  <!-- CONTENT -->


  <?php

  if(empty($_GET["phase"])) {
    $phase = "rally";
  }
  else {
    $phase = htmlspecialchars($_GET["phase"]);
  }

switch ($phase) {
  case "status":
    createTables("phasedata/status_links.dat", "w3-pale-red");
    createTables("phasedata/status_mitte.dat", "w3-lime");
    createTables("phasedata/status_rechts.dat", "w3-grey");
  break;
  case "rally":
    createTables("phasedata/rally_links.dat", "w3-pale-red");
    createTables("phasedata/rally_mitte.dat", "w3-lime");
    createTables("phasedata/rally_rechts.dat", "w3-grey");
  break;
  case "prep":
    createTables("phasedata/prep_links.dat", "w3-pale-red");
    createTables("phasedata/prep_mitte.dat", "w3-lime");
    createTables("phasedata/prep_rechts.dat", "w3-grey");
  break;
  case "movement":
    createTables("phasedata/move_links.dat", "w3-pale-red");
    createTables("phasedata/move_mitte.dat", "w3-lime");
    createTables("phasedata/move_rechts.dat", "w3-grey");
  break;
  case "rout":
    createTables("phasedata/rout_links.dat", "w3-pale-red");
    createTables("phasedata/rout_mitte.dat", "w3-lime");
    createTables("phasedata/rout_rechts.dat", "w3-grey");
  break;
  case "advance":
    createTables("phasedata/advance_links.dat", "w3-pale-red");
    createTables("phasedata/advance_mitte.dat", "w3-lime");
    createTables("phasedata/advance_rechts.dat", "w3-grey");
  break;
  case "close":
    createTables("phasedata/cc_links.dat", "w3-pale-red");
    createTables("phasedata/cc_mitte.dat", "w3-lime");
    createTables("phasedata/cc_rechts.dat", "w3-grey");
  break;
}
?>



<!-- End page content -->
</div>
