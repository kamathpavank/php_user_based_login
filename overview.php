

<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login.php');
}

$av = $_SESSION["access"];

if($av != 1 && $av != 12){
  header('Location:codestrike.php');
  $_SESSION['unauthorized'] = "Not Authorized for Imac";
}
?>

<?php
  require 'menu.php'
?>

<br>
<div class="jumbotron">
   <?php 
   if(isset($_SESSION['unauthorized'])){
    echo $_SESSION['unauthorized'];
  }
  ?>
  <h1 class="display-4">Overview</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
<input type="number" value = "<?php echo $_SESSION["access"]; ?>" id="access_number">

<script type="text/javascript">

  $("#logout").show();
  var access_value = $("#access_number").val();

  $("#robotics").click(function(){
    $("#robotics").attr("href","robotics.php");
  })

  // //Admin can access all pages
  // if(access_value == 123){
  //   access_robotics();
  //   access_imac();
  //   access_ilab();
  // }

  // //only robotics lab
  // if(access_value == 3){
  //   restrict_ilab();
  //   restrict_imac();
  // }

  // //imac and robotics
  // if(access_value == 13){
  //   access_imac();
  //   restrict_ilab();
  // }

  // //ilab and robotics
  // if(access_value == 23){
  //   access_ilab();
  //   restrict_imac();
  // }

  // function access_ilab(){
  //   $("#ilab").click(function () {
  //     $("#ilab").attr("href","ilab.php");
  // });
  // }

  // function access_imac(){
  //   $("#imac").click(function () {
  //   $("#imac").attr("href","imac.php");
  // });
  // }

  // function access_robotics(){
  //   $("#robo").click(function () {
  //   $("#robo").attr("href","robotics.php");
  // });
  // }

  // function restrict_ilab(){
  //   $("#ilab").click(function () {
  //   alert("Not authorised");
  // });
  // }

  // function restrict_imac(){
  //   $("#imac").click(function () {
  //   alert("Not authorised");
  // });
  // }

  $("#access_number").hide()
</script>
