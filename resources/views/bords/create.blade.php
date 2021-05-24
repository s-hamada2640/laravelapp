@extends('header_footer')

@section('link')
  <link rel="stylesheet" href="{{asset('/css/bords/create.css')}}"/>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('/js/bords/create.js')}}"></script>
@endsection

@section('title','トップページ')

@section('header')
  @parent
@endsection

@section('main')
  <div class='bords-create'>
    <div class='bords-create-sideBar'>
      <div class='bords-create-sideBar-majorItem'>
        @foreach( $big_category as $k )
          @if($flg == $k->id)
            {{ $k->bigCategory }}
          @endif
        @endforeach
      </div>
      @foreach( $small_category as $k )
        <a href="/bords/create" class="bords-create-sideBar-subItem-button">
          <div class='bords-create-sideBar-subItem-item'>
            {{ $k->smallCategory }}
          </div>
        </a>
      @endforeach
    </div>
    <div class='bords-create-mainBar'>
      <div class='bords-create-mainBar-postedContent'>
        <!-- ここを増やす -->
        @foreach( $bords as $k )
            <div class='bords-create-mainBar-postedContent-box'>
              <div class='bords-create-mainBar-postedContent-box-name'>
                  <span>{{ $k->id }}:
                </span>
                <span>{{ $k->name }}</span>
                <span>{{ $k->created_at }}</span>
              </div>
              <div class='bords-create-mainBar-postedContent-box-comment'>
                <p>{{ $k->comment }}</p>
                <span id='reply-comment'>返信</span></br> 
                <div id='reply-commentBox'>
                  <form action="" method="post" name="replyComment">
                    @csrf
                    <input type="text" name="replyComment" />
                    <input type="submit" value="返信" />
                  </form>
                </div> 
                <span id='reply-display'>返信コメントの表示</span>
              </div>  
            </div>
        @endforeach
        <div class='bords-create-mainBar-pageRing'>
          ページリンク
          {{ $bords->links() }}
        </div>
      </div>
      <div class='bords-create-mainBar-postForm'>
        <form action="" method="post" name="mainComment">
          @csrf
          <p>名前</p>
          <input type="text" name="name" />
          <p>タイトル</p>
          <input type="text" name="title" />
          <p>カテゴリー</p>
          <select name="big_categories_id">
            <option disabled selected value>大項目</option>
              @foreach( $big_category as $k )
                <option value="{{ $k->id }}">{{ $k->bigCategory }}</option>
              @endforeach
          </select>
          <select name="small_categories_id">
            <option disabled selected value>小項目</option>
              @foreach( $small_category as $k )
                <option value="{{ $k->id }}">{{ $k->smallCategory }}</option>
              @endforeach
          </select>
          <p>コメント</p>
          <textarea name="comment" rows="3" cols="80"></textarea></br>
          <input type="submit" value="送信" />
        </form>
      </div>
    </div>
  </div>
@endsection


@section('footer')
  @parent
@endsection