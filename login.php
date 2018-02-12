<?php
// Start the session
session_start();
?>

<?php
  require 'menu.php';
  require 'connection.php';
?>

    <div class="jumbotron" style="background-color: white">

        <center>

          <!-- if inavalid username and password -->
          <?php
          //To display invalid username and password message
          if(isset($_SESSION["credentials"]))
            echo $_SESSION["credentials"];
            ?>

          <div class="container">
          <form class="form-signin" method="post" action="validate.php">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only" >Username</label>
            <input type="Username" id="inputUserName" class="form-control user" placeholder="Username" name="username" style="width: 200px" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only" >Password</label>
            <input type="password" id="inputPassword" class="form-control user" placeholder="Password" name="password" style="width: 200px" required>
            <br>

            <br>
            <button class="btn btn-lg btn-primary btn-block" style="width: 200px" type="submit">Sign in</button>
          </form>
        </div>
        </center>

    </div>
<script type="text/javascript">
  $("user").click(function () {
    $("#credentials").hide();
  })
</script>
