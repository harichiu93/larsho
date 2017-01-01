<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>{{$title}} - Harichiu</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{URL::asset('/public/css/login.css')}}">


</head>

<body>

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
    <h1>LOGIN FORM</h1><span>Code <i class='fa fa-code'></i> by <a href='http://andytran.me'>Chiuchiu</a></span>
</div>
<div class="rerun"><a href="">Rerun Login</a></div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Login</h1>
        <form method="post" action="./login">
            <div class="input-container">
                <input type="text" id="username" name="username" required="required"/>
                <label for="username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="password" name="password" required="required"/>
                <label for="password">Password</label>
                <div class="bar"></div>
            </div>
            {{csrf_field()}}
            <div class="button-container">
                <button><span>Login</span></button>
            </div>
            <div class="footer"><a href="#">Forgot your password?</a></div>
        </form>
    </div>
    <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Register
            <div class="close"></div>
        </h1>
        <form method="post" action="register">
            <div class="input-container">
                <input type="text" id="username" required="required"/>
                <label for="username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="password" required="required"/>
                <label for="#{label}">Password</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
                <input type="password" id="repassword" required="required"/>
                <label for="repassword">Repeat Password</label>
                <div class="bar"></div>
            </div>

            {{csrf_field()}}
            <div class="button-container">
                <button><span>Register</span></button>
            </div>
        </form>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="{{URL::asset('/public/js/login.js')}}"></script>

</body>
</html>
