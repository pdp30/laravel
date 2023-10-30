<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/sass/admin/app.scss','resources/css/admin/style.css','resources/js/app.js','resources/js/jquery.js'])

</head>
<body>
    
    <div class="login">
        <div class="row m-0 h-100">
            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="padding: 0px;" >
                <div class="logo_bg"></div>
                <div class= hih >
                    <img src="../img/rainbow.jpg" alt="Nature" style="width: 700px; height: 611px;" />
                </div>
            </div>
            <div class="col-lg-6 px-0 d-flex align-items-center justify-content-center">
                <div class="px-5 login_section">
                    <div class="text-center pb-5">
            <div class="container">
                <h2>Forgot Password</h2>
                <p>Enter your email address below to reset your password.</p>
                <form method="POST" action="{{ route('forgot-password') }}">
      
                    <input type="email" name="email" placeholder="Email address" required>
                    <br>
                    <button type="button" class="btn btn-primary">Submit</button>
                  
                    <a href="{{ route('login') }}" class="btn btn-outline-dark">Back to home</a>
                </form>
            </div>
        </div>
    </div>
    
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   

</body>
</html>