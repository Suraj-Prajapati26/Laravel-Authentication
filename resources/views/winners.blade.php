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
    <title>Winner</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('include.header')
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
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">Winners Table</h4>
            </div>
            
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          
        <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                <div class="row" style="padding-bottom:2rem;">
                <h3 class="box-title col-10" style="display:inline-block;">Table</h3>
                <!-- <button type="button" class="btn btn-warning col-2" style="background-color:#040152;">Genereate No.</button> -->
                </div>
                
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th class="border-top-0">Winner Id</th>
                        <th class="border-top-0">Date/Time</th>
                        <th class="border-top-0">No. of players</th>
                        <th class="border-top-0">Numbers</th>
                        <th class="border-top-0">Total amount collected</th>
                        <th class="border-top-0">Winning Amount</th>
                        <th class="border-top-0">Winners</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1/02/2023</td>
                        <td>34</td>
                        <td>22</td>
                        <td>12345</td>
                        <td>1234</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2/02/2023</td>
                        <td>57</td>
                        <td>33</td>
                        <td>15345</td>
                        <td>3456</td>
                        <td>23</td>
                      </tr><tr>
                        <td>3</td>
                        <td>5/02/2023</td>
                        <td>234</td>
                        <td>21</td>
                        <td>123145</td>
                        <td>2133</td>
                        <td>15</td>
                      </tr><tr>
                        <td>4</td>
                        <td>3/02/2023</td>
                        <td>1432</td>
                        <td>234</td>
                        <td>124325</td>
                        <td>12334</td>
                        <td>24</td>
                      </tr><tr>
                        <td>5</td>
                        <td>4/02/2023</td>
                        <td>323</td>
                        <td>324</td>
                        <td>32432</td>
                        <td>2344</td>
                        <td>234</td>
                      </tr>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('include.footer')

       <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
       <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
       </script>
  </body>
</html>
