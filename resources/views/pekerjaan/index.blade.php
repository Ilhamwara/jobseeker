@extends('layouts.master')
@section('content')
<style>
    .pengalaman{margin-bottom: 30px;}
</style>
<div class="app app-default">
    @include('include.sidebar')
    <div class="app-container">
        @include('include.topbar')
        @forelse($job as $data)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>{{$data->judul}}</b></div>
                    <div class="card-body">
                        <div class="app-title">
                            <div class="description"><i><b>Level {{$data->level}}</b></i></div>
                            <div class="description"><i><b>{{$data->bidang}}</b></i></div>
                            <div class="description"><i><b>Range Gaji {{$data->gaji_mulai}} - {{$data->gaji_sampai}}</b></i></div>
                            <div class="description"><i><b>{{$data->lokasi}}</b></i></div>
                            @if(Auth::user()->level == 'member')
                                <a href="{{asset('apply')}}" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Apply</a>
                            @endif
                        </div>
                        <br>
                        <p>
                            {{$data->keterangan}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Belum ada job saat ini</b></div>
                </div>
            </div>
        </div>
        @endforelse
        <div class="text-center">
            {{$job->render()}}
        </div>
        

        @endsection