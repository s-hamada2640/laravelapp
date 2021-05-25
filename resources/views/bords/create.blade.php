@extends('header_footer')

@section('link')
  <link rel="stylesheet" href="{{asset('/css/bords/create.css')}}"/>
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
          @if($bigflg == $k->id)
            {{ $k->bigCategory }}
          @endif
        @endforeach
      </div>
        @foreach( $small_category as $k )
          <a href="/bords/create?bigflg={{$bigflg}}?smallflg={{$k->id}}" class="bords-create-sideBar-subItem-button">
            <div class='bords-create-sideBar-subItem-item'>
              {{ $k->smallCategory }}
            </div>
          </a>
        @endforeach
      </div>
    <div class='bords-create-mainBar'>
      <div class='bords-create-mainBar-postedContent'>
        <!-- ここを増やす -->
        @if(empty($smallflg))
          @foreach( $bigbords as $bord )        
            @if($bigflg == $bord->big_categories_id)
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
                      <input type="text" name="replyComment" />
                      <input type="submit" value="返信" />
                    </form>
                  </div> 
                  <span id='reply-display'>返信コメントの表示</span>
                </div>
              </div>
            @endif
          @endforeach
          <div class='bords-create-mainBar-pageRing'>
            ページリンク
            {{ $bigbords->appends($flg)->links() }}
          </div>
        @elseif(!empty($smallflg))
          @foreach( $smallbords as $bord )        
            @if($smallflg == $bord->small_categories_id)
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
                      <input type="text" name="replyComment" />
                      <input type="submit" value="返信" />
                    </form>
                  </div> 
                  <span id='reply-display'>返信コメントの表示</span>
                </div>
              </div>
            @endif
          @endforeach
          <div class='bords-create-mainBar-pageRing'>
            ページリンク
            {{ $smallbords->appends($flg)->links() }}
          </div>
        @endif
      </div>
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
            タイトル：カテゴリー
            @if($errors->has('title'))
              {{ $errors->first('title' )}}
            @endif
            @if($errors->has('big_categories_id'))
              {{ $errors->first('big_categories_id')}}
            @endif
            @if($errors->has('small_categories_id'))
              {{ $errors->first('small_categories_id')}}
            @endif          
          </p>
          <input type="text" name="title" />
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
          <p>
            コメント
            @if($errors->has('comment'))
              {{ $errors->first('comment' )}}
            @endif          
          </p>
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