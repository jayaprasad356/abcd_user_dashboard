<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;
include_once('includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
?>




<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from www.kodingwife.com/demos/kingfisher/dark-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 05:27:55 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Kingfisher Admin Panel" />
    <meta
      name="keywords"
      content="Admin, Dashboard, Bootstrap 4 Admin Dashboard, Bootstrap 4 Admin Template, Bootstrap 4 Admin Template, Sales, Admin Dashboard, Traffic, Tasks, Revenue, Orders, Invoices, Projects, Invoices, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest"
    />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="img/favicon.jpeg" />
    <title>ABCD Web</title>

    <!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Icomoon Icons CSS -->
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css" />

    <!-- Master CSS -->
    <link rel="stylesheet" href="css/main.css" />

    <!-- Daterange CSS -->
    <link rel="stylesheet" href="vendor/daterange/daterange.css" />

    <!--
			**********************
			**********************
			Optional CSS files
			**********************
			**********************
		-->

    <!-- Datepickers CSS -->
    <link rel="stylesheet" href="css/datepicker.css" />

    <!-- jQueryUI CSS -->
    <link rel="stylesheet" href="css/jquery-ui.css" />

    <!-- Morris CSS -->
    <link rel="stylesheet" href="vendor/morris/morris.css" />

    <!-- Circliful CSS -->
    <link rel="stylesheet" href="vendor/circliful/circliful.css" />

    <!-- Tags CSS -->
    <link href="vendor/tags/tagmanager.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Loading start -->
    <div id="loading-wrapper">
      <div id="loader"></div>
    </div>
    <!-- Loading end -->

    <!-- BEGIN .app-wrap -->
    <div class="app-wrap">
      <!-- BEGIN .app-heading -->
      <header class="app-header">
        <div class="container-fluid">
          <!-- Row start -->
          <div class="row gutters">
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-7 col-7">
              <!-- BEGIN .logo -->
              <div class="logo-block">
                <a href="index.html" class="logo">
                  <img src="img/logo.png" alt="Kingfisher Admin Dashboard" />
                </a>
               
                </a>
              </div>
              <!-- END .logo -->

              <!-- Live updates start -->
              <div class="live-updates">
                <ul class="header-news" id="header-news">
                  <li>
                    <a href="javascript:void(0)">
                      <i class="icon-shopping-basket"></i>
                      <span>250 new users  Level up to champion users.</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="icon-timer"></i>
                      <span>7 new features updated successfully.</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">
                      <i class="icon-star"></i>
                      <span>Successfully launched new level.</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Live updates end -->
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-5 col-5">
              <!-- Header actions start -->
              <ul class="header-actions">
                  <li>
                    <a href="https://play.google.com/store/apps/details?id=com.app.abcdapp">
                                    <img src="img/playstore-1.png" height="40" width="100%" alt=""></a>
                  </li>
                  <li>
                    <a href="https://wa.me/7676636990" target="_blank">
                      <img src="img/whatsapp.png" height="40" alt=""></a>
                  </li>
              </ul>
              <!-- Header actions end -->
            </div>
          </div>
          <!-- Row start -->
        </div>
      </header>
		<header class="main-heading">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="page-icon">
                    <i class="icon-laptop_windows"></i>
                  </div>
                  <div class="page-title">
                    <h3>Dashboard</h3>
                    <h6 class="sub-heading">
                      Welcome to ABCD Website
                    </h6>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div style="margin-top:10px;">
                    <a href="form-inputs.html" class="btn btn-danger">Trial Regular Task</a>
                    <a class="btn btn-success">Trial Champion Task</a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  <div class="daterange-container">
                    <div id="reportrange" class="form-control">
                      <span></span> <i class="icon-chevron-down down-arrow"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </header>
		  <!-- BEGIN .main-content -->
          <div class="main-content">
            <!-- Row start -->
            <div class="row gutters">
              <div class="col-6 col-md-3">
                <div class="simple-widget">
                  <!-- <div class="growth">+125</div> -->
                  <h3><?php
                          
                            $sql = "SELECT id FROM users";
                            $db->sql($sql);
                            $res = $db->getResult();
                            $num = $db->numRows($res);
                            echo $num;?></h3>
                  <p>Users</p>
                  <!-- <div class="progress sm">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 37%"
                      aria-valuenow="37"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div> -->
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="simple-widget">
                  <!-- <div class="growth">+4</div> -->
                  <h3><?php
                            $currentdate = date('Y-m-d');
                            $sql = "SELECT id FROM users WHERE status=1 AND today_codes != 0 AND total_codes != 0";
                            $db->sql($sql);
                            $res = $db->getResult();
                            $num = $db->numRows($res);
                            $sum=$num+1000;
                            echo $sum; ?></h3>
                  <p>Active Users</p>
                  <!-- <div class="progress sm">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 48%"
                      aria-valuenow="48"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div> -->
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="simple-widget">
                  <!-- <div class="growth">+25</div> -->
                  <h3><?php
                               $sql = "SELECT id FROM users WHERE id IS NOT NULL AND task_type='champion'";
                                $db->sql($sql);
                                $res = $db->getResult();
                                $num = $db->numRows($res);
                                echo $num;
                                ?></h3>
                  <p>Champion Users</p>
                  <!-- <div class="progress sm">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 65%"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div> -->
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="simple-widget orange">
                  <!-- <div class="growth">+19</div> -->
                  <h3><?php
                               $sql = "SELECT SUM(today_codes) AS today_codes FROM users";
                                $db->sql($sql);
                                $res = $db->getResult();
                                // $num = $db->numRows($res);
                                echo $res[0]['today_codes'];
                                ?></h3>
                  <p>Today Codes</p>
                  <!-- <div class="progress sm">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      style="width: 80%"
                      aria-valuenow="80"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="row gutters">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="card warning">
                  <div class="card-header">Deals</div>
                  <div class="card-body">
                    <div class="deals-widget">
                      <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <div class="small-graph">
                            <span class="updating-chart-five"
                              >4,2,2,2,2,5,2,1,3,2,1,2,2,4</span
                            >
                          </div>
                          <p><i class="icon-triangle-up"></i>1250</p>
                          <h5>Daily</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <div class="small-graph">
                            <span class="updating-chart-four"
                              >2,1,1,1,2,2,2,2,1,3,3,2,1,2</span
                            >
                          </div>
                          <p><i class="icon-triangle-down"></i>8275</p>
                          <h5>Weekly</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="card teal">
                  <div class="card-header">Invoices</div>
                  <div class="card-body">
                    <div class="invoices-widget">
                      <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <div class="progress sm">
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 75%"
                              aria-valuenow="75"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                          <p><i class="icon-triangle-up"></i>825</p>
                          <h5>Daily</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                          <div class="progress sm">
                            <div
                              class="progress-bar bg-warning"
                              role="progressbar"
                              style="width: 75%"
                              aria-valuenow="75"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                          <p><i class="icon-triangle-down"></i>6590</p>
                          <h5>Weekly</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->
            <br>
			<h4 class="text-center" >Users</h4>
			<br>
            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card dark">
                  <div class="card-header">Users</div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="hideSearchExample"
                        class="table projects-table m-0"
                      >
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name.</th>
                            <th>Refer Code.</th>
                            <th>Today Codes.</th>
                            <th>Total Codes.</th>
                            <th>Total Earnings.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql = "SELECT * FROM `users` LIMIT 10";
                          $db->sql($sql);
                          $result = $db->getResult();
                          foreach ($result as $value) {
                          ?>
                          <tr>
                            <td><?php echo $value['id']; ?>.</td>
                            <td>
                              <i class="icon-vinyl text-success"></i><?php echo $value['name']; ?>
                            </td>
                            <td>
                            <span class="badge badge-pill badge-info"
                                ><?php echo $value['refer_code']; ?></span
                              >
                            </td>
                            <td><?php echo $value['today_codes']; ?></td>
                            <td>
                                 <?php echo $value['total_codes']; ?>
                            </td>
                            <td><i class="icon-vinyl text-primary"></i><?php echo $value['earn']; ?></td>
                          </tr>
                          <?php } ?>
                          <!-- <tr>
                            <td>02.</td>
                            <td>
                              <i class="icon-vinyl text-info"></i>UX Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$3575</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 30%"
                                  aria-valuenow="30"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>03.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>New Layout
                            </td>
                            <td>
                              <span class="badge badge-pill badge-success"
                                >Low</span
                              >
                            </td>
                            <td>$1500</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 50%"
                                  aria-valuenow="50"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>04.</td>
                            <td>
                              <i class="icon-vinyl text-success"></i>Web App
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$6000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-danger"
                                  role="progressbar"
                                  style="width: 90%"
                                  aria-valuenow="90"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>05.</td>
                            <td><i class="icon-vinyl text-info"></i>Website</td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$3000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 60%"
                                  aria-valuenow="60"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>06.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>Web Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-success"
                                >Low</span
                              >
                            </td>
                            <td>$1800</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 80%"
                                  aria-valuenow="80"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>07.</td>
                            <td>
                              <i class="icon-vinyl text-pink"></i>UX Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$9000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 30%"
                                  aria-valuenow="30"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>08.</td>
                            <td>
                              <i class="icon-vinyl text-info"></i>Wireframes
                            </td>
                            <td>
                              <span class="badge badge-pill badge-warning"
                                >Low</span
                              >
                            </td>
                            <td>$8700</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 90%"
                                  aria-valuenow="90"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>09.</td>
                            <td>
                              <i class="icon-vinyl text-success"></i>Web App
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$2000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 20%"
                                  aria-valuenow="20"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>10.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>Product
                              Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$4000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 49%"
                                  aria-valuenow="49"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
			  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="card dark">
                  <div class="card-header">Projects</div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="hideSearchExample"
                        class="table projects-table m-0"
                      >
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Project.</th>
                            <th>Priority.</th>
                            <th>Price.</th>
                            <th>Status.</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>01.</td>
                            <td>
                              <i class="icon-vinyl text-danger"></i>Mobile App
                            </td>
                            <td>
                              <span class="badge badge-pill badge-warning"
                                >Low</span
                              >
                            </td>
                            <td>$9500</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 75%"
                                  aria-valuenow="75"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>02.</td>
                            <td>
                              <i class="icon-vinyl text-info"></i>UX Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$3575</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 30%"
                                  aria-valuenow="30"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>03.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>New Layout
                            </td>
                            <td>
                              <span class="badge badge-pill badge-success"
                                >Low</span
                              >
                            </td>
                            <td>$1500</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 50%"
                                  aria-valuenow="50"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>04.</td>
                            <td>
                              <i class="icon-vinyl text-success"></i>Web App
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$6000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-danger"
                                  role="progressbar"
                                  style="width: 90%"
                                  aria-valuenow="90"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>05.</td>
                            <td><i class="icon-vinyl text-info"></i>Website</td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$3000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 60%"
                                  aria-valuenow="60"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>06.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>Web Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-success"
                                >Low</span
                              >
                            </td>
                            <td>$1800</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 80%"
                                  aria-valuenow="80"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>07.</td>
                            <td>
                              <i class="icon-vinyl text-pink"></i>UX Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$9000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 30%"
                                  aria-valuenow="30"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>08.</td>
                            <td>
                              <i class="icon-vinyl text-info"></i>Wireframes
                            </td>
                            <td>
                              <span class="badge badge-pill badge-warning"
                                >Low</span
                              >
                            </td>
                            <td>$8700</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 90%"
                                  aria-valuenow="90"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>09.</td>
                            <td>
                              <i class="icon-vinyl text-success"></i>Web App
                            </td>
                            <td>
                              <span class="badge badge-pill badge-info"
                                >Normal</span
                              >
                            </td>
                            <td>$2000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-success"
                                  role="progressbar"
                                  style="width: 20%"
                                  aria-valuenow="20"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>10.</td>
                            <td>
                              <i class="icon-vinyl text-warning"></i>Product
                              Design
                            </td>
                            <td>
                              <span class="badge badge-pill badge-danger"
                                >High</span
                              >
                            </td>
                            <td>$4000</td>
                            <td>
                              <div class="progress sm">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 49%"
                                  aria-valuenow="49"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                  <div class="card-header">Sales</div>
                  <div class="toggle-switch tr">
                    <input type="checkbox" class="check" />
                    <b class="b switch"></b>
                    <b class="b track"></b>
                  </div>
                  <div class="tags-container">
                    <input
                      type="text"
                      autocomplete="off"
                      name="tags"
                      placeholder="Add tag"
                      class="tm-input tm-tag-plain tm-input-01"
                      data-original-title=""
                    />
                  </div>
                  <div class="card-body">
                    <div id="areaChart" class="chart-height-lg"></div>
                    <div class="spacer20"></div>
                    <div class="row gutters">
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="info-stats">
                          <span class="info-label"></span>
                          <p class="info-title">Daily Sales</p>
                          <h4 class="info-total">9,850</h4>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="info-stats">
                          <span class="info-label red"></span>
                          <p class="info-title">Weekly Sales</p>
                          <h4 class="info-total">57,985</h4>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="info-stats">
                          <span class="info-label green"></span>
                          <p class="info-title">Monthly Sales</p>
                          <h4 class="info-total">2,50,900</h4>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                        <div class="info-stats">
                          <span class="info-label yellow"></span>
                          <p class="info-title">Yearly Sales</p>
                          <h4 class="info-total red">99,95,500</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->
          </div>
          <!-- END: .main-content -->
      </header>
	    <!-- BEGIN .main-footer -->
		<footer class="main-footer">Copyright ABCD Admin 2022.</footer>
		<!-- END: .main-footer -->
    </div>
    <!-- END: .app-wrap -->

    <!--
			**********************
			**********************
			Common JS files
			**********************
			**********************
		-->

    <!-- jQuery JS. -->
    <script src="js/jquery.js"></script>

    <!-- Info: jQuery UI is only required for datepicker or any jQueryUI related plugins -->
    <script src="js/jquery-ui.min.js"></script>

    <!-- Tether Js, then other JS. -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/unifyMenu/unifyMenu.js"></script>
    <script src="vendor/onoffcanvas/onoffcanvas.js"></script>
    <script src="js/moment.js"></script>

    <!-- News Ticker JS -->
    <script src="vendor/newsticker/newsTicker.min.js"></script>
    <script src="vendor/newsticker/custom-newsTicker.js"></script>

    <!-- Slimscroll JS -->
    <script src="vendor/slimscroll/slimscroll.min.js"></script>
    <script src="vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange JS -->
    <script src="vendor/daterange/daterange.js"></script>
    <script src="vendor/daterange/custom-daterange.js"></script>

    <!--
			**********************
			**********************
			Optional JS files - Plugns
			**********************
			**********************
		-->

    <!-- Morris Graphs JS -->
    <script src="vendor/morris/raphael-min.js"></script>
    <script src="vendor/morris/morris.min.js"></script>
    <script src="vendor/morris/custom/areaChart.js"></script>
    <script src="vendor/morris/custom/line-chart.js"></script>
    <script src="vendor/morris/custom/multibar.js"></script>

    <!-- Circliful JS -->
    <script src="vendor/circliful/circliful.min.js"></script>
    <script src="vendor/circliful/circliful.custom.js"></script>

    <!-- Peity JS -->
    <script src="vendor/peity/peity.min.js"></script>
    <script src="vendor/peity/custom-peity.js"></script>

    <!-- Tag Manager JS -->
    <script src="vendor/tags/tagmanager.js"></script>
    <script src="vendor/tags/tagmanager-custom.js"></script>

    <!-- Common JS -->
    <script src="js/common.js"></script>

    <script>
      //Datepicker
      $(function () {
        $("#datepicker").datepicker();
      });
    </script>
  </body>

  <!-- Mirrored from www.kodingwife.com/demos/kingfisher/dark-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 05:28:19 GMT -->
</html>