<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Games</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    <!-- Favicon icon -->

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    <style type="text/css">
        .modal-backdrop {
            background-color: #4169E1;
        }
    </style>

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
                    <h4 class="page-title">Games page</h4>
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
                            <button type="button" class="btn col-2" id="generate"
                                style="background-color:#040152;color:white;">Genereate No.</button>
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
                                    @foreach ($games as $g)
                                        <tr>
                                            <td>{{ $g->Game_ID }}</td>
                                            <td>{{ $g->DateTime }}</td>
                                            <td>{{ $g->noofplayers }}</td>
                                            <td>{{ $g->Number }}</td>

                                            <td>
                                              @if ($g->game_players != null && count($g->game_players) > 0)
                                              {{ $g->game_players->sum('Amount') }}
                                              @else
                                                  N/A
                                              @endif
                                          </td>
                                            <td>{{ $g->game_players->where('Status', 'Won')->count() }}</td>
                                            <td>{{ $g->game_players->where('Status', 'Won')->sum('Amount') }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" style="background-color:040152;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLongTitle">Your Number is: </h4>

                    </div>
                    <div class="modal-body"
                        style="text-align:center;border-radius:100%; background-color:#000080;color:white; width:60px;height:60px;margin:auto;">
                        <strong>
                            <h2 id="num"></h2>
                        </strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="close"
                            data-dismiss="modal">Close</button>

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
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script>
            function Gen() {

                var row = $("#example tr").length;

                let Num = (Math.floor(Math.random() * row))
                document.getElementById('num').innerHTML = Num;

                $('#modal').modal('show');
                // alert(Num + " is your number")
            }


            let button1 = document.getElementById('generate');
            button1.addEventListener('click', Gen);

            let button2 = document.getElementById('close');
            button2.addEventListener('click', close);

            function close() {
                $('#modal').modal('hide');

            }
        </script>

</body>

</html>
