	<?php require 'header.php';
?>
<body>
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.php">
            <img src="images/logo.png" alt="">
          </a>
          <h2 class="text-center">Welcome Back</h2>
          <form class="text-left clearfix"  method="POST" action="connexion.php" >
            <div class="form-group">
              <input type="text" class="form-control" name="nom" placeholder="name">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="mdp" placeholder="Password">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" >Login</button>
            </div>
          </form>
          <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
	<?php require 'footer.php';
?>