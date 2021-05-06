<?php require_once 'core/init_head.php'; ?>

<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <?php 
                      
                if(Input::exists()){
                    if(Token::check(Input::get('token'))){
                        $validate = new Validate();
                        $validation = $validate->check(array( $_POST,
                            'username' => array('required' => true),
                            'password' => array('required' => true)
                        ));
                    if($validation->passed()){
                        $user = new User();
                        
                        $remember = (Input::get('remember') === 'on') ? true : false;
                        
                        $login = $user->login(Input::get('username'), Input::get('password'), $remember);
                        if($login){
                            Redirect::to('index.php?good');
                            echo "<div class='alert alert-success'>Logged In</div>";
                        }
                        else{
                            echo "<div class='alert alert-danger'>Login Failed.</div>";
                        }

                    }
                    else{
                        foreach($validation->errors() as $error){
                            echo "<div class='alert alert-danger'>.$error.</div>";
                        }
                    }
                    }
                }

                  if(Session::exists('home')){
                    echo "<div class='alert alert-success'>" . Session::flash('home') . "</div>"; 
                  }
                      
                      
                  $user = new User();
                      
                  if($user->isLoggedIn()){ ?>
                        <p class="lead">Hello, <?php echo escape($user->data()->username);?></p>
                        <ul class="inline">
                            <li class="inline"><a href="logout.php">Logout</a></li>
                        </ul>
                        <?php }
                      else{ ?>

                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="remember">Remember Me</label>
                                <input type="checkbox" id="remember" name="remember" class="form-check">
                            </div>

                            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
                            <button class="btn btn-success form-btn"> <i class="bi bi-key"></i> Login </button>


                        </form>

                    </div>
                    <div class="card-footer border-success bg-white">
                        <a href="register.php" class="btn btn-outline-success"> <i class="bi bi-person-plus"></i> Create an Account</a>
                        <a href="forgotpassword.php" class="btn btn-outline-success"> <i class="bi bi-question-circle"></i> Forgot Password</a>
                    </div>
                    <?php   }
                  ?>


                </div>
            </div>

        </div>
    </div>
</body>
<?php require_once 'core/init_foot.php'; ?>
