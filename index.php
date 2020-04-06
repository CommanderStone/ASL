<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-medium w3-padding" style="z-index:3;width:200px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-32"><b>Advanced<br>Squad Leader</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Phase Reference</a>
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a>
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>Advanced Squad Leader</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main " style="margin-left:220px;margin-right:20px w3-light-grey">

  <!-- Header -->
  <div class="w3-bar w3-border w3-card-4 w3-light-grey">
  <a href="#" class="w3-bar-item w3-button w3-indigo" style="margin:2px">Rally Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-amber" style="margin:2px">Prep Fire Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-green" style="margin:2px">Movement Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-purple" style="margin:2px">Defensive Fire Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-amber" style="margin:2px">Advancing Fire Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-black" style="margin:2px">Route Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-black" style="margin:2px">Advance Phase</a>
  <a href="#" class="w3-bar-item w3-button w3-red" style="margin:2px">Close Combat Phase</a>
</div>


  <div class="w3-container">
    <h1><b>Rally Phase</b></h1>

  </div>

  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">

    </div>

    <div class="w3-half">

    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>






  <!-- Packages / Pricing Tables -->
  <div class="">
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey">
        <li class="w3-dark-grey w3-padding-small" style="padding:5px">START:</li>
        <li  class="w3-padding-small"><span class="w3-blue w3-padding-small w3-round-xlarge">A</span> Reinforcements roll, place arriving reinforcements</li>
        <li  class="w3-padding-small"><span class="w3-blue w3-padding-small w3-round-xlarge">A</span> Wind Change</li>
        <li  class="w3-padding-small"><span class="w3-green w3-padding-small w3-round-xlarge">B</span> Recombine HS</li>
        <li  class="w3-padding-small"><span class="w3-green w3-padding-small w3-round-xlarge">B</span> Recover SW/Gun</li>
      </ul>
      <ul class="w3-ul w3-light-grey" style="margin-top:15px">
        <li class="w3-dark-grey w3-padding-small" style="padding:5px">DURING:</li>
        <li  class="w3-padding-small"><span style="margin-right:4px"class="w3-blue w3-padding-small w3-round-xlarge">A</span> Deploy squads</li>
        <li  class="w3-padding-small"><span class="w3-blue w3-padding-small w3-round-xlarge">A</span> Scrounge Vehicle</li>
        <li  class="w3-padding-small"><span class="w3-green w3-padding-small w3-round-xlarge">B</span> Repair</li>
        <li  class="w3-padding-small"><span class="w3-green w3-padding-small w3-round-xlarge">B</span> Transfer SW/Prisoners</li>
        <li  class="w3-padding-small"><span class="w3-green w3-padding-small w3-round-xlarge">B</span> Transfer SW/Prisoners</li>
      </ul>
    </div>

    <div class="w3-half">
      <ul class="w3-ul w3-light-grey">
        <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Floorplanning</li>
        <li class="w3-padding-16">50 hours support</li>
        <li class="w3-padding-16">Photography</li>
        <li class="w3-padding-16">50% furniture discount</li>
        <li class="w3-padding-16">GREAT deals</li>
        <li class="w3-padding-16">
          <h2>$ 249</h2>
          <span class="w3-opacity">per room</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>




<!-- End page content -->
</div>




<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
