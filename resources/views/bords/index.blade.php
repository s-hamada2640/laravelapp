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
    @foreach( $big_category as $k )
        <a href="/bords/create?flg={{ $k->id }}" class="bords-index-itemBox-button">
          <div class="bords-index-itemBox-item">
          {{ $k->bigCategory }}
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection



@section('footer')
  @parent
@endsection