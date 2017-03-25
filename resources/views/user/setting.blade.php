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
                        <form class="form form-horizontal">
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"><b>Nama</b></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Masukan nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Alamat</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Masukan alamat"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label"><b>Kota Asal</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Masukan kota asal">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3 ">
                                            <label class="control-label"><b>Level</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="radio radio-inline">
                                              <input type="radio" name="fresh" id="radio5" value="radio5">
                                              <label for="radio5">
                                                  Fresh Graduate
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <input type="radio" name="middle" id="radio6" value="radio6">
                                              <label for="radio6">
                                                  Middle
                                              </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <input type="radio" name="senior" id="radio7" value="radio7">
                                              <label for="radio7">
                                                  Senior
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-3 ">
                                        <label class="control-label"><b>Pengalaman Kerja</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="radio radio-inline">
                                            <input type="radio" name="punya" id="punya">
                                            <label for="punya">
                                              Punya
                                          </label>
                                      </div>
                                      <div class="radio radio-inline">
                                          <input type="radio" name="tidakpunya" id="tidakpunya">
                                          <label for="tidakpunya">
                                              Tidak Punya
                                          </label>
                                      </div>
                                      <div class="radio radio-inline">
                                          <a onclick="tambah_pengalaman()" class="btn btn-xs btn-success" data-toggle="tooltip" title="Tambah Pengalaman"><i class="fa fa-plus"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <div id="field4">
                                  <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Nama Perusahaan</b></label>
                                    <div class="col-md-9">
                                        <input type="text" class="inputtext form-control" placeholder="Masukan nama perusahaan" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Jabatan Kerja Perusahaan</b></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Masukan jabatan anda" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><b>Gaji Kerja Perushaan</b></label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label class="control-label"><b>Upload CV</b></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" placeholder="Masukan kota asal">
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
@section('js')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });

    function tambah_pengalaman(){
        $(
            '<div id="baru">'+          
            '<div class="form-group">'+
            '<label class="col-md-3 control-label"><b>Nama Perusahaan</b></label>'+
            '<div class="col-md-9">'+
            '<input type="text" class="form-control" name="nama_perusahaan_pengalaman[]" placeholder="Masukan nama perusahaan" disabled>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-md-3 control-label"><b>Jabatan Kerja Perusahaan</b></label>'+
            '<div class="col-md-9">'+
            '<input type="text" class="form-control" name="jabatan_pengalaman[]" placeholder="Masukan jabatan anda" disabled>'+
            '</div>'+
            '</div>'+
            '<div class="form-group">'+
            '<label class="col-md-3 control-label"><b>Gaji Kerja Perushaan</b></label>'+
            '<div class="col-md-9">'+
            '<div class="input-group">'+
            '<span class="input-group-addon">Rp</span>'+
            '<input type="text" class="form-control" name="gaji_pengalaman[]" disabled>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'
            ).insertAfter('#field4');
    }

    // document.getElementsByClassName("inputtext").setAttribute('disabled', true);
    // document.getElementsByClassName("inputtext").removeAttribute('disabled');

</script>
@endsection