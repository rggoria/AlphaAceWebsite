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
                <?= form_open('Signup/signup_register'); ?>
                <b><p>STEP 1 OF 3</p></b>
                <div class="h3"><b>Enter your email</b></div>
                    <div class="mb-3">
                        <div class="input-group mt-3">
                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                            <input
                                type="email"
                                name="email"                             
                                class="form-control"
                                placeholder="Email address"
                                title="Please fill out this field"
                                value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>"
                            >
                        </div>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('email'); ?> </small>
                    </div>
                    <center>
                    <button type="submit" class="btn btn-primary w-50 logBtn"><b>Verify email</b></button>
                    </center><br>
                <?= form_close(); ?>
                    
                <div class="text-center mb-5">
                    Already have an account? <span><a href="<?= site_url('Login') ?>">Log in</a></span>
                </div>
                    </div>
                </div>
            </div>
         
        <!-- End Right Content -->     
    
</div>