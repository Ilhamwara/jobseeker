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
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Umur</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $data)
                            <tr>
                                <td class="text-center">{{$data->name}}</td>
                                <td class="text-center">{{$data->email}}</td>
                                <td class="text-center">{{$data->alamat}}</td>
                                <td class="text-center">{{$data->umur}}</td>
                                <td class="text-center">
                                    <a href="{{url('delete/profile/'.$data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus user ini ?')">Hapus</a>
                                    <a href="{{url('profile/'.$data->id)}}" class="btn btn btn-sm btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection