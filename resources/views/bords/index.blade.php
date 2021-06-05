@extends('header_footer')

@section('link')
  <link rel="stylesheet" href="{{asset('/css/bords/index.css')}}"/>
@endsection

@section('title','トップページ')

@section('header')
  @parent
@endsection

@section('main')
  <div class='bords-index'>
    <div class="bords-index-main">
      <div class="bords-index-main-topText">
        <p>育児について書き込む掲示板です。</br>興味あるカテゴリを選択してください。</p>
      </div>
      <div class="bords-index-main-itemBox">
        @foreach( $big_category as $k )
        <a href="/bords/create?bigflg={{ $k->id }}" class="bords-index-main-itemBox-button">
          <div class="bords-index-main-itemBox-item">
            {{ $k->bigCategory }}
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection



@section('footer')
  @parent
@endsection