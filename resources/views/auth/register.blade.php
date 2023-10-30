<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/sass/admin/app.scss','resources/css/admin/style.css','resources/js/app.js','resources/js/jquery.js'])
  </head>
  <style>
      .container {
            margin-top: 50px;
        }
    
  </style>
<body> 
     
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="../img/rainbow.jpg" alt="Left Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Register Form</h2>
                @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<form  class="user" action="{{route('register')}}" method="post">
    @csrf
 
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            </div>
        </div>
    </div>
   <div class="container" style="text-align: center;">
                  <p class="text">Already have an account? <a href="{{ route('login') }}">Sign in</a>.</p>
                  <p>By creating an account you agree to our Terms & Privacy.</p>
 </div>
           
             
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
                document.getElementById("registerForm").addEventListener("submit", function(e) {
    e.preventDefault();
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

   
});
              </script>


    
</body>
</html>