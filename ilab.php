<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login.php');
}

$av = $_SESSION["access"];

//if user is not authorized to access to ilab
if($av!=2 || $av!=12 || $av!=23 || $av=!123){



  //if user is not authorized to access ilab but has access to imac then direct to imac page
  if($av == 1 || $av == 13){
    header('Location: imac.php');
  }
  //if user is not authorized to access ilab but has access to robotics then direct to robotics page
  else if($av == 3){
    header('Location: robotics.php');
  }
}
?>

<?php
  require 'menu.php';
?>

<br>
<div class="jumbotron">
  
  <h1 class="display-4">Welcome to ILAB</h1>
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

  $("#ilab").click(function(){
    $("#ilab").attr("href","ilab.php");
  })

  // //Admin can access all pages
  // if(access_value == 123){
  //   access_robotics();
  //   access_imac();
  //   access_ilab();
  // }

  // //only ilab
  // if(access_value == 2){
  //   restrict_imac();
  //   restrict_robotics();
  // }

  // //imac and robotics
  // if(access_value == 23){
  //   access_robotics();
  //   restrict_imac();
  // }

  // //imac and ilab
  // if(access_value == 12){
  //   access_imac();
  //   restrict_robotics();
  // }

  // function access_ilab(){
  //    $("#ilab").click(function () {
  //     $("#ilab").attr("href","ilab.php");
  // });
  // }

  // function access_imac(){
  //   $("#imac").click(function () {
  //     $("#imac").attr("href","imac.php");
  // });
  // }

  // function access_robotics(){
  //   $("#robo").click(function () {
  //   $("#robo").attr("href","robotics.php");

  // });
  // }

  function restrict_imac(){
    $("#imac").click(function () {
    alert("Not authorised");
  });
  }

  // function restrict_robotics(){
  //   $("#robo").click(function () {
  //   alert("Not authorised");
  // });
  // }

  $("#access_number").hide()
</script>
