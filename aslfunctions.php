<?php


function createTables($phase, $color) {
  echo "<div class='w3-container w3-third' style='margin-top:15px;'>";

  $lines = file($phase);

  foreach ($lines as $line) {
    $tablecontent = explode(";",$line);
    switch ($tablecontent[0]) {
      case "N":
        if (!ISSET($tablecontent[2])) {
          $tablecontent[2] = "";
          $tablecontent[3] = "";
        }
        echo "<table class='w3-table-all' style='margin-bottom:15px'>\n";
        echo "<thead>\n";
        echo " <tr class='. $color .'>\n";
        echo "   <td colspan='2' style='width:10px'><img src='images/". $tablecontent[2] .".png' alt='' class='w3-half' style='width:20px;height:20px; margin-right:5px;'><img src='images/". $tablecontent[3] .".png' alt='' style='width:20px;height:px; margin-right:5px;' class='w3-half'><b>". $tablecontent[1] ."</b></td>\n";
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

        echo " <tr class=''>\n";
        echo "   <td style='width:10px'>". $tablecontent[2] ."</td>\n";
        echo "   <td>". $tablecontent[1] ."</td>\n";
        echo " </tr>\n";
        break;
      }



  }

  echo "</div>";
}


?>
