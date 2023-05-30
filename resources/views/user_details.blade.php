<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://kit.fontawesome.com/b673ad6bb7.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b673ad6bb7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../css/style.min.css" rel="stylesheet" />

    <style>
        .li {
            font-size: 1.2rem;
        }
    </style>

</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('include.sidebar')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">User Details</h4>
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
                                <h3 class="box-title col-10" style="display:inline-block;">User Details</h3>
                                <!-- <button type="button" class="btn btn-warning col-2 " style="background-color:#040152;" >Genereate No.</button> -->
                            </div>

                            <div class="page-container">

                                <div class="card card-outline-info col-8"
                                    style="padding:1.5%;background-color: 	#FFFAFA;margin:auto;margin-bottom:4%;">
                                    <div style="text-align: center;">
                                    <p style="font-size:1.3rem;"><strong>{{ $user->Name }}</strong>
                                    </p>
                                    </div>
                                    
                                    <div class="row" style="margin-top:3%;">
                                        <div class="col-6" style="text-align: center;">
                                            
                                            <p style="font-size:1rem;">Email : <strong>{{  $user->Email }}</strong> 
                                            </p>
                                            <p style="font-size:1rem;">Mobile No. : <strong>{{ $user->Mobile }}</strong>
                                            </p>
                                            <p style="font-size:1rem;">Aadhar : <strong>{{  $user->AADHAAR }}</strong>
                                            </p>
                                            
                                        </div>
                                        <div class="col-6" style="text-align:center;">
                                           
                                            <p style="font-size:1rem;">PAN : <strong>{{ $user->PAN }}</strong>
                                            </p>
                                            <p style="font-size:1rem;">UpiId : <strong>{{   $user->UPIID }}</strong>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div style="text-align: center;"><p style="font-size:1.3rem;margin-bottom: 2%;">Wallet_Balance : <strong>{{   $user->Wallet_Balance  }}</strong>
                                </p></div>
                                <div class="card card-outline-info col-8"
                                    style="padding:2%;background-color: 	#F5FFFA;margin:auto;margin-bottom:1%;">

                                    <div class="table-responsive">
                                        <h5><strong>Withdrawl Transaction</strong></h5>
                                        <table id="example" class="table  table-bordered" style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th  style="paddin:0;">Date/Time</th>
                                                    <th style="paddin:0;">Description</th>
                                                    <th  style="paddin:0;">Amount Withdrawl</th>
                                                    <th  style="paddin:0;">Status</th>
                                                    <th style="paddin:0;">Reference</th>
                                                    <th style="paddin:0;">Remarks</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($wdraw as $w)
                                                    <tr>
                                                        <td >{{ $w->DateTime }}</td>
                                                        <td >{{ $w->Description }}</td>
                                                        <td >{{ $w->Amount }}</td>
                                                        <td >{{ $w->Status }}</td>
                                                        <td >{{ $w->Reference }}</td>
                                                        <td >{{ $w->Remarks }}</td>

                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card card-outline-info col-8"
                                    style="padding:2%;background-color: 	#F5FFFA;margin:auto;margin-bottom:1%;">

                                    <div class="table-responsive">
                                        <h5><strong>Deposits Transaction</strong></h5>
                                        <table id="example" class="table table-sm  table-bordered" style="width:100%">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th >Date/Time</th>
                                                    <th >Description</th>
                                                    <th >Amount Deposits</th>
                                                    <th >Status</th>
                                                    <th >Reference</th>
                                                    <th >Remarks</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($depo as $d)
                                                    <tr>
                                                        <td >{{ $d->DateTime }}</td>
                                                        <td >{{ $d->Description }}</td>
                                                        <td >{{ $d->Amount }}</td>
                                                        <td >{{ $d->Status }}</td>
                                                        <td >{{ $d->Reference }}</td>
                                                        <td >{{ $d->Remarks }}</td>

                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
