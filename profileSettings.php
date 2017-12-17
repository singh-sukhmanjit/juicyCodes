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
                <div class="col-sm-4 uploadVideo">
                    <div class="panelHead">
                        <span>1080P Configuration</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-12">
                            <form>
                                <div class="form-group col-sm-6">
                                    <label>Video Width: </label>
                                    <input class="form-control" type="text" placeholder="" value="1920">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Video Height: </label>
                                    <input class="form-control" type="text" placeholder="" value="1080">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Quality: </label>
                                    <input class="form-control" type="text" placeholder="" value="20">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Frame Rate: </label>
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Audio Bitrate: </label>
                                    <input class="form-control" type="text" placeholder="" value="192">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Audio Codec: </label>
                                    <select class="form-control">
                                        <option value="1">mp3</option>
                                        <option value="2">av_aac</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <input type="submit" value="SAVE PROFILE" class="btn btnUpload">
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
