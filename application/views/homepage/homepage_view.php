<!-- Sample data kunwari muna data -->
<?php $token = 'Bitcoin'; ?>
<div class="container">
    <!-- Begin Jumbotron -->
    <div class="mt-3 p-3 text-center">
        <div class="d-flex align-items-center justify-content-start">       
    </div>
        <?php if($this->session->has_userdata('login_status')): ?>
            <div class="d-flex align-items-center justify-content-start">
            <i class="fa-solid fa-star fa-2x text-warning mb-3"></i>
            <div class="ms-3 mb-3">
                <h1 class="h3 fw-bold mb-1">My Favorites</h1>
            </div>   
           </div>
        <!-- Card Start-->
        <div class="row">
            <!-- Card Template Start -->
            <div class="col-sm-4 zoom">
            <div class="card bg-white rounded">
            <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <img
                            src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                            />
              </div>
              <div class="text-end">
              <p class="h4 fw-bold mb-1">Bitcoin <span class="text-secondary h5">(BNB)</span></p>
                <p class="mb-0">View Details</p>
              </div>
            </div>
          </div>
        </div>
         </div> <!-- div !-->

            <div class="col-sm-4 zoom">
            <div class="card bg-white rounded">
            <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <img
                            src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                            />
              </div>
              <div class="text-end">
              <p class="h4 fw-bold mb-1">Bitcoin <span class="text-secondary h5">(BNB)</span></p>
                <p class="mb-0">View Details</p>
              </div>
            </div>
          </div>
        </div>
        </div>

            <div class="col-sm-4 zoom mb-4">
            <div class="card bg-white rounded">
            <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <img
                            src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                            />
              </div>
              <div class="text-end">
              <p class="h4 fw-bold mb-1">Bitcoin <span class="text-secondary h5">(BNB)</span></p>
                <p class="mb-0">View Details</p>
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="col-sm-4 zoom">
            <div class="card bg-white rounded">
            <div class="card-body">
            <div class="d-flex justify-content-between px-md-1">
              <div class="align-self-center">
              <img
                            src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                            />
              </div>
              <div class="text-end">
              <p class="h4 fw-bold mb-1">Bitcoin <span class="text-secondary h5">(BNB)</span></p>
                <p class="mb-0">View Details</p>
              </div>
            </div>
          </div>
        </div>
        </div>
       
        <!-- Card End-->
        <?php else: ?>
       
        <?php endif; ?>
    </div>
    <!-- End Jumbotron-->
    
 
    <!-- Table Start -->
    <div class="table-responsive mb-5 mt-4">
        <table class="table align-middle mb-0 bg-white text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Market Cap</th>
                    <th>Statistics</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <i class="fa-solid fa-star text-warning">&nbsp;1</i>
                    </td>
                    <td>
                        <a href="<?= site_url('Home/whitepaper/'.$token);?>" class="d-flex align-items-center justify-content-center nav-link">
                            <img
                                src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                                alt=""
                                style="width: 35px; height: 35px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Bitcoin <span class="text-secondary">(BNB)</span></p>
                                
                            </div>
                        </a>
                    </td>
                    <td>₱2,079,705</td>
                    <td>₱39,593,977,399,025</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                        
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Positive <i class="fas fa-smile text-warning fa-lg ms-2"></i></p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <i class="fa-solid fa-star text-warning">&nbsp;1</i>
                    </td>
                    <td>
                        <a href="<?= site_url('Home/whitepaper/'.$token);?>" class="d-flex align-items-center justify-content-center nav-link">
                            <img
                                src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                                alt=""
                                style="width: 35px; height: 35px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Bitcoin <span class="text-secondary">(BNB)</span></p>
                                
                            </div>
                        </a>
                    </td>
                    <td>₱2,079,705</td>
                    <td>₱39,593,977,399,025</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                        
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Positive <i class="fas fa-smile text-warning fa-lg ms-2"></i></p>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <i class="fa-solid fa-star text-warning">&nbsp;1</i>
                    </td>
                    <td>
                        <a href="<?= site_url('Home/whitepaper/'.$token);?>" class="d-flex align-items-center justify-content-center nav-link">
                            <img
                                src="https://bitcoin.org/img/icons/opengraph.png?1657703267"
                                alt=""
                                style="width: 35px; height: 35px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Bitcoin <span class="text-secondary">(BNB)</span></p>
                                
                            </div>
                        </a>
                    </td>
                    <td>₱2,079,705</td>
                    <td>₱39,593,977,399,025</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                        
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Positive <i class="fas fa-smile text-warning fa-lg ms-2"></i></p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!-- Table End -->
</div>