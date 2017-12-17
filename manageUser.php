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
                <div class="col-sm-12 manageVideo">
                    <div class="panelHead">
                        <span>Manage Users</span> <a data-toggle="collapse" data-target="#toggleManageServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleManageServer">
                        <div class="table-responsive">
                            <table class="table table-striped no-margins">
                                <thead>
                                    <tr><th width="60px">#ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th width="120px">Role</th>
                                        <th width="120px">Status</th>
                                        <th width="120px">Added</th>
                                        <th width="230px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>7</td>
                                        <td>RJ</td>
                                        <td>rj@juicycodes.com</td>
                                        <td><div class="label label-success">ADMIN</div>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="29 October, 2017 08:46 AM">29 October, 2017</span>
                                        </td>
                                        <td><a href="http://falcon.streamgo.me/user/edit/7/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/user/block/7/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-ban"></i>
                                         BLOCK</a>
                                        <a href="http://falcon.streamgo.me/user/delete/7/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>RJ</td>
                                        <td>rj@juicycodes.com</td>
                                        <td><div class="label label-success">ADMIN</div>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="29 October, 2017 08:46 AM">29 October, 2017</span>
                                        </td>
                                        <td><a href="http://falcon.streamgo.me/user/edit/7/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/user/block/7/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-ban"></i>
                                         BLOCK</a>
                                        <a href="http://falcon.streamgo.me/user/delete/7/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panelFooter">
                        <input class="form-control" type="text" name="" value="" placeholder="Search User by Name">
                        <input class="btn btnUpload" type="submit" value="Search">
                        <nav aria-label="Page navigation">
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
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
