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
                <?= form_open('Auth/auth_validation'); ?>
                <b><p>STEP 3 OF 3</p></b>
                <div class="h3 mb-3"><b>Create Account</b></div>
                    <div class="mb-3">
                        
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input
                                type="text"
                                name="username"
                                class="form-control" 
                                placeholder="Enter Username"
                                maxlength="20"
                                title="Please fill out this field"
                                value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>"
                            >
                        </div>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('username'); ?> </small>
                    </div>

                    <div class="mb-4">
                        
                        <div class="input-group">
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
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('password'); ?> </small>
                    </div>
                    <center>
                    <button type="submit" class="btn btn-primary w-50 logBtn">Register</button></center><br>
                <?= form_close(); ?>
                    
                <div class="text-center mb-5">
                    Already have an account? <span><a href="<?= site_url('Login') ?>">Log in</a></span>
                </div>
                    </div>
                </div>
            </div>
         
        <!-- End Right Content -->     
    
</div>