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
                <?= form_open('Signup/verify_code'); ?>
                <b><p>STEP 2 OF 3</p></b>
                <div class="h3"><b>Verify your email address</b></div>
                <p style="margin-bottom:5px;"><b>Code will be sent to your email:</b></p>
                <span class="text-primary h3"><?php echo $this->session->userdata('email') ?></span>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Enter your 4-digit code</label>
                        <div class="input-group">
                            <input
                                type="number"
                                name="code"
                                id="verify-code"
                                class="form-control"
                                placeholder="Enter the code"
                                maxlength="4"
                                autocomplete="off"
                                onkeyup="verify()"
                            >
                        </div>
                        <p class="mt-3">Did not receive?
                        <?php echo anchor('Signup/resend', 'Resend Code'); ?>
                        </p>
                        <small class="text-danger fw-bold fst-italic"> <?= form_error('code'); ?> </small>
                    </div>
                    <center>
                    <button
                        type="submit"
                        id="verify-submit"
                        class="btn btn-primary w-50 logBtn"
                        disabled>Verify email</button>
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