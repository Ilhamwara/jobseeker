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
                        <b>Form Tambah Pekerjaan</b>
                    </div>
                    <div class="card-body">
                    @include('include.alert')
                        <form class="form form-horizontal" action="{{url('tambah/pekerjaan')}}" method="POST">
                        {{csrf_field()}}
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><b>Judul Pekerjaan</b></label>
                                        <div class="col-md-9">
                                            <input type="text" name="judul" class="form-control" placeholder="Masukan judul pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Bidang Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="bidang" class="form-control" placeholder="Bidang pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Range Gaji</b></label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="number" min="0" value="0" class="form-control" name="gaji_mulai">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <label class="control-label">sampai</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="number" min="0" value="0" class="form-control" name="gaji_sampai">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Level Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control select2" name="level">
                                                <option value="Fresh Garduate">Fresh Garduate</option>
                                                <option value="Middle">Middle</option>
                                                <option value="Senior">Senior</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Lokasi Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="lokasi" class="form-control" placeholder="Masukan lokasi pekerjaan" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Deskripsi Pekerjaan</b></label>
                                            <p class="control-label-help">( Minimal 150 kata )</p>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="keterangan" placeholder="Masukan deskripsi pekerjaan" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection