<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/bootstrap.css')}}">
    <style>
        .loginPage{
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="col-sm-6 col-sm-offset-3">

<div class="loginPage panel panel-primary" >
    <div class="panel-heading" align="center"> <strong class="">Login</strong>

    </div>
    <div class="panel-body">
        <form action="{{route('login')}}" method="post" class="form-horizontal" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">
                        <label class="">
                            <input type="checkbox" class="">Remember me</label>
                    </div>
                </div>
            </div>
            <div class="form-group last">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success btn-sm">Log in</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>


</body>
</html>