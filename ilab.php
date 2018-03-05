
<?php
// Start the session
session_start();
if(!isset($_SESSION['username'])){
  header('Location:index.php');
}

//Check user authorization for ilab
if(in_array(2,$_SESSION["access_levels"])== 0){
  $_SESSION["credentials"] = "Not autharized for ilab";
    header('Location:index.php');
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

  function restrict_imac(){
    $("#imac").click(function () {
    alert("Not authorised");
  });
  }

  $("#access_number").hide()
</script>
