<?php
  require 'menu.php';
  require 'connection.php';
?>

     <div class="jumbotron" style="background-color: white">
        
        <center>
          <div class="container">
          <form class="form-signin" method="post" action="validate.php">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="Username" id="inputUserName" class="form-control" placeholder="Username" name="username" style="width: 200px" required autofocus>
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" style="width: 200px" required>
            <br>
           
            <br>
            <button class="btn btn-lg btn-primary btn-block" style="width: 200px" type="submit">Sign in</button>
          </form>
        </div>
        </center>
        
      </div>