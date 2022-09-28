<div class="container mt-1 mb-3">
    <nav class="nav nav-pills nav-justified bg-light">
        <a class="nav-item nav-link zoom"href="<?= site_url('Home/whitepaper/'.$token);?>">WHITEPAPER</a>
        <a class="nav-item nav-link zoom" href="<?= site_url('Home/social_tab/'.$token);?>">SOCIAL TAB</a>
        <a class="nav-item nav-link zoom" href="<?= site_url('Home/social_analysis/'.$token);?>">SOCIAL ANALYSIS</a>
        <a class="nav-item nav-link active zoom" style="background-color:#FFA500; color:black;" href="<?= site_url('Home/redflag/'.$token);?>">REDFLAGS</a>
        <a class="nav-item nav-link zoom" href="<?= site_url('Home/analysis/'.$token);?>">ANALYSIS REPORT</a>
    </nav>
    <div class="bg-light">
        <div class="container row mt-3">
            <!-- Start Accordion -->
            <div class="accordion">
                <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <b>Whitepaper</b>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                    <div class="h6">
                        <p class="mt-2 mb-2 lead"><?=$token;?>'s whitepaper has the following:</p>
                        <div class="row mt-3">
                            <div class="col-sm-2">
                            <input type="checkbox" checked> Whitepaper <br>
                            </div>
                            <div class="col-sm-2">
                            <input type="checkbox" checked onclick="return false;"> Mission & Vision <br>
                            </div>
                            <div class="col-sm-2">
                            <input type="checkbox" checked onclick="return false;"> Background <br>
                            </div>
                            <div class="col-sm-2">
                            <input type="checkbox" checked onclick="return false;"> Statistics <br>
                            </div>
                            <div class="col-sm-2">
                            <input type="checkbox" checked onclick="return false;"> Conclusion <br>
                            </div>
                            <div class="col-sm-2">
                            <input type="checkbox" onclick="return false;"> Creator <br>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <b>Social feedback</b>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <div class="card bg-light">
                                    <div class="card-body mt-3">
                                        <h4 class="text-center"><b>30%</b></h4>  
                                        <p class="text-center">The token's score is <span class="text-success">positive!</span> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Twemoji_1f600.svg/800px-Twemoji_1f600.svg.png" style="width: 40px; height: 40px"/></p> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card bg-light">
                                    <div class="card-body mt-3">
                                        <h4 class="mb-3 lead text-center"><b><span class="text-danger">Missing</span> social links:</b></h4>  
                                        <p class="text-center"><i class="ms-2 fab fa-discord fa-2xl"></i><i class="ms-2 fab fa-reddit fa-2xl"></i><i class="ms-2 fab fa-twitter fa-2xl"></i></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card bg-light">
                                    <div class="card-body mt-3">
                                        <h4 class="mb-3 lead text-center"><b>Ano pa pwede ilagay help</b></h4>  
                                        <p class="text-center"><i class="ms-2 fab fa-discord fa-2xl"></i><i class="ms-2 fab fa-reddit fa-2xl"></i><i class="ms-2 fab fa-twitter fa-2xl"></i></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <b>Official website</b>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <p class="text-danger"> <i class="fa-solid fa-xmark"></i> - No official website</p>              
                    </div>
                </div>
                </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    <b>Mission</b>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                    Our mission is to be the infrastructure services provider for the blockchain ecosystem.
                    </div>
                </div>
                </div>
                <div class="accordion-item">    
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                    <b>Vision</b>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                    Our vision is to increase the freedom of money globally. We believe that by spreading this freedom, we can significantly improve lives around the world.
                    </div>
                </div>
                </div>
                <br>
            </div>
            <!-- End Accordion -->
        </div>        
    </div>
</div>