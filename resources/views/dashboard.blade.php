<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Dashboard</title>
    @include('include.head_link')

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
    
    @include('include.header')

      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
    @include('include.sidebar')
      
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">Dashboard</h4>
            </div>
            
          </div>
        </div> -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Three charts -->
          <!-- ============================================================== -->
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Total Users</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-success">{{$count}}</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Total Games</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash2">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-purple">1869</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Amount Deposites</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash3">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-info">{{$sum}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- PRODUCTS YEARLY SALES -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="white-box">
                <h3 class="box-title">Monthly Sales</h3>
                <div class="d-md-flex">
                  <ul class="list-inline d-flex ms-auto">
                    <li class="ps-3">
                      <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                    </li>
                    <li class="ps-3">
                      <h5>
                        <i class="fa fa-circle me-1 text-inverse"></i>Windows
                      </h5>
                    </li>
                  </ul>
                </div>
                <div id="ct-visits" style="height: 405px">
                  <div class="chartist-tooltip" style="top: -17px; left: -12px">
                    <span class="chartist-tooltip-value">6</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- RECENT SALES -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                <div class="d-md-flex mb-3">
                  <h3 class="box-title mb-0">Recent games</h3>
                  <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                      <option>March 2021</option>
                      <option>April 2021</option>
                      <option>May 2021</option>
                      <option>June 2021</option>
                      <option>July 2021</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th class="border-top-0">Game Id</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">No. of players</th>
                        <th class="border-top-0">Number</th>
                        <th class="border-top-0">Total amount collected</th>
                        <th class="border-top-0">Winner</th>
                        <th class="border-top-0">Winning Amount</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1/02/2023</td>
                        <td>100</td>
                        <td>3</td>
                        <td>13224</td>
                        <td>21</td>
                        <td>4323</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>3/02/2023</td>
                        <td>56</td>
                        <td>33</td>
                        <td>3324</td>
                        <td>11</td>
                        <td>1423</td>
                      </tr><tr>
                        <td>3</td>
                        <td>4/02/2023</td>
                        <td>67</td>
                        <td>26</td>
                        <td>9024</td>
                        <td>43</td>
                        <td>2342</td>
                      </tr><tr>
                        <td>4</td>
                        <td>5/02/2023</td>
                        <td>87</td>
                        <td>35</td>
                        <td>13624</td>
                        <td>21</td>
                        <td>4253</td>
                      </tr><tr>
                        <td>5</td>
                        <td>5/02/2023</td>
                        <td>100</td>
                        <td>32</td>
                        <td>13124</td>
                        <td>21</td>
                        <td>4213</td>
                      </tr><tr>
                        <td>6</td>
                        <td>6/02/2023</td>
                        <td>112</td>
                        <td>23</td>
                        <td>13424</td>
                        <td>57</td>
                        <td>43223</td>
                      </tr><tr>
                        <td>7</td>
                        <td>7/02/2023</td>
                        <td>100</td>
                        <td>32</td>
                        <td>13214</td>
                        <td>21</td>
                        <td>5464</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Recent Comments -->
          <!-- ============================================================== -->
          
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('include.footer')

        <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
  </body>
</html>
