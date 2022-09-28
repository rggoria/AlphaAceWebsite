<div class="container-fluid bg-image bg-imageLog bg-transparent vh-100">
  
        <!-- Begin Left Content -->
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col d-flex justify-content-center"> 
            <div class="card bg-light border-light mt-5 ms-3 text-center cardBorder" style="width: 30rem;">
                <div class="card-body ">
                <div class="container text-center mt-3">
                    <!-- <i class="fa-solid fa-user-circle fa-5x"></i> -->
                    <img class = "brandImg" src="<?= base_url('uploads/private/logo.png'); ?>" alt=""  height="110">
                </div>
                <hr>
                    
                <?= form_open('Login/login_validation'); ?>
                <div class="h3 mb-3"><b>Log in to your account</b></div>
                    <?php if(isset($error)):?>
                    <div class="form-group">
                        <div class="alert alert-danger text-dark text-center">
                        <h4><?= $error; ?></h4>
                        </div>
                    </div>
                    <?php endif;?>
                    <div class="mb-3">
                       
                        <div class="input-group w-100">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input
                                type="text"
                                name="login"
                                class="form-control" 
                                placeholder="Username"
                                title="Please fill out this field"
                                value="<?php echo isset($_POST["login"]) ? $_POST["login"] : ''; ?>"
                            >
                        </div>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('login'); ?> </small>
                    </div>

                    <div class="mb-4">
                        
                        <div class="input-group w-100">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input
                                id="psw"
                                type="password"
                                name="password"
                                class="form-control pr-password"
                                placeholder="Password"         
                                maxlength="20"                 
                                title="Please fill out this field"
                            >
                            <span class="input-group-text">
                                <i
                                    id="eye"
                                    class="fa-solid fa-eye-slash"
                                    style="cursor: pointer;"></i>
                            </span>
                        </div>
                        <p class="mt-3">
                        <?php echo anchor('Signup/resend', 'Forgot password?'); ?>
                        </p>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('password'); ?> </small>
                    </div>
                    <center>
                    <button type="submit"  class="btn btn-primary w-25 logBtn"><b>Log in</b></button>
                    </center><br>
                <?= form_close(); ?>
                   
                <div class="text-center mb-3">
                    Need an account? <span><a href="<?= site_url('Signup') ?>">Register here</a></span>
                </div>
                    </div>
                </div>
            </div>
         
        <!-- End Right Content -->     
    
</div>