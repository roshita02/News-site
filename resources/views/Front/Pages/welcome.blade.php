@extends('Front.MasterPage.masterPage')
@section('content')
    {{--<div class="container">--}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://thesuperseal.com/wp-content/uploads/2016/12/SlideOptima2-1024x400.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://thesuperseal.com/wp-content/uploads/2016/12/SlideOptima2-1024x400.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://thesuperseal.com/wp-content/uploads/2016/12/SlideOptima2-1024x400.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <h1>Top News</h1><hr>
                </div>
            </div>
        </div>
    @foreach($newsData as $news)
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="">
                        <h3 class="post-title">
                            {{$news->title}}
                        </h3>
                        <h8 class="post-subtitle">
                            {{substr($news->descriptiom,0,100)}}.....

                            <a href="#" class="read_more">Read More</a><br/>

                        </h8>
                    </a>

                    <p class="post-meta">Posted at: {{$news->created_at}}
                        <br>
                   Category: {{$news->category}}
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Pager -->

    <div class="col-lg-8 col-md-10 mx-auto">
        {{$newsData->render()}}
    </div>
