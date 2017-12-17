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
                        <span>Manage Servers</span> <a data-toggle="collapse" data-target="#toggleManageServer" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleManageServer">
                        <div class="table-responsive">
                            <table class="table table-striped no-margins">
                                <thead>
                                    <tr><th width="60px">#ID</th>
                                        <th>Name</th>
                                        <th>IP Address</th>
                                        <th>Public URL</th>
                                        <th>Server ID</th>
                                        <th>Server Secret</th>
                                        <th width="120px">Type</th>
                                        <th width="120px">Status</th>
                                        <th width="120px">Added</th>
                                        <th width="120px">Added By</th>
                                        <th width="300px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>5</td>
                                        <td>STORAGE-1</td>
                                        <td>178.132.5.195</td>
                                        <td>https://cdn1.streamcherry.xyz</td>
                                        <td><span data-toggle="popover" tabindex="0" data-text="storage-server-1" class="protected" data-original-title="" title="">SHOW</span>
                                        </td>
                                        <td><span data-toggle="popover" tabindex="0" data-text="Am6N9MqQw5Z%24tlKiS5ku" class="protected" data-original-title="" title="">SHOW</span>
                                        </td>
                                        <td><div class="badge badge-info">STORAGE</div>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="07 September, 2017 04:08 PM">07 Sep, 2017</span>
                                        </td>
                                        <td></td>
                                        <td><a href="http://falcon.streamgo.me/server/refresh/5/" class="btn btn-xs btn-success waves-effect waves-light waves-float"><i class="fa fa-refresh"></i>
                                         REFRESH</a>
                                        <a href="http://falcon.streamgo.me/server/edit/5/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/server/disable/5/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-ban"></i>
                                         DISABLE</a>
                                        <a href="http://falcon.streamgo.me/server/delete/5/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>STORAGE-2</td>
                                        <td>194.88.104.121</td>
                                        <td>https://cdn2.streamcherry.xyz</td>
                                        <td><span data-toggle="popover" tabindex="0" data-text="storage-server-2" class="protected" data-original-title="" title="">SHOW</span>
                                        </td>
                                        <td><span data-toggle="popover" tabindex="0" data-text="fVii3mw8Ntyd0Ez" class="protected" data-original-title="" title="">SHOW</span>
                                        </td>
                                        <td><div class="badge badge-info">STORAGE</div>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="25 July, 2017 08:03 PM">25 Jul, 2017</span>
                                        </td>
                                        <td></td>
                                        <td><a href="http://falcon.streamgo.me/server/refresh/4/" class="btn btn-xs btn-success waves-effect waves-light waves-float"><i class="fa fa-refresh"></i>
                                         REFRESH</a>
                                        <a href="http://falcon.streamgo.me/server/edit/4/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/server/disable/4/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-ban"></i>
                                         DISABLE</a>
                                        <a href="http://falcon.streamgo.me/server/delete/4/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panelFooter">
                        <input class="form-control" type="text" name="" value="" placeholder="Search Server">
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
