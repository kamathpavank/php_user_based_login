
<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login.php');
}

$av = $_SESSION["access"];

//Check user authorization for codestrike
if($av != 2 && $av != 12){
  header('Location:overview.php');
  $_SESSION['unauthorized'] = "Not Authorized for Codestrike";
}

?>

<?php
  require 'menu.php';
?>

<br>
<div class="jumbotron">
   <?php 
   if(isset($_SESSION['unauthorized'])){
    echo $_SESSION['unauthorized'];
  }
  ?>

  <h1 class="display-4">Welcome to Codestrike</h1>
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

  function restrict_imac(){
    $("#imac").click(function () {
    alert("Not authorised");
  });
  }

  $("#access_number").hide()
</script>
