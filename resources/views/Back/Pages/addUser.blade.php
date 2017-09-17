@extends('Back.MasterPage.master')
@section('content')
    <div class="mainPage content-wrapper">
        <section class="content">
            <h1>Add user</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr>
            <form action="{{route('add')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">E-mail address</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Profile Picture</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="cpassword" class="form-control">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <button class="btn btn-success">Add user</button>
                </div>
            </div>
            </form>
        </section>
    </div>
@endsection