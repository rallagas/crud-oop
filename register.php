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
                                $validate = new Validate();
                                $validation = $validate->check($_POST,array(
                                    'username' => array(
                                         'required' => true,
                                         'min' => 2,
                                         'max' => 20,
                                         'unique' => 'users'
                                    ),
                                    'password' => array(
                                        'required' => true,
                                        'min' => 6
                                    ),
                                    'password_again' => array(
                                        'required' => true,
                                        'matches' => 'password'
                                    ),
                                    'name' => array(
                                        'required' => true,
                                        'min' => 2,
                                        'max' => 50
                                    )
                                ));

                                if($validation->passed()){
                                    echo 'Passed'; //do something if everything is ok
                                }else{
                                    foreach($validation->errors() as $error){
                                        echo "<div class='alert alert-danger'> <i class='bi bi-exclamation-triangle'></i> ".$error."</div>";
                                    }
                                }
                            }
                          ?>
                      </div>
                    <form action="" method="post">
                      <div class="mb-3">
                          <input type="text" name="username" value="<?php echo Input::get('username'); ?>" autocomplete="off" placeholder="Username" class="form-control">
                      </div>
                       <div class="mb-3">
                           <input type="password" name="password" placeholder="Choose a Password" class="form-control">
                       </div>
                       <div class="mb-3">
                           <input type="password" name="password_again" placeholder="Password Again" class="form-control">
                       </div>
                       <div class="mb-3">
                           <input type="text" name="name" value="<?php echo escape(Input::get('name')); ?>" placeholder="Full Name Again" class="form-control">
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