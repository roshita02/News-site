@extends('Back.MasterPage.master')
@section('content')
    <div class="mainPageManage content-wrapper">
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><i class="fa fa-newspaper-o"></i> Add News</h1>
                        <hr>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif


                        <form action="{{route('addnews')}}" method="post" enctype="multipart/form-data" >
                            <div class="col-md-8">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="name">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="sel1">Category</label>
                                    <select class="form-control" id="sel1" name="category">
                                        <option>Politics</option>
                                        <option>Sports</option>
                                        <option>Entertainment</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="dsc">Description</label>
                                    <textarea name="descriptiom" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="img">News Image</label>
                                    <input type="file" class="btn btn-default" name="image">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Add News</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </div>



@endsection

