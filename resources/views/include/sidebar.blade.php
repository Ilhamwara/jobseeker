<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    {{-- <a class="sidebar-brand" href="#"><b>Admin</b></a> --}}
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
    <div class="hidden-sm hidden-xs">
      <img src="{{asset('images/logo-unas.png')}}" class="img-responsive" style="border-radius: 100px; width: 130px; margin: 25px auto;">
    </div>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="@if(Request::is('dashboard')) active @endif">
        <a href="{{url('dashboard')}}">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Beranda</div>
        </a>
      </li>
      <li class="@if(Request::is('pekerja')) active @endif">
        <a href="{{url('pekerja')}}">
          <div class="icon">
            <i class="fa fa-group" aria-hidden="true"></i>
          </div>
          <div class="title">Pekerja</div>
        </a>
      </li>
      <li class="dropdown @if(Request::is('perusahaan')) active @endif">
        <a href="{{url('perusahaan')}}">
          <div class="icon">
            <i class="fa fa-building" aria-hidden="true"></i>
          </div>
          <div class="title">Perusahaan</div>
        </a>
        {{-- <div class="dropdown-menu">
          <ul>
            <li><a href="">Daftar Perusahaan</a></li>
            <li><a href="{{url('tambah/perusahaan')}}">Tambah Perusahaan</a></li>
          </ul>
        </div> --}}
      </li>
      <li class="@if((Request::is('tambah/pekerjaan')) || (Request::is('daftar-pekerjaan')) ) active @endif dropdown">
        <a>
          <div class="icon">
            <i class="fa fa-child" aria-hidden="true"></i>
          </div>
          <div class="title">Pekerjaan</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li><a href="{{url('daftar-pekerjaan')}}">Daftar Pekerjaan</a></li>
            <li><a href="{{url('tambah/pekerjaan')}}">Tambah Pekerjaan</a></li>
          </ul>
        </div>
      </li>
      <li class="@if(Request::is('broadcast')) active @endif">
        <a href="{{url('broadcast')}}">
          <div class="icon">
            <i class="fa fa-send-o" aria-hidden="true"></i>
          </div>
          <div class="title">Broadcast Email</div>
        </a>
      </li>
      <li class="@if(Request::is('history')) active @endif">
        <a href="{{url('history')}}">
          <div class="icon">
            <i class="fa fa-history" aria-hidden="true"></i>
          </div>
          <div class="title">History</div>
        </a>
      </li>
    </ul>
  </div>
</aside>