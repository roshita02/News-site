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
        </section>
    </div>
@stop