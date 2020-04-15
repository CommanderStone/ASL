
<script>
function hidesection(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


<?php


function createTables($phase, $color) {
  echo "<div class='w3-container w3-third' style='margin-top:15px;'>";
  $pics = "";
  $lines = file($phase);
  foreach ($lines as $line) {
    $tablecontent = explode(";",$line);
    switch ($tablecontent[0]) {
      case "C":
        echo "<table class='w3-table-all' >\n";
        echo " <tr class='". $color ."'>\n";
        echo "   <td colspan='2'><button onclick=\"hidesection('".$tablecontent[2]."')\" class='w3-button'>
". $tablecontent[1] ." <- Click me!</button></td>\n";
        echo "   ";
        echo " </tr>\n";
        echo "</table>\n";
        //echo "<p></p>";

        echo "<table class='w3-table-all ' style='margin-bottom:15px;width:100%;display:none;' id='".  $tablecontent[2] ."'>\n";
        echo "<thead>\n";
        echo " <tr  class='. $color .'>\n";
        echo "   <td colspan='2' style='width:90%;'></td>\n";
        echo "   ";
        echo " </tr>\n";
        echo "</thead>\n";


        break;
      case "N":
        if (ISSET($tablecontent[2]) AND ISSET($tablecontent[3])) {
        $pics = "<img src='images/". $tablecontent[2] .".png' alt='' class='w3-half' style='width:20px;height:20px; margin-right:5px;'><img src='images/". $tablecontent[3] .".png' alt='' style='width:20px;height:px; margin-right:5px;' class='w3-half'>";
        }

        echo "<table class='w3-table-all' style='margin-bottom:15px'>\n";
        echo "<thead>\n";
        echo " <tr class='. $color .'>\n";
        echo "   <td colspan='2' style='width:10px'>". $pics ."<b>". $tablecontent[1] ."</b></td>\n";
        echo "   ";
        echo " </tr>\n";
        echo "</thead>\n";
        break;
      case "B":
        echo " <tr class=''>\n";
        echo "   <td style='width:10px'><span class='w3-badge w3-green'>" . $tablecontent[0] ."</span></td>\n";
        echo "   <td>". $tablecontent[1] ."</th>\n";
        echo " </tr>\n";
        break;
      case "A":
        echo " <tr class=''>\n";
        echo "   <td style='width:10px'><span class='w3-badge w3-blue'>" . $tablecontent[0] ."</span></td>\n";
        echo "   <td>". $tablecontent[1] ."</td>\n";
        echo " </tr>\n";
        break;
      case "D":
        echo " <tr class=''>\n";
        echo "   <td style='width:10px'><span class='w3-badge w3-red'>" . $tablecontent[0] ."</span></td>\n";
        echo "   <td>". $tablecontent[1] ."</td>\n";
        echo " </tr>\n";
        break;
      case "X";
        echo "</table>\n";
        break;
      case "O":
        if (!ISSET($tablecontent[2])) {
          $tablecontent[2] = "";
          $tablecontent[3] = "";
        }

        echo " <tr class=''>\n";
        echo "   <td style='width:10px'></td>\n";
        echo "   <td>". $tablecontent[1] ."</td>\n";
        echo " </tr>\n";
        break;
      case "T":
        if (!ISSET($tablecontent[2])) {
          $tablecontent[2] = "";
          //$tablecontent[3] = "";
        }

        echo " <tr class='' >\n";
        echo "   <td>". $tablecontent[2] ."</td>\n";
        echo "   <td>". $tablecontent[1] ."</td>\n";
        echo " </tr>\n";
        break;
      }



  }

  echo "</div>";
}


?>
