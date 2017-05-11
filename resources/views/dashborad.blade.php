@extends('layouts.master')
@section('css')
<style>
  /* Carousel Fading slide */
  .carousel-fade .carousel-inner { background: #000; }
  .carousel-fade .carousel-control { z-index: 2; }  
  .carousel-fade .item {
    opacity: 0;
    -webkit-transition-property: opacity;
    -moz-transition-property: opacity;
    -o-transition-property: opacity;
    transition-property: opacity;
  }
  .item{
    height: 500px; width: 100%;
  }
  .carousel-fade .next.left,
  .carousel-fade .prev.right,
  .carousel-fade .item.active { opacity: 1; }

  .carousel-fade .active.left,
  .carousel-fade .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
  }


  /* Safari Fix */
  @media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  }




  /* Carousel Control custom */
  .carousel-control .control-icon {
    font-size: 48px;
    height: 30px;
    margin-top: -15px;
    width: 30px;
    display: inline-block;
    position: absolute;
    top: 50%;
    z-index: 5;
  }
  .carousel-control .prev { margin-left:  -15px;  left: 50%; } /* Prev */
  .carousel-control .next { margin-right: -15px; right: 50%; } /* Next */


  /* Removing BS background */
  .carousel .control-box { opacity: 0; }
  a.carousel-control.left  { left: 0; background: none; border: 0;}
  a.carousel-control.right { right: 0; background: none; border: 0;}


  /* Animation */
  .control-box, a.carousel-control, .carousel-indicators li {
    -webkit-transition: all 250ms ease;
    -moz-transition: all 250ms ease;
    -ms-transition: all 250ms ease;
    -o-transition: all 250ms ease;
    transition: all 250ms ease;   
    /* hardware acceleration causes Bootstrap carousel controlbox margin error in webkit */
    /* Assigning animation to indicator li will make slides flicker */
  } 


  /* Hover animation */
  .carousel:hover .control-box { opacity: 1; }
  .carousel:hover a.carousel-control.left { left: 15px; }
  .carousel:hover a.carousel-control.right { right: 15px; }  


  /* Carouse Indicator */
  .carousel-indicators li.active,
  .carousel-indicators li { border: 0; }

  .carousel-indicators li {
    background: #666;
    margin: 0 3px;
    width: 12px;
    height: 12px;
  }

  .carousel-indicators li.active {
    background: #fff;
    margin: 0 3px;
  }
</style>
@endsection
@section('content')
<div class="app app-default">
  @include('include.sidebar')<!-- SIDEBAR -->

  <div class="app-container">
    @include('include.topbar')<!-- TOPBAR -->

    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <!-- Slide 1 : Active -->
            <div class="item active">
              <img src="{{asset('images/banner/banner1.jpg')}}">
              <div class="carousel-caption">
                <h1><b>Selamat Datang</b></h1>
                {{-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p> --}}
              </div><!-- /.carousel-caption -->
            </div><!-- /Slide1 -->

            <!-- Slide 2 -->
            <div class="item ">
              <img src="{{asset('images/banner/banner2.jpg')}}">
              <div class="carousel-caption">
                <h1><b>Web Portal Alumni Job Seeker</b></h1>
                {{-- <p>Etiam porta sem malesuada magna mollis euismod.</p> --}}
              </div><!-- /.carousel-caption -->
            </div><!-- /Slide2 -->

            <!-- Slide 3 -->
            <div class="item ">
              <img src="{{asset('images/banner/banner3.jpeg')}}">
              <div class="carousel-caption">
                <h1><b>Apply CV mu di perusahaan terbaik</b></h1>
                {{-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p> --}}
              </div><!-- /.carousel-caption -->
            </div><!-- /Slide3 -->

            <!-- Slide 4 -->
            <div class="item ">
              <img src="{{asset('images/banner/banner4.jpg')}}">
              <div class="carousel-caption">
                <h1><b>Tunjukan Skill Kamu</b></h1>
                {{-- <p>Pellentesque ornare sem lacinia quam venenatis vestibulum.</p> --}}
              </div><!-- /.carousel-caption -->
            </div><!-- /Slide4 -->

          </div><!-- /.carousel-inner -->


          <!-- Controls -->
          <div class="control-box">
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- /.control-box -->
        </div><!-- /#myCarousel -->
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a class="card card-banner card-green-light">
          <div class="card-body">
            <i class="icon fa fa-cloud-upload fa-4x"></i>
            <div class="content">
              <div class="title"><b>Apply CV</b></div>
              <div class="value"><span class="sign"></span>420</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a class="card card-banner card-blue-light">
          <div class="card-body">
            <i class="icon fa fa-building-o fa-4x"></i>
            <div class="content">
              <div class="title"><b>Perusahaan</b></div>
              <div class="value"><span class="sign"></span>2453</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a class="card card-banner card-yellow-light">
          <div class="card-body">
            <i class="icon fa fa-user-plus fa-4x"></i>
            <div class="content">
              <div class="title"><b>Pekerja</b></div>
              <div class="value"><span class="sign"></span>50</div>
            </div>
          </div>
        </a>
      </div>
    </div>

   {{--  <div class="row">
      <div class="col-md-12">
       <div class="card">
        <div class="card-header">
          <div class="card-title">Timeline</div>
        </div>
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div> --}}


</div>
</div>
@endsection