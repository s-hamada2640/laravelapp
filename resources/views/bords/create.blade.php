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
        大項目
      </div>
      <a href="/bords/index" class="bords-create-sideBar-subItem-button">
        <div class='bords-create-sideBar-subItem-item'>
          小項目
        </div>
      </a>
      <a href="/bords/index" class="bords-create-sideBar-subItem-button">
        <div class='bords-create-sideBar-subItem-item'>
          小項目
        </div>
      </a>
    </div>

    <div class='bords-create-mainBar'>
      <div class='bords-create-mainBar-postedContent'>
        <!-- ここを増やす -->
        <div class='bords-create-mainBar-postedContent-box'>
          <div class='bords-create-mainBar-postedContent-box-name'>
            <span>2:
            </span>
            <span>名前</span>
            <span>時間</span>
          </div>
          <div class='bords-create-mainBar-postedContent-box-comment'>
            <p>コメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああ</p>
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
        <div class='bords-create-mainBar-postedContent-box'>
          <div class='bords-create-mainBar-postedContent-box-name'>
            <span>1:
            </span>
            <span>名前</span>
            <span>時間</span>
          </div>
          <div class='bords-create-mainBar-postedContent-box-comment'>
            <p>コメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああコメントああああああ</p>
            <span id='reply-comment'>返信</span></br> 
            <span id='reply-display'>返信コメントの表示</span>
          </div>        
        </div>
      </div>

      <div class='bords-create-mainBar-pageRing'>
        ページリング
      </div>
  
      
      <div class='bords-create-mainBar-postForm'>
        <form action="" method="post" name="mainComment">
          @csrf
          <p>名前</p>
          <input type="text" name="name" />
          <p>コメント</p>
          <textarea name="comment" rows="9" cols="80"></textarea></br>
          <input type="submit" value="送信" />
        </form>
      </div>
      
    </div>

  </div>
@endsection


@section('footer')
  @parent
@endsection