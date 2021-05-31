@extends('header_footer')

@section('link')
  <link rel="stylesheet" href="{{asset('/css/bords/create.css')}}"/>
@endsection

@section('script')
  <!-- <script type="text/javascript" src="{{asset('/js/bords/create.js')}}"></script> -->
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
          @if($bigflg == $k->id)
            {{ $k->bigCategory }}
          @endif
        @endforeach
      </div>
        @foreach( $small_category as $k )
          <a href="/bords/create?bigflg={{$bigflg}}&smallflg={{$k->id}}" class="bords-create-sideBar-subItem-button">
            <div class='bords-create-sideBar-subItem-item'>
              {{ $k->smallCategory }}
            </div>
          </a>
        @endforeach
      </div>
    <div class='bords-create-mainBar'>
      <form action="" method="get" class="freeword-search-form">
        <input type="hidden" name="bigflg" value="{{$bigflg}}">
        @if(!empty($smallflg))
          <input type="hidden" name="smallflg" value="{{$smallflg}}">
        @endif      
        <input type="text" name="freeword_search" size="110"><input type="submit" value="フリーワード検索">
      </form>
      <div class='bords-create-mainBar-postedContent'>
        <!-- ここを増やす -->
          @foreach( $bords as $bord )
            <div class='bords-create-mainBar-postedContent-box'>
              <div class='bords-create-mainBar-postedContent-box-name'>
                  <span>{{ $bord->id }}:
                </span>
                <span>{{ $bord->name }}</span>
                <span>{{ $bord->created_at }}</span>
                @foreach( $big_category as $k)
                  @if($bord->big_categories_id == $k->id)
                    <span>{{ $k->bigCategory }}</span>
                  @endif
                @endforeach
                @foreach( $small_category as $k)
                  @if($bord->small_categories_id == $k->id)
                    <span>{{ $k->smallCategory }}</span>
                  @endif
                @endforeach
              </div>
              <div class='bords-create-mainBar-postedContent-box-comment'>
                  <p>{{ $bord->comment }}</p>
                  <span id='reply-comment'>返信</span></br> 
                  <div id='reply-commentBox'>
                    <form action="" method="post" name="replyComment">
                      @csrf
                      <input type="text" size="5"  placeholder="名前(必須)" name="replyName" />
                      <input type="text" size="50" placeholder="コメント(必須)" name="replyComment" />
                      <!-- 現在選択中のカテゴリIDを送付する必要がある -->
                      <input type="hidden" name="bords_id" value="{{ $bord->id }}">
                      <input type="submit" value="返信" />
                    </form>
                  </div> 
                  <span id='reply-display'>返信コメントの表示</span>
              </div>
            </div>
          @endforeach
        <div class='bords-create-mainBar-pageRing'>
          ページリンク
          {{ $bords->appends($flg)->links() }}
        </div>
      </div>
      <!-- コメント投稿フォーム（返信は別） -->
      <div class='bords-create-mainBar-postForm'>
        <form action="" method="post" name="mainComment">
          @csrf
          <p>
            名前
            @if($errors->has('name'))
              {{ $errors->first('name' )}}
            @endif          
          </p>
          <input type="text" name="name" />
          <p>
            タイトル
            @if($errors->has('title'))
              {{ $errors->first('title' )}}
            @endif     
          </p>
          <input type="text" name="title" />
          <p>
            コメント
            @if($errors->has('comment'))
              {{ $errors->first('comment' )}}
            @endif          
          </p>
          <textarea name="comment" rows="3" cols="80"></textarea></br>
          <input type="hidden" name="big_categories_id" value="{{ $bigflg }}">
          <input type="hidden" name="small_categories_id" value="{{ $smallflg }}">
          <input type="submit" value="送信" />
        </form>
      </div>
    </div>
  </div>
@endsection


@section('footer')
  @parent
@endsection