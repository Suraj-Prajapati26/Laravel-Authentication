<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">



    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #040152;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #040152;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }


        .imgcontainer {
            text-align: center;
            /* margin: 24px 0 12px 0; */
        }

        img.avatar {
            width: 100%;
            /* border-radius: 100%; */
        }

        .container {
            padding: 16px;

        }

        span.psw {
            float: right;
            /* padding-top: 16px; */
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="row justify-content-md-center">
            @if (Session::has('success'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
            <div class="col-6" style="margin:2.5% auto">
                <div class="alert alert-info">
                    <p>Enter the valid registered Email id in the box!!!</p>
                    <p>The <strong> Password Reset link</strong> will send to your email address, through which you can reset your password..</p>
                </div>
                <form action="{{route('password.email')}}" method="post" id="login-form">
                    @csrf

                    

                    <div class="container  form-control">
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter Registered Email" name="email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        
                        <button type="submit" id="login-form-submit">Send Password reset Link</button>

                        </div>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>
