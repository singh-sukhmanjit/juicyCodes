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
                        <span>Manage Videos</span> <a data-toggle="collapse" data-target="#toggleVideo" href="javascript:void"><i class="pull-right fa fa-angle-up"></i></a>
                    </div>

                    <div class="panelBody collapse in" id="toggleVideo">
                        <div class="table-responsive">
                            <table class="table table-striped no-margins">
                                <thead>
                                    <tr>
                                        <th>Video Title</th>
                                        <th width="90px">Qualities</th>
                                        <th width="110px">Player Link</th>
                                        <th width="110px">Embed Code</th>
                                        <th width="80px">Status</th>
                                        <th width="80px">Progress</th>
                                        <th width="80px">Views</th>
                                        <th width="120px">Added</th>
                                        <th width="120px">Added By</th>
                                        <th width="280px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                            <td>z.nation.s04e13.1080p.web.x264-tbs.mkv.mp4</td>
                                        <td><a href="#!" class="btn btn-info btn-xs more_info waves-effect waves-light waves-float" data-info="%7B%22Orginal%22%3A%7B%22name%22%3A%22z.nation.s04e13.1080p.web.x264-tbs.mkv.mp4%22%2C%22width%22%3A1920%2C%22height%22%3A1080%2C%22size%22%3A426251188%7D%7D"><i class="fa fa-superpowers"></i>
                                         Qualities</a>
                                        </td>
                                        <td><a href="https://streamgo.me/player/ZEqW7oya4HP6kSQ/" class="btn btn-success btn-xs waves-effect waves-light waves-float" target="_blank"><i class="fa fa-chain"></i>
                                         Player Link</a>
                                        </td>
                                        <td><a href="#!" class="btn btn-primary btn-xs get_embed waves-effect waves-light waves-float" data-slug="ZEqW7oya4HP6kSQ"><i class="fa fa-code"></i>
                                         Get Code</a>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span class="badge badge-success">100%</span>
                                        </td>
                                        <td><span class="badge badge-info">0</span>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="17 December, 2017 11:47 AM">17 Dec, 2017</span>
                                        </td>
                                        <td>Kaiac</td>
                                        <td><a href="http://falcon.streamgo.me/video/details/11710/" class="btn btn-xs btn-primary waves-effect waves-light waves-float"><i class="fa fa-info-circle"></i>
                                         DETAILS</a>
                                        <a href="http://falcon.streamgo.me/video/edit/11710/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/video/hide/11710/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-eye-slash"></i>
                                         HIDE</a>
                                        <a href="http://falcon.streamgo.me/video/delete/11710/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>witnesses.s02e08.subbed.720p.hdtv.x264-qpel.mkv.mp4</td>
                                        <td><a href="#!" class="btn btn-info btn-xs more_info waves-effect waves-light waves-float" data-info="%7B%22Orginal%22%3A%7B%22name%22%3A%22witnesses.s02e08.subbed.720p.hdtv.x264-qpel.mkv.mp4%22%2C%22width%22%3A1280%2C%22height%22%3A720%2C%22size%22%3A713831067%7D%7D"><i class="fa fa-superpowers"></i>
                                         Qualities</a>
                                        </td>
                                        <td><a href="https://streamgo.me/player/ZS92UZ5q5zqYRC8/" class="btn btn-success btn-xs waves-effect waves-light waves-float" target="_blank"><i class="fa fa-chain"></i>
                                         Player Link</a>
                                        </td>
                                        <td><a href="#!" class="btn btn-primary btn-xs get_embed waves-effect waves-light waves-float" data-slug="ZS92UZ5q5zqYRC8"><i class="fa fa-code"></i>
                                         Get Code</a>
                                        </td>
                                        <td><div class="label label-success">ACTIVE</div>
                                        </td>
                                        <td><span class="badge badge-success">100%</span>
                                        </td>
                                        <td><span class="badge badge-info">0</span>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="17 December, 2017 11:47 AM">17 Dec, 2017</span>
                                        </td>
                                        <td>Kaiac</td>
                                        <td><a href="http://falcon.streamgo.me/video/details/11709/" class="btn btn-xs btn-primary waves-effect waves-light waves-float"><i class="fa fa-info-circle"></i>
                                         DETAILS</a>
                                        <a href="http://falcon.streamgo.me/video/edit/11709/" class="btn btn-xs btn-info waves-effect waves-light waves-float"><i class="fa fa-pencil"></i>
                                         EDIT</a>
                                        <a href="http://falcon.streamgo.me/video/hide/11709/" class="btn btn-xs btn-warning waves-effect waves-light waves-float"><i class="fa fa-eye-slash"></i>
                                         HIDE</a>
                                        <a href="http://falcon.streamgo.me/video/delete/11709/" class="btn btn-xs btn-danger waves-effect waves-light waves-float" onclick="return jc_confirm(this);"><i class="fa fa-trash"></i>
                                         DELETE</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panelFooter">
                        <input class="form-control" type="text" name="" value="" placeholder="Search Video">
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
