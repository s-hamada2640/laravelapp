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
    <div class="bords-index-itemBox">
      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
          カテゴリー大分類
        </div>        
      </a>

      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
        カテゴリー大分類
        </div>        
      </a>

      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
        カテゴリー大分類
        </div>        
      </a>

      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
          test
        </div>        
      </a>
      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
          testaaaaaaaaaaaa
        </div>        
      </a>

      <a href="/bords/create" class="bords-index-itemBox-button">
        <div class="bords-index-itemBox-item">
        testaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
        </div>        
      </a>
    </div>
  </div>
@endsection



@section('footer')
  @parent
@endsection