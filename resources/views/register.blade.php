@extends('layouts.master')
@section('content')
<div class="app app-default">
    <div class="app-container app-login">
        <div class="flex-center">
            <div class="app-header">
            </div>
            <div class="app-body">
                <div class="app-block">
                    <div class="app-form">
                        <div class="form-suggestion text-center">
                            <b>
                                Register Disini
                            </b>
                        </div>
                        @include('include.alert')
                        <form action="{{url('register')}}" method="POST">
                            {{csrf_field()}}
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <i aria-hidden="true" class="fa fa-paper-plane"></i>
                                </span>
                                <input class="form-control" name="nama" placeholder="Fullname" required type="text"></input>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i aria-hidden="true" class="fa fa-envelope"></i>
                                </span>
                                <input class="form-control" placeholder="Email" required name="email" type="email"></input>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">
                                    <i aria-hidden="true" class="fa fa-key"></i>
                                </span>
                                <input class="form-control" placeholder="Password" required name="password" type="password"></input>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success btn-submit">Register</button>
                            </div>
                            <div class="form-line">
                                <div class="title">
                                    OR
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary btn-submit" href="{{url('/')}}">
                                    Login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
