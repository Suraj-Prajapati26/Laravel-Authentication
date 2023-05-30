<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.min.css" rel="stylesheet" />
    @include('include.head_link')

</head>

<body>
    @include('include.header')

    @include('include.sidebar')
    <div class="page-wrapper">

        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Change Password</h4>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="container-fluid" style="margin:auto;">
            <div class="row">
                <div class="col-sm-12" style="margin:auto;">
                    <div class="white-box" style="padding:1% auto 5%;">

                        <div class="row justify-content-md-center">
                            <div class=" alert alert-warning" style="padding:.5% .5% 0;">
                                <h4>After Succession, This page will redirect you to the LOGIN page....</h4>
                            </div>
                            <div class="card card-outline-info col-6" style="padding:5%;background-color: 	#F5FFFA;">

                                <form class="form" action="{{ route('updatepassword') }}" method="post">
                                    @csrf
                                    <div>
                                        @if (session('status'))
                                            <div class="alert alert-scuccess" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @elseif(Session::has('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <label for="inputPasswordOld">Current Password</label>
                                            <input type="password" class="form-control" id="inputPasswordOld"
                                                name="current" required="">
                                            <span class="form-text small text-muted">
                                                Ener Your Current Password.
                                            </span>
                                            @if ($errors->has('current'))
                                                <span class="text-danger">{{ $errors->first('current') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPasswordNew">New Password</label>
                                            <input type="password" class="form-control" id="inputPasswordNew"
                                                name="New_password" required="">
                                            <span class="form-text small text-muted">
                                                Type Your New Password
                                            </span>
                                            @if ($errors->has('current'))
                                                <span class="text-danger">{{ $errors->first('New_password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPasswordNewVerify">Confirm Password</label>
                                            <input type="password" class="form-control" name="Confirm_password"
                                                id="inputPasswordNewVerify" required="">
                                            <span class="form-text small text-muted">
                                                To confirm, type the new password again.
                                            </span>
                                            @if ($errors->has('current'))
                                                <span
                                                    class="text-danger">{{ $errors->first('Confirm_password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group row" style="padding:5%;">
                                            <div class="col-6"><button type="submit"
                                                    class="btn btn-success btn-block ">Change</button>
                                            </div>
                                            <div class="col-6"><a href="{{ route('dashboard') }}"><button
                                                        type="button"
                                                        class="btn btn-danger btn-block">Cancel</button></a>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('include.footer')
</body>

</html>
