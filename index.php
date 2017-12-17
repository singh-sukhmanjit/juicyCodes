<!DOCTYPE html>
<html>
  <head>
    <title>JuicyCodes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  </head>

  <body>

    <div class="container-fluid">
        <div class="row">

<!-- Left Navigation -->
            <?php include 'pages/leftNav.php'; ?>
<!-- ************ -->

            <div class="col-sm-10 main mainArea">

<!-- Header -->
                <?php include 'pages/header.php'; ?>
<!-- ************ -->

            <div class="row changeContent">
                <div class="col-sm-12 chart">
                    <canvas id="myChart"></canvas>
                </div>

                <div class="stats">

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                <div class="big-number">10,976</div>
                                <div class="number-header">Total Video Uploaded</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                <div class="big-number">10,976</div>
                                <div class="number-header">Total Video Uploaded</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel">
                            <div class="panel-body text-center">
                                <div class="big-number">10,976</div>
                                <div class="number-header">Total Video Uploaded</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <footer>
                <div class="container-fluid">
                    <p>
                        Designed &amp; Crafted With <i class="fa fa-heart heart"></i> by XYZ</a>.
                    </p>
                </div>
            </footer>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
