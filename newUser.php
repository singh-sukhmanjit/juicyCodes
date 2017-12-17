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
                        <span>Add New User</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-4">
                            <form>
                                <div class="form-group col-sm-12">
                                    <label>User Full Name: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="Insert User Full Name">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>User Email: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="text" placeholder="Insert User Email">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>User Password: <i class="fa fa-info-circle"></i></label>
                                    <input class="form-control" type="password" placeholder="Insert unique password">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>User Role: <i class="fa fa-info-circle"></i></label>
                                    <select class="form-control">
                                        <option disabled selected>-- Select a Role --</option>
                                        <option value="1">Uploader</option>
                                        <option value="2">Administrator</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <input type="submit" value="ADD USER" class="btn btnUpload">
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
