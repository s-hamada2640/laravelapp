@extends('header_footer')

@section('link')
  <link rel="stylesheet" href="{{asset('/css/bords/create.css')}}"/>
@endsection

@section('script')
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
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
        <input type="text" name="freeword_search" style="width:485px">
        <input type="submit" value="フリーワード検索" style="margin-left:5px; padding:0px 6px">
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
                  <p>{{ $bord->title }}</p>
                  <p>{{ $bord->comment }}</p>
                  <span class='reply-comment'>返信する</span></br> 
                  <div class='reply-commentBox'>
                    <form action="" method="post" name="replyComment">
                      @csrf
                      <input type="text" size="5"  placeholder="名前" name="name" />
                      <input type="text" size="50" placeholder="コメント(必須)" name="comment" />
                      <!-- 現在選択中のカテゴリIDを送付する必要がある -->
                      <input type="hidden" name="bords_id" value="{{ $bord->id }}">
                      <input type="submit" name="reply" value="返信" style="padding :0px 6px; margin-left:5px"/>
                    </form>
                  </div> 
                  <span class='reply-display'>返信コメントの表示</span>
                    @foreach( $replies as $reply)
                      @if( $reply->bords_id == $bord->id)
                        名前：{{ $reply->name }}
                        {{ $reply->comment }}
                      @endif
                    @endforeach
              </div>
            </div>
          @endforeach
        <div class='bords-create-mainBar-pageRing'>
          {{ $bords->appends($flg)->links() }}
        </div>
      </div>
      <!-- コメント投稿フォーム（返信は別） -->
      @if( !empty($smallflg))
        <div class='bords-create-mainBar-postForm'>
          <form action="" method="post" name="mainComment">
            @csrf
            <div>
              <p>
                名前
                @if($errors->has('name'))
                {{ $errors->first('name' )}}
                @endif          
              </p>
              <input type="text" name="name" />
            </div>
            <div>
              <p>
                タイトル
                @if($errors->has('title'))
                {{ $errors->first('title' )}}
                @endif     
              </p>
              <input type="text" name="title" />
            </div>
            <div>
              <p>
                コメント
                @if($errors->has('comment'))
                {{ $errors->first('comment' )}}
                @endif          
              </p>
              <textarea name="comment" rows="3" cols="80"></textarea>
            </div>
            <input type="hidden" name="big_categories_id" value="{{ $bigflg }}">
            <input type="hidden" name="small_categories_id" value="{{ $smallflg }}">
            <input type="submit" name="bord" value="送信" style="padding :0px 6px"/>
          </form>
        </div>
      @endif
    </div>
  </div>
@endsection


@section('footer')
  @parent
@endsection