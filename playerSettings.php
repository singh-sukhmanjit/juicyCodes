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
                        <span>PLAYER SETTINGS</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-10">
                            <form>
                                <div class="form-group col-sm-6">
                                    <label>Video Player: </label>
                                    <select class="form-control">
                                        <option value="1">JW Player</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>JW Player License Key: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>About Text: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>About Link: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Player Width: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Player Height: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Subtitle Font Size:  </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Subtitle Font Color: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Aspect Ratio: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Player Controls: </label>
                                    <select class="form-control">
                                        <option value="1">Visible</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Subtitle Font Family: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Subtitle Background Color: </label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Video Autostart: </label>
                                    <select class="form-control">
                                        <option value="1">Enable</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Player Rendering Mode: </label>
                                    <select class="form-control">
                                        <option value="1">HTML5</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Share Button: </label>
                                    <select class="form-control">
                                        <option value="1">Disable</option>
                                    </select>
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
