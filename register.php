<?php require_once 'core/init_head.php'; ?>
<body>
   
   <div class="container">
       <div class="row pt-5">
           <div class="col-lg-3"></div>
           <div class="col-lg-6 col-md-12 col-sm-12">
               <div class="card border-success">
                  <div class="card-header bg-success">
                      <h3 class="display-6 text-light">Register</h3>
                  </div>
                  <div class="card-body">
                      <div class="mb-3">
                          <?php                          
                            if(Input::exists()){
                                
                            }
                          ?>
                      </div>
                    <form action="" method="post">
                      <div class="mb-3">
                          <input type="text" name="p_username" value="" autocomplete="off" placeholder="Username" class="form-control">
                      </div>
                       <div class="mb-3">
                           <input type="password" name="p_password" placeholder="Choose a Password" class="form-control">
                       </div>
                       <div class="mb-3">
                           <input type="password" name="p_password_again" placeholder="Password Again" class="form-control">
                       </div>
                       <div class="mb-3">
                           <input type="text" name="p_name" placeholder="Full Name Again" class="form-control">
                       </div>
                       <button type="submit" class="btn btn-success form-btn"> <i class="bi bi-check"></i> Done </button>
                   </form>
                  </div>
                  <div class="card-footer border-success bg-white">
                      <a href="index.php" class="btn btn-outline-success"> <i class="bi bi-person-circle"></i> Sign in</a>
                      
                  </div>
               </div>
           </div>
           <div class="col-lg-3"></div>
       </div>
   </div>
    
</body>
<?php require_once 'core/init_foot.php'; ?>