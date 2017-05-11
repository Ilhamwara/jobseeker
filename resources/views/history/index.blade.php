@extends('layouts.master')
@section('content')
<div class="app app-default">
    @include('include.sidebar')
    <div class="app-container">
        @include('include.topbar')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>History</b>
                    </div>
                    <div class="card-body no-padding">
                      <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Age</th>
                                <th class="text-center">Tanggal Gabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection