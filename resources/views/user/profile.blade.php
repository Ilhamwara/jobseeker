@extends('layouts.master')
@section('content')
<style>
    .pengalaman{margin-bottom: 30px;}
</style>
<div class="app app-default">
    @include('include.sidebar')
    <div class="app-container">
        @include('include.topbar')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body app-heading">
                        <img class="profile-img" src="{{url('images/user.png')}}">
                        <div class="app-title">
                            <div class="title"><span class="highlight"><b>{{$user->name}}</b></span></div>
                            <div class="description"><i><b>{{$user->grade}}</b></i></div>
                            <small class="description"><i>{{$user->alamat}} </i></small> <br><br>
                            <a href="{{asset('upload/'.$user->cv)}}" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Tentang saya</b>
                    </div>
                    <div class="card-body">
                        <p>
                            {{$user->about}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Pengalaman</b>
                    </div>
                    <div class="card-body">
                        <div class="pengalaman">
                            <h5><b>{{$user->perusahaan}}</b></h5>
                            <h6>{{$user->jabatan}}</h6>
                            <h6>Gaji - Rp {{number_format($user->gaji)}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection