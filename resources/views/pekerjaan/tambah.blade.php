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
                        <form class="form form-horizontal">
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><b>Judul Pekerjaan</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Masukan judul pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Bidang Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Bidang pekerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Range Gaji</b></label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <label class="control-label">sampai</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <span class="input-group-addon">Rp</span>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3 ">
                                            <label class="control-label"><b>Level Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="checkbox3">
                                                <label for="checkbox3">
                                                    Fresh Graduate
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="checkbox4">
                                                <label for="checkbox4">
                                                    Middle
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="checkbox5">
                                                <label for="checkbox5">
                                                    Senior
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Lokasi Pekerjaan</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="select2">
                                                <option value="">Jakarta Timur</option>
                                                <option value="">Jakarta Selatan</option>
                                                <option value="">Jakarta Barat</option>
                                                <option value="">Jakarta Utara</option>
                                                <option value="">Jakarta Pusat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Deskripsi Pekerjaan</b></label>
                                            <p class="control-label-help">( Minimal 150 kata )</p>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" placeholder="Masukan deskripsi pekerjaan" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-default">Cancel</button>
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