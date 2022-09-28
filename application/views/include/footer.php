</div>
<footer class="mt-auto text-center text-white">
    <!-- Grid container -->
    
    <div class="container p-4">
        <!-- Section: Social media -->
        <div class="row">
        <div class="col-6 col-md-4 mt-3 text-start">
        <img class = "brandImg" src="<?= base_url('uploads/private/logo.png'); ?>" alt="" width="50%">
        <p class="mt-2">Alpha Ace lorem ipsum neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
        </div>

        <div class="col-6 col-md-4 mt-3 text-start">
        <h4 class="mt-4"><b>Contact us</b></h4>
        <p class="mt-4">Alpha Ace lorem ipsum neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
        </div>

        <div class="col-6 col-md-4 mt-2 text-start">
        <form class="form-inline">
        <p class="mt-5">Subscribe for more news and updates</p>
        <input class="form-control form-control-sm mr-3" type="text" placeholder="Search"
            aria-label="Search">
            <button class="btn btn-success mt-2">Subscribe</button>
        </form>
        </div>

</div>
        <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-facebook-f fa-sm"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-twitter fa-sm"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-google fa-sm"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-instagram fa-sm"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-linkedin-in fa-sm"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
            ><i class="fab fa-github fa-sm"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2022 Copyright:
        <span class="text-white">Alpha Ace</span>
    </div>
    <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/signup.js"></script>
    <!-- Google Line Bar -->
    <script>
        google.charts.load('current',{packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            // Set Data
            var data = google.visualization.arrayToDataTable([
                ['Price', 'Size'],
                [50,7],[60,8],[70,8],[80,9],[90,9],
                [100,9],[110,10],[120,11],
                [130,14],[140,14],[150,15]
            ]);
            // Set Options
            var options = {
                title: 'House Prices vs. Size',
                hAxis: {title: 'Square Meters'},
                vAxis: {title: 'Price in Millions'},
                legend: 'none'
            };
            // Draw
            var chart = new google.visualization.LineChart(document.getElementById('myChart'));
                chart.draw(data, options);
        }

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
        var data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],
            ['Italy',54.8],
            ['France',48.6],
            ['Spain',44.4],
            ['USA',23.9],
            ['Argentina',14.5]
        ]);

        var options = {
        title:'World Wide Wine Production',
        is3D:true
        };

        var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
        chart.draw(data, options);
        }
    </script>
</body>
</html>