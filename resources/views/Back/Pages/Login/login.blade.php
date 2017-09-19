<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/bootstrap.css')}}">
    <style>
        .loginPage{
            margin-top: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="loginPage panel panel-primary">
                <div class="panel-heading">Login to The Dashboard</div>
                <div class="panel-body">
                    <form action="{{route('login')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group input-group">
                            <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="enter email"
                                   aria-describedby="sizing-addon2">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="enter password"
                                   aria-describedby="sizing-addon2">
                        </div>
                        <div class="form-group">

                            <input type="checkbox" name="remember" id="rem">
                            <label for="rem">Remember Me</label>

                            <div class="form-group input-group pull-right">
                                <button class="btn btn-success">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


</body>
</html>