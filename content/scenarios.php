<?php
function resizesk($source, $destination, $name) {
/* [1 - INIT & SETTINGS] */
  //$source = "landscape.jpg";
  //$destination = "resized"; // just the file name, extension is automatic
  $max_width = 250;
  $max_height = 350;
  $name = explode(".", $name);
  // Image quality
  // JPG files - 0 is lowest, 100 is highest
  // PNG files - 0 no compression to 9 most compression
  $quality = ["jpg"=>85, "jpeg"=>85, "png"=>2];
  $allowed = ["bmp", "gif", "jpg", "jpeg", "png", "webp"];
  $ext = strtolower(pathinfo($source, PATHINFO_EXTENSION));
  $size = getimagesize($source);
  $pass = true;
  $error = "";

  /* [2 - FILE CHECKS] */
  // Invalid file type
  if (!in_array($ext, $allowed)) {
    $pass = false;
  	$error = "$ext file type not allowed - $source";
  }
  // Invalid image
  if ($pass && $size == false) {
    $pass = false;
  	$error = "$source is not a valid image file.";
  }
  // Error!
  if (!$pass) { die($error); }

  /* [3 - RESIZE] */
  // Resize only if source is larger than allow max
  $width = $size[0];
  $height = $size[1];
  $destination = $destination . $name[0].".".$ext;
  if ($width>$max_width || $height>$max_height) {
    // Landscape image
    if ($width > $height) {
      $new_width = $max_width;
      $new_height = CEIL($height / ($width/$max_width));
    }
    // Square or portrait
    else {
      $new_height = $max_height;
      $new_width = CEIL($width / ($height/$max_height));
    }
    // Create new resized image
    $fn = "imagecreatefrom" . ($ext=="jpg"?"jpeg":$ext);
    $original = $fn($source);
    $resize = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($resize, $original, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    // Save resized to file
    $fn = "image" . ($ext=="jpg"?"jpeg":$ext);
    if (is_numeric($quality[$ext])) { $fn($resize, $destination, $quality[$ext]); }
    else { $fn($resize, $destination); }
    imagedestroy($original);
    imagedestroy($resize);
  } else {
    if (!copy($source, $destination)) {
      $pass = false;
      $error = "Error copying from $source to $destination";
    }
  }
  //echo $pass ? "OK" : $error ;
}
?>


<style>


div.gallery {
  margin: 12px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  height: 350px;
  background-color: white;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;

  }

.clearfix::after {
  content: "";
  clear: both;
  display: table;

}

div.wrapper {

  border-radius: 5px;
  background-color: #FCE0CD;
  padding-top: 5px;
  padding-left: 10px;
  margin:10px;
}

</style>

<body>

<?php
  $dirs = array_filter(glob('scenarios/*'), 'is_dir');
  foreach ($dirs as $directory) {
    echo "<div class='wrapper' id='". $directory ."'>";
    echo "<div class='clearfix'><p><h1>".$directory."</h1></p><hr/>";
    $files = glob("$directory/*.*");
    for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
          'jpg',
          'jpeg',
          'png'
           );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
           echo "<div class='gallery'>";
           echo "<a target='_blank' href='".$directory."/".basename($image)."'>";
           if (!file_exists($directory."/icons/".basename($image))) {
             if (!is_dir($directory."/icons/")) {
                //Create our directory if it does not exist
                mkdir($directory."/icons/");
                //echo "Directory created";
              }
             //echo $directory."/".basename($image);
             if($ext == "png"){
              $imagevar = imagecreatefrompng($directory."/".basename($image));
              resizesk($directory."/".basename($image),$directory."/icons/", basename($image));
              //$scaledimage = imagescale($imagevar, 400, 600);
              //imagepng($scaledimage, $directory."/icons/".basename($image));
              }
              if($ext == "jpg" || $ext == "jpeg"){
                $imagevar = imagecreatefromjpeg($directory."/".basename($image));
                resizesk($directory."/".basename($image),$directory."/icons/",basename($image));
                //$scaledimage = imagescale($imagevar, 400, 600);
                //imagejpeg($scaledimage, $directory."/icons/".basename($image));
               }




           }
           echo "<img src='".$directory."/icons/".basename($image) ."' alt='Random image' width='250' height='350' />";
           echo "</a>";
          //echo "<div class='desc'>Scenario ".$ext."</div>";
          echo "</div>";
          } else {
        continue;
      }
    } echo "</div></div>";
  }
         ?>
