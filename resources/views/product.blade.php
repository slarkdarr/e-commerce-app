@extends('master')
@section('content')
<div class="custom-product">
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    @foreach ($product as $item)
      <div class="carousel-item {{$item['id']==1 ? 'active':''}}">
        <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}">
          <div class="carousel-caption slider-caption">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['description']}}</p>
          </div>
        </a>
      </div>
    @endforeach
    </a>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

  </div>
  <div class="trending-wrapper">
    <h3 class="trending-title">Trending Products</h3>
    <div class="">
      @foreach ($product as $item)
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
              <h3>{{$item['name']}}</h3>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection