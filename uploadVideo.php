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
                <div class="col-sm-6 col-sm-offset-3 uploadVideo">
                    <div class="panelHead">
                        <span>Upload Video</span> <a data-toggle="collapse" data-target="#toggleUpload" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleUpload">
                        <form>
                            <div class="form-group col-sm-6">
                                <label>Select Video: <i class="pull-right fa fa-paperclip"></i></label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Subtitle: <i class="pull-right fa fa-plus-square pull-right"></i></label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Video Title: </label>
                                <input class="form-control" type="text" placeholder="Please Write Video Title">
                            </div>

                            <div class="form-group col-sm-12">
                                <label><input type="checkbox"> Dont Encode This Video:
                                </label>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="submit" value="UPLOAD" class="btn btnUpload">
                            </div>
                            <div class="form-group col-sm-6">
                                <button class="btn btnUpload pull-right">ADD MORE</button>
                            </div>
                        </form>
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
