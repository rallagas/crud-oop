<?php require_once 'core/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
   <?php require_once "core/css.php"; ?>
</head>
<body>
   <div class="container">
       <div class="row pt-3">
           <div class="col-lg-4 col-md-12 col-sm-12">
               <div class="card border-success">
                  <div class="card-header bg-success">
                      <h3 class="display-6 text-light">Login</h3>
                  </div>
                  <div class="card-body">
                    <form action="">
                      <div class="mb-3">
                          <input type="text" name="p_username" placeholder="Username" class="form-control">
                      </div>
                       <div class="mb-3">
                           <input type="password" name="p_password" placeholder="Password" class="form-control">
                       </div>
                       <button class="btn btn-success form-btn"> <i class="bi bi-key"></i> Login </button>
                   </form>
                  </div>
                  <div class="card-footer border-success bg-white">
                      <a href="register.php" class="btn btn-outline-success"> <i class="bi bi-person-plus"></i> Create an Account</a>
                      <a href="forgotpassword.php" class="btn btn-outline-success"> <i class="bi bi-question-circle"></i> Forgot Password</a>
                  </div>
               </div>
           </div>
           
       </div>
   </div>
</body>
<footer>
    <?php require_once "core/js.php"; ?>
</footer>
</html>