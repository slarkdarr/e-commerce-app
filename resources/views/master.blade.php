<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Project</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  {{View::make('header')}}
  @yield('content')
  {{View::make('footer')}}

  <script>
    $(document).ready(function() 
    {
      $("button").click(function()
      {
        alert("Logged In!");
      })
    })
  </script>
</body>
<style>
  .custom-login {
    height: 500px;
    padding-top: 100px;
  }

  .carousel-control-prev {
    filter: invert(100%);
  }

  .carousel-control-next {
    filter: invert(100%);
  }

  img.slider-img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    height: 400px !important;
  }

  .custom-product {
    height: 500px;
  }

  .slider-caption {
    background-color: #35443585 !important;
  }

  .trending-image {
    height: 100px;
  }

  .trending-item {
    float: left;
    width: 33.3%;
  }

  .trending-wrapper {
    margin: 30px;
  }

  .trending-title {
    margin-bottom: 30px;
  }

  .detail-img {
    height: 200px;
  }
</style>
</html>