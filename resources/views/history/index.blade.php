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
                        <b>List Pekerja</b>
                    </div>
                    <div class="card-body no-padding">
                      <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Age</th>
                                <th class="text-center">Tanggal Gabung</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">Ashton Cox</td>
                                <td class="text-center">San Francisco</td>
                                <td class="text-center">66</td>
                                <td class="text-center">2009/01/12</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile')}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin me-nonaktifkan user ini ?')">Non Aktif</a>
                                    <a href="{{url('profile')}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
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