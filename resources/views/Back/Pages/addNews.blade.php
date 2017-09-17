@extends('Back.MasterPage.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1>Add News</h1>
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
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="sel1">Category</label>
                        <select class="form-control" id="sel1">
                            <option>Politics</option>
                            <option>Sports</option>
                            <option>Entertainment</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <div class="col-md-8">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="8" id="description"></textarea>
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
@stop