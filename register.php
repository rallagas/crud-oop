<?php require_once 'core/init_head.php';

?>
<body>
   
   <div class="container">
       <div class="row pt-5">
           <div class="col-lg-3"></div>
           <div class="col-lg-6 col-md-12 col-sm-12">
               <div class="card shadow border-success">
                  <div class="card-header bg-success">
                      <h3 class="display-6 text-light">Register</h3>
                  </div>
                  <div class="card-body">
                      <div class="mb-3">
                          <?php                          
                            

                            if(Input::exists()){
                                   if(Token::check(Input::get('token'))) {
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
                                        
                                        //header("location: index.php");
                                        $user = new User();
                                        $salt = Hash::salt(32);

                                        try{
                                            $user->create(array(
                                                'username' => Input::get('username'),
                                                'password' => Hash::make(Input::get('password'), $salt),
                                                'salt' => $salt,
                                                'name' => Input::get('name'),
                                                'joined' => date('Y-m-d H:i:s'),
                                                'grp' => 1
                                            ));

                                            Session::flash('home','You Registered Successfully and can now login.');
                                            Redirect::to('index.php');
                                        }catch(Exception $e){
                                            die($e->getMessage());
                                        }

                                    }else{
                                        foreach($validation->errors() as $error){
                                            echo "<div class='alert alert-danger'> <i class='bi bi-exclamation-triangle'></i> ".$error."</div>";
                                        }
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
                       <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
                       <button type="submit" class="btn btn-success form-btn"> Create <i class="bi bi-person-plus"></i> </button>
                   </form>
                  </div>
                  <div class="card-footer border-success bg-white">
                        <div class="float-end">
                      Already have an account? <a href="index.php" class="btn btn-outline-success"> <i class="bi bi-person-circle"></i> Sign in Instead</a>
                      </div>
                  </div>
               </div>
           </div>
           <div class="col-lg-3"></div>
       </div>
   </div>
    
</body>
<?php require_once 'core/init_foot.php'; ?>