<!DOCTYPE html>
<html>
  <head>
    <title>JuicyCodes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>

    <div class="container-fluid">
        <div class="row">

<!-- Left Navigation -->
            <?php include 'pages/leftNav.php'; ?>
<!-- ************ -->

            <div class="col-sm-10 mainArea">

<!-- Header -->
                <?php include 'pages/header.php'; ?>
<!-- ************ -->

            <div class="row changeContent">
                <div class="col-sm-12 uploadVideo">
                    <div class="panelHead">
                        <span>MISC SETTINGS</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-5">
                            <form>
                                <div class="form-group col-sm-6">
                                    <label>Default Preview Link: </label>
                                    <input class="form-control" type="text" placeholder="" value="1920">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Default Video Link: </label>
                                    <input class="form-control" type="text" placeholder="" value="1080">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Default Time Zone: </label>
                                    <select class="form-control">
                                        <option value="1">UTC</option>
                                        <option value="2">UTC</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Items Per Page: </label>
                                    <input class="form-control" type="text" placeholder="" value="15">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Video Subtitle:  </label>
                                    <select class="form-control">
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Auto Subtitle Display: </label>
                                    <select class="form-control">
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
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
