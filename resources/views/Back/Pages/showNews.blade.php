@extends('Back.MasterPage.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h1>Display News</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @forelse($newsData as $key=>$data)
            <div class="panel panel-primary">
                 <div class="panel-body">
                     {{$data->title}}
                    <blockquote>
                        <p>{{$data->descrition}}</p>
                    </blockquote>
                 </div>
            </div>  {{$userData->render()}}
            @empty
            @endforelse

        </section>
    </div>
@stop