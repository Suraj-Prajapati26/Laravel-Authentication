<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">



<style>
body {font-family: Arial, Helvetica, sans-serif;background-color:#040152;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
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
<div class="container " >
        <div class="row justify-content-md-center">
<div class="col-6" style="margin:2.5% auto">
<form action="{{route('register.post')}}" method="post" id="login-form">
  @csrf
    <div class="imgcontainer">
      <img src="../splashlogo.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container  form-control" >
      <div class="form_group">
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required value={{old('name')}}>
      <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span></div>
    <div class="form_group">

      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required value={{old('email')}}>
      <span class="text-danger">
        @error('name')
            {{$email}}
        @enderror
    </span>
  </div> 

    <div class="form_group">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <span class="text-danger">
        @error('password')
            {{$message}}
        @enderror
    </span>
  </div> 

    <div class="form_group">

      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password" name="confirm" required>
      <span class="text-danger">
        @error('confirm')
            {{$message}}
        @enderror
    </span>
  </div> 
      <button type="submit" id="login-form-submit">Submit</button>
    

    </div>


      
    </div>
</form>
</div>
</div>
</div>
{{-- <script>
const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "admin" && password === "12345") {
        alert("You have successfully logged in.");
        window.open('./dashboard.php');
    } else {
        alert("Wrong user name or password");
    }
})</script> --}}
</body>
</html>

