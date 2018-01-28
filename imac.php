<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login.php');
}


//If user tries to acces unauthorized page ilab through url
if($_SESSION["access"] !=12 || $_SESSION["access"] !=23 || $_SESSION["access"] !=2){
  $path = $_SERVER["PHP_SELF"];
  header('Locatio: $path');
}


//If user tries to acces unauthorized page through url
if($_SESSION["access"] !=12 || $_SESSION["access"] !=23 || $_SESSION["access"] !=2){
  $path = $_SERVER["PHP_SELF"];
  header('Locatio: $path');
}
?>

<?php
  require 'menu.php'
?>

<br>
<div class="jumbotron">
  <h1 class="display-4">Welcome to iMAC Lab</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<input type="number" value = "<?php echo $_SESSION["access"]; ?>" id="access_number">

<script type="text/javascript">
  //show logout button
  $("#logout").show();

  var access_value = $("#access_number").val();


  $("#imac").click(function(){
    $("#imac").attr("href","imac.php");
  })

  //Admin can access all pages
  if(access_value == 123){
    access_robotics();
    access_imac();
    access_ilab();
  }

  //Only imac lab
  if(access_value == 1){
    restrict_ilab();
     restrict_robotics();
  }

  //imac and robotics
  if(access_value == 13){
    access_robotics();
    restrict_ilab();
  }

  //imac and ilab
  if(access_value == 12){
    access_ilab();
    restrict_robotics();
  }

  function access_ilab(){
    $("#ilab").click(function () {
      $("#ilab").attr("href","ilab.php");
  });
  }

  function access_robotics(){
    $("#robo").click(function () {
    $("#robo").attr("href","robotics.php");
  });
  }

  function access_imac(){
     $("#imac").click(function () {
      $("#imac").attr("href","imac.php");
  });
  }

  function restrict_ilab(){
    $("#ilab").click(function () {
    alert("Not authorised");
  });
  }

  function restrict_robotics(){
    $("#robo").click(function () {
    alert("Not authorised");
  });
  }

  $("#access_number").hide()
</script>
