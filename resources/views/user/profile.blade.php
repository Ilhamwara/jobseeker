@extends('layouts.master')
@section('content')
<div class="app app-default">
    @include('include.sidebar')
    <div class="app-container">
        @include('include.topbar')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body app-heading">
                        <img class="profile-img" src="{{url('images/profile.png')}}">
                        <div class="app-title">
                            <div class="title"><span class="highlight"><b>Scott White</b></span></div>
                            <div class="description"><i><b>PHP</b>, <b>HTML5</b>, <b>JSON</b>, <b>AJAX</b>, <b>CSS3</b>, <b>LARAVEL</b></i></div>
                            <small class="description"><i>JL Madukara Kel.Makasar Kec.Makasar </i></small> <br>
                            <small class="description"><i>Jakarta Timur, Indonesia</i></small> <br><br>
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download CV</a>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero neque perferendis blanditiis itaque. Facere nobis voluptatibus distinctio quasi neque architecto, sit officiis dolorem quae. Officia culpa aperiam exercitationem asperiores ipsum.
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
                    <style>
                        .pengalaman{margin-bottom: 30px;}
                    </style>
                        <div class="pengalaman">
                            <h5><b>PT Megaprimatama</b></h5>
                            <h6>Web Developer</h6>
                            <h6>Gaji - Rp 4.500.000</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis necessitatibus accusamus fugit accusantium molestiae eveniet natus repudiandae cupiditate ut molestias, nesciunt sequi, aperiam architecto minima officia, ad consequuntur nemo.
                            </p>
                        </div>
                        <div class="pengalaman">
                            <h5><b>PT Megaprimatama</b></h5>
                            <h6>Web Developer</h6>
                            <h6>Gaji - Rp 4.500.000</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis necessitatibus accusamus fugit accusantium molestiae eveniet natus repudiandae cupiditate ut molestias, nesciunt sequi, aperiam architecto minima officia, ad consequuntur nemo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection