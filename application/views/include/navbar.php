<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Begin Left Content -->
        <a class="navbar-brand" href="<?= site_url('Home'); ?>"><img class = "brandImg" src="<?= base_url('uploads/private/logo.png'); ?>" alt="" width="130" height="50"></a>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <!-- Begin Toggle Button -->
        <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- End Toggle Button -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if($this->session->has_userdata('login_status')): ?>
                <li class="nav-item">
                    <a class="nav-link link-style" href="#"><i class="fa-solid fa-coins fa-lg"></i><b>&nbsp;Coins</b></a> 
                </li>
                <li class="nav-item dropdown profileNav">
                    <div class="nav-link d-flex align-items-center link-style dropdown-toggle " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img
                            src="https://stickershop.line-scdn.net/stickershop/v1/product/14599457/LINEStorePC/main.png;compress=true"
                            alt=""
                            style="width: 30px; height: 30px"
                            class="rounded-circle"
                            />
                        <div class="ms-3 me-2">
                            <p class="fw-bold mb-1"><?php echo $this->session->userdata('login_username'); ?></p>
                            
                        </div>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?= site_url('Login/logout_user'); ?>"><i class="fa-solid fa-sign-out">&nbsp;Log out</i></a></li>
                    </ul>
                </li>
            <?php else: ?>


                <li class="nav-item">
                    <a class="nav-link link-style" href="#"><i class="fa-solid fa-coins fa-lg"></i><b>&nbsp;Coins</b></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link-style" href="<?= site_url('Login'); ?>"><i class="fa-solid fa-sign-in-alt fa-lg"></i><b>&nbsp;Log in</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-style" href="<?= site_url('Signup'); ?>"><i class="fa-solid fa-user-plus fa-lg"></i><b>&nbsp;Register</b></a>
                </li>
            <?php endif; ?>   
                       
            </ul>
        </div>
        <!-- End Right Content -->
    </div>
</nav>
