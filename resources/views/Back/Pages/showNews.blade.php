@extends('Back.MasterPage.master')
@section('content')
    <div class="mainPage content-wrapper">
        <section class="content">
            <h1>Show News</h1>
            <br>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            @forelse($newsData as $key=>$data)
            <div class="panel panel-info">
                <div class="panel-heading">  {{$data->title}}</div>
                 <div class="panel-body">
                    <blockquote>
                        <p>{{$data->descriptiom}}
                           </p>
                    </blockquote>
                     Created at :{{$data->created_at}}
                     <div class="panel-footer">

                             <a class="btn btn-sm btn-danger" data-confirm="Are you sure?" rel="nofollow" data-method="delete" href="{{route('delete').'/'.$data->id}}">Delete</a>

                         </div>

                 </div>
            </div>
            @empty
            @endforelse
            {{$newsData->render()}}

        </section>
    </div>
@stop