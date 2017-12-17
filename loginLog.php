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
                <div class="col-sm-12 manageVideo">
                    <div class="panelHead">
                        <span>Login Log</span> <button class="btn btn-danger btn-xs pull-right">Clear Log</button>
                    </div>

                    <div class="panelBody">
                        <div class="table-responsive">
                            <table class="table table-striped no-margins">
                                <thead>
                                    <tr><th width="60px">UID</th>
                                        <th>User</th>
                                        <th>IP Address</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Timezone</th>
                                        <th>Information</th>
                                        <th width="120px">Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="http://falcon.streamgo.me/user/log/7/">#7</a></td>
                                        <td>RJ</td>
                                        <td>157.39.201.130</td>
                                        <td>Indonesia</td>
                                        <td>Jakarta</td>
                                        <td>Asia/Jakarta</td>
                                        <td><a href="#!" class="btn btn-primary btn-xs more_info waves-effect waves-light waves-float" data-info="%7B%22as%22%3A%22AS55836%20Reliance%20Jio%20Infocomm%20Limited%22%2C%22city%22%3A%22Jakarta%22%2C%22country%22%3A%22Indonesia%22%2C%22countryCode%22%3A%22ID%22%2C%22isp%22%3A%22Jio%22%2C%22lat%22%3A-6.20876%2C%22lon%22%3A106.846%2C%22org%22%3A%22Jio%22%2C%22query%22%3A%22157.39.201.130%22%2C%22region%22%3A%22JK%22%2C%22regionName%22%3A%22Daerah%20Khusus%20Ibukota%20Jakarta%22%2C%22timezone%22%3A%22Asia%2FJakarta%22%2C%22zip%22%3A%22%22%7D"><i class="fa fa-info-circle"></i>
                                         More Info</a>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="17 December, 2017 12:26 PM">17 December, 2017</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="http://falcon.streamgo.me/user/log/1/">#1</a></td>
                                        <td>Kaiac</td>
                                        <td>95.211.170.226</td>
                                        <td>Netherlands</td>
                                        <td>Amsterdam (Nieuwmarkt en Lastage)</td>
                                        <td>Europe/Amsterdam</td>
                                        <td><a href="#!" class="btn btn-primary btn-xs more_info waves-effect waves-light waves-float" data-info="%7B%22as%22%3A%22AS60781%20LeaseWeb%20Netherlands%20B.V.%22%2C%22city%22%3A%22Amsterdam%20%28Nieuwmarkt%20en%20Lastage%29%22%2C%22country%22%3A%22Netherlands%22%2C%22countryCode%22%3A%22NL%22%2C%22isp%22%3A%22LeaseWeb%20Netherlands%20B.V.%22%2C%22lat%22%3A52.3678%2C%22lon%22%3A4.89998%2C%22org%22%3A%22LeaseWeb%20Netherlands%20B.V.%22%2C%22query%22%3A%2295.211.170.226%22%2C%22region%22%3A%22%22%2C%22regionName%22%3A%22North%20Holland%22%2C%22timezone%22%3A%22Europe%2FAmsterdam%22%2C%22zip%22%3A%22%22%7D"><i class="fa fa-info-circle"></i>
                                         More Info</a>
                                        </td>
                                        <td><span data-toggle="tooltip" title="" data-original-title="17 December, 2017 11:08 AM">17 December, 2017</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panelFooter">
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
