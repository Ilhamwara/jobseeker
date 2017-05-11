@extends('layouts.master')
@section('content')
<div class="app app-default">
    @include('include.sidebar')
    <div class="app-container">
        @include('include.topbar')
        <div class="row">

        @foreach($comp as $data)
            <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                      <div class="text-center">
                          <a href="">
                              <img class="img-circle img-responsive" src="{{asset('images/Build.png')}}" width="140" style="margin: auto;">
                          </a>
                          <br>
                          <a href=""><b>{{$data->nama}}</b></a> <br>
                          <small><i>{{$data->alamat}}</i></small>
                      </div>
                      <hr>
                      <div>
                        {{$data->about}}
                    </div>                      
                </div>
            </div>               
        </div>
        @endforeach
      
    </div>
</div>
</div>
@endsection