<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/header_footer.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  @yield('link')
  <title>@yield('title')</title>
</head>

<body>
  <div class="footer_fixed">

    @section('header')
      <header>
        ヘッダー
      </header>
    @show


      <div class="main">
        @yield('main')
      </div>


    @section('footer')
      <footer>
        フッター
        copyright 2021 〇〇
      </footer>
    @show
    
    @yield('script')
  </div>
</body>
</html>