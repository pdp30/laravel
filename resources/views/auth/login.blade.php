<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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
                        <h1 class="login_title">Welcome </h1>
                        <h2 class="login_subtitle">Login your details</h2>
                    </div>
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
                    </ul>
                @endif
                <form method="POST" action="{{ route('login') }}">
               @csrf
                        <div>
                        <input type="hidden" name="_token" value="cQWi1ZwP7NE4z1Po4wZCO6kvl8SsSj6AdnNUBDZp">                                                                        <div class="form-group">
                            <label class="d-block form_label">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group pt-3     ">
                            <label class="d-block form_label">Password</label>
                             <input name="password" type="password" class="pgloginpassword form-control "
                                id="togglePassword" placeholder="Enter your password">
                                <div >   
                            </div>
                        </div>
                        
                        <div class="text-right">
                            <a class="forget_pwd" href="{{ route('login') }}">Forgot Password?</a>
                        </div>
                        <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
                      
                        <div class="form-group mt-5">
                            
                            <input type="submit" class="btn btn-primary btn-block" value="Login">
                  
                        </div>
                        <div class="text-center mt-5">
                            <p class="get_start">Don’t have an account : <a href="{{ route('register') }}">Create a new account</a></p>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   

</body>
</html>