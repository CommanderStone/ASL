<center>
<?php
if(!empty($_GET["submit"])) {
    if($_GET["ift"] === "ift"){
      echo"<h2>You chose to use the IFT. Come back to preferences to change that.</h2>";
      $_SESSION["ift"] = "ift";
    }
    if($_GET["ift"] === "iift"){
      echo"<h2>You chose to use the IIFT. Come back to preferences to change that.</h2>";
      $_SESSION["ift"] = "iift";
    }

  }

else {
  ?>


  <h2>ASL-Assist Settings</h2>
  <p>For now you can check whether you would like to use IFT or IIFT. This decision is stored until you close the browser.</p>
  <form action="?content=prefs" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" style="max-width:28cm;" method="get">


    <p>
    <input class="w3-check" type="radio" checked="checked" name="ift" value="ift">
    <label> IFT</label></p>
    <p>
    <input class="w3-check" type="radio" name="ift" value="iift">
    <label> IIFT</label></p>
    <input type="hidden" name="content" value="prefs">
    <button name="submit" value="yes" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" style="width:100px;">Send</button>
  </form>

<?php } ?>
</center>
