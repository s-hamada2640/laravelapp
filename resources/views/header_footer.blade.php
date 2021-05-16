<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/header_footer.css')}}"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  @yield('link')
  <title>@yield('title')</title>
</head>

<body>

@section('header')
  <div class='header'>
    ヘッダー
  </div>
@show


  <div class="main">
    @yield('main')
  </div>


@section('footer')
  <div class='footer'>
    フッター
    copyright 2021 〇〇
  </div>
@show

@yield('script')

</body>
</html>