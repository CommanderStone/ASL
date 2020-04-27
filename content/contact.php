<?php
$secure = false;
$form = false;
if(!empty($_GET["submit"])) {
  //sleep(10);
  $firstname = trim(htmlspecialchars($_GET["first"]));
  $lastname = trim(htmlspecialchars($_GET["last"]));
  $email = trim(htmlspecialchars($_GET["mail"]));
  $message = htmlspecialchars($_GET["message"]);
  $secure = trim(strtoupper(htmlspecialchars($_GET["secure"])));
  if($secure === "ASL"){
    //echo"its asl";
    $secure = false;
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($firstname) || empty($lastname) || empty($message)) {
      $form = true;
    }
  }
  else {
    sleep(2);
    $secure = true;
    }
  }

  if (!$secure AND !$form AND !empty($_GET["submit"])) {
    echo "Alles ausgefüllt";
    $mymail = "kai.glanz@gmx.de";
    mail($mymail,"ASL Assist Page",$message."email sent from: ".$firstname);
}

?>




<br>
<center>
  <h1>Contact form is not working at the moment!!!</h1>
<form action="?content=contact" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" style="max-width:28cm;" method="get">
<h2 class="w3-center">Send a message</h2>
<?php if($form) {
    echo"<h2 class='w3-center w3-red'>You did something wrong. Please go back and make sure that the complete form is filled out and that your E-Mail is correct. </h2>";}?>
<?php if($secure) {
    echo"<h2 class='w3-center w3-red'>You answered the security question wrong. Again the hint that it is related to a well known game with 3 letters! :-)</h2>";}?>

<div class="w3-container" style="margin-bottom:16px;">
      <label class="w3-text-black w3-left"><b>First Name</b></label>
      <input class="w3-input w3-border" name="first" type="text" placeholder="First Name"
      <?php if($form || $secure){ echo "value='". $firstname ."'";} ?> >
</div>

<div class="w3-container" style="margin-bottom:16px;">
      <label class="w3-text-black w3-left"><b>Last name</b></label>
      <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name"
      <?php if($form || $secure){ echo "value='". $lastname ."'";} ?>>
</div>

<div class="w3-container" style="margin-bottom:16px;">
      <label class="w3-text-black w3-left"><b>E-Mail</b></label>
      <input class="w3-input w3-border" name="mail" type="text" placeholder="E-Mail"
      <?php if($form || $secure){ echo "value='". $email ."'";} ?>>
</div>

<div class="w3-container" style="margin-bottom:16px;">
      <label class="w3-text-black w3-left"><b>Message</b></label>
      <textarea class="w3-input w3-border" name="message" type="text" placeholder="Your Message" rows="4" cols="200"><?php if($form || $secure){ echo $message;} ?></textarea>
</div>

<div class="w3-container" style="margin-bottom:16px;">
      <label class="w3-text-black w3-left"><b>Security question - What game do you play? Hint -> 3 letters</b></label>
      <input class="w3-input w3-border" name="secure" type="text" >
</div>
 <input type="hidden" id="content" name="content" value="contact">


<button name="submit" value="yes" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>

</form>
</center>
