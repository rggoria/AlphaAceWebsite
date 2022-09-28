<div class="container mt-1 mb-3">
<nav class="nav nav-pills nav-justified bg-light">
        <a class="nav-item nav-link zoom"  href="<?= site_url('Home/whitepaper/'.$token);?>">WHITEPAPER</a>
        <a class="nav-item nav-link zoom"href="<?= site_url('Home/social_tab/'.$token);?>">SOCIAL TAB</a>
        <a class="nav-item nav-link active zoom" style="background-color:#FFA500; color:black;" href="<?= site_url('Home/social_analysis/'.$token);?>">SOCIAL ANALYSIS</a>
        <a class="nav-item nav-link zoom" href="<?= site_url('Home/redflag/'.$token);?>">REDFLAGS</a>
        <a class="nav-item nav-link zoom" href="<?= site_url('Home/analysis/'.$token);?>">ANALYSIS REPORT</a>
    </nav>
    <div class="bg-light">
        <div class="container">
            <div class="h2 text-center"><?= $token; ?> Sentiment Analysis Result</div>
            <div class="row">
                <!-- Begin Left Content -->
                <div class="col-md-6 d-flex justify-content-center align-items-center align-middle">
                    <div class="border border-dark p-5 rounded">
                        <div class="h2 text-center">Today's Report</div>
                        <div class="d-flex justify-content-between">
                            <div class="w-50 border border-dark d-flex justify-content-center align-items-center align-middle">
                                <img
                                    src="https://i.pinimg.com/originals/d5/9c/90/d59c9002030448f1193adf7d7600a52a.png"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                />
                            </div>
                            &nbsp;
                            <div class="w-50 border border-dark d-flex justify-content-center align-items-center align-middle">
                                <p class="text-success h1">1.9</p>
                            </div>
                        </div>                        
                    </div>                    
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-md-6">
                    <div class="border border-dark rounded">
                        <div class="h2 text-center">Sentiment Score</div>
                        <!-- Begin Nav tabs -->
                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#daily">Daily</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#weekly">Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#monthly">Monthly</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="daily" class="container tab-pane active"><br>
                                <!-- Yung chart nasa footer -->
                                <div id="myChart" style="width:100%; max-width:600px; height:250px;" class="mb-3"></div>
                            </div>
                            <div id="weekly" class="container tab-pane fade"><br>
                                Di ko alam to
                            </div>
                            <div id="monthly" class="container tab-pane fade"><br>
                                Tulong
                            </div>
                        </div>
                        <!-- End Nav tabs -->
                    </div>
                </div>
                <!-- End Right Content -->
            </div>
            <br>            
        </div>
        <div class="container">
            <div class="h2 text-center">Simulation</div>
            <div class="row">
                <!-- Begin Left Content -->
                <div class="col-md-6 mb-3">
                    <div class="border border-dark rounded">
                        <div class="h2 text-center">ATR</div>
                        <div class="container">
                            <div
                                id="pieChart" style="width:100%; max-width:600px; height:250;" class="mb-3">
                            </div>
                        </div>                        
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-md-6 d-flex justify-content-center align-items-center align-middle">
                    <div class="border border-dark p-3 rounded">
                        <div class="row">
                            <div class="col-md-6 text-center mb-3">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" id="stop_loss" disabled>
                                    <label for="stop_loss">Stop Loss</label>
                                </div>                              
                            </div>
                            <div class="col-md-6 text-center mb-3">
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" id="take_profit" disabled>
                                    <label for="take_profit">Take Profit</label>
                                </div> 
                            </div>
                            <div class="input-group d-flex justify-content-center">
                                <span class="input-group-text"><i class="fa-solid fa-money-bill-wave"></i></span>
                                <input type="number" placeholder="Check Profit" min="0">
                            </div>
                            <div class="p-3 text-center">
                                <a href="#" type="button" class="nav-link w-100 bg-success text-dark">
                                    <span class="text-light">Check Result</span>
                                </a> 
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- End Right Content -->                
            </div>            
        </div> 
    </div>
</div>