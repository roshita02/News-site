@extends('Back.MasterPage.master')
@section('content')
    <div class="mainPage content-wrapper">
        <section class="content">
            <h1>Show users</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
          <table class="table">
              <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Profile Picture</th>
                  <th>Action</th>
              </tr>
              @forelse($userData as $key=>$data)
              <tr>
                  <td>{{++$key}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td><img src="{{URL::to('UserImage/'.$data->image)}}" width="50" alt=""></td>
                  <td>
                      <a href="{{route('delete').'/'.$data->id}}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tr>
                @empty
                @endforelse

          </table>
            {{$userData->render()}}


        </section>
    </div>
@stop