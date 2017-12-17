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
                        <span>Add New Server</span> <a data-toggle="collapse" data-target="#toggleNewServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleNewServer">
                        <div class="newServer col-sm-5">
                            <form>
                                <div class="form-group col-sm-6">
                                    <label>Server Name: </label>
                                    <input class="form-control" type="text" placeholder="Insert Distinct Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Server IP: </label>
                                    <input class="form-control" type="text" placeholder="Insert server IP address">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Server ID: </label>
                                    <input class="form-control" type="text" placeholder="Insert unique server ID">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Server Secret: </label>
                                    <input class="form-control" type="text" placeholder="Secret Service">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Public URL: </label>
                                    <input class="form-control" type="text" placeholder="Insert public address">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Server Type: </label>
                                    <select class="form-control">
                                        <option value="1">Storage</option>
                                        <option value="2">Encoding</option>
                                        <option value="3">Storage + Encoding</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-6">
                                    <input type="submit" value="ADD SERVER" class="btn btnUpload">
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
