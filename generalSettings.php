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
                <div class="col-sm-12 uploadVideo">
                    <div class="panelHead">
                        <span>GENERAL SETTINGS</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-5">
                            <form>
                                <div class="form-group col-sm-6">
                                    <label>Website URL: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Admin Panel URL: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Embed Slug: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Website Logo: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Syncronized Job: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Website Title:: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>

                                <div class="form-group col-sm-6">
                                    <input type="submit" value="SAVE SETTINGS" class="btn btnUpload">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

<!-- Footer  -->
            <footer>
                <div class="container-fluid">
                    <p>
                        Designed &amp; Crafted With <i class="fa fa-heart heart"></i> by XYZ</a>.
                    </p>
                </div>
            </footer>
<!-- *********** -->

            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
