<?php
// Start the session
session_start();
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

  $("#logout").show();
  var access_value = $("#access_number").val();

  //access imac lab
  $("#imac").click(function(){
    $("#imac").attr("href","imac.php");
  });

  //access ilab
  $("#ilab").click(function () {
      $("#ilab").attr("href","ilab.php");
  });

  //access robotics
  $("#robo").click(function () {
    $("#robo").attr("href","robotics.php");
  });

  $("#access_number").hide()
</script>
