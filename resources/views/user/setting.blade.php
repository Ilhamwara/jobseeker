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
                        <b>Form Setting</b>
                    </div>
                    <div class="card-body">
                    @include('include.alert')
                        <form class="form form-horizontal" action="{{url('setting')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><b>Nama</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Masukan nama" name="nama" value="{{$user->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><b>Email</b></label>
                                        <div class="col-md-9">
                                            <input type="emial" class="form-control" placeholder="Masukan nama" name="email" value="{{$user->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Alamat</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Masukan alamat">{{$user->alamat}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Tentang Saya</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="about" id="" cols="30" rows="10" class="form-control" placeholder="Masukan alamat">{{$user->about}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Kota Asal</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Masukan kota asal" name="kota" value="{{$user->kota}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Umur</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="number" min="0" class="form-control" name="umur" value="{{$user->umur}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3 ">
                                            <label class="control-label"><b>Grade</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select name="grade" class="inputtext form-control">
                                              <option value="Fresh Graduate">Fresh Graduate</option>
                                              <option value="Middle">Middle</option>
                                              <option value="Senior">Senior</option>
                                            </select>
                                      </div>
                                  </div>
                              <div id="field4">
                              <div class="form-group">
                                <label class="col-md-3 control-label"><b><i>Perusahaan terakhir anda bekerja</i></b></label>
                              </div>
                              <br>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Nama Perusahaan</b></label>
                                    <div class="col-md-9">
                                        <input type="text" class="inputtext form-control" placeholder="Masukan nama perusahaan" name="perusahaan" value="{{$user->perusahaan}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Jabatan Kerja Perusahaan</b></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Masukan jabatan anda" name="jabatan" value="{{$user->jabatan}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Gaji Kerja Perushaan</b></label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" min="0" value="{{$user->gaji}}" name="gaji">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label"><b>Upload CV</b></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="cv" class="form-control">
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
@section('js')

@endsection