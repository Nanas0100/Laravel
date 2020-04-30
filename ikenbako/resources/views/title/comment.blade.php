@extends('layouts.iken')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card" style="padding:0; margin:0;">
              <div class="card-body" style="padding:0; margin:0;">
                @if(!empty($title))
                  <img src="/images/{{$title->image}}"　alt="タイトル画像" style="object-fit: contain;
                  padding:0; margin:0;" width="100%" height="100%">
                @else
                  <h4 style="padding:20px 0; margin:0; text-align:center;">投稿はありません</h4>
                @endif
              </div>
          </div>
      　  <div class="twitter" style="padding:0;　margin-top:8px; margin-right:7px;float:right;">
          @if(!empty($comment->com))
        　 <a href="https://twitter.com/intent/tweet?url=https://iken-bako.com/{{$title->id}}&text={{$comment->com}}&hashtags=意見箱"  style="padding-top:0; padding-right:6px; color:#00aebb; font-size:20px" rel="nofollow" class="twitter-link">
        　   <i class="fas fa-share-square"></i>
      　 　 </a>
      　  @endif
    　    </div>
<br><br>
@if(!empty($comment->com))
<div class="card" style="padding:10px 7px;">
  <div class="image">
    <div style="display:flex;">
    <p style="color:#00aebb; font-size:20px; padding:0 20px;">{{$name->name}}</p>
  </div>
      <div style="padding:0 0 0 10px;">
        <h5 style="padding:5px 10px; color:black;font-family:'HuiFontP109';">{{$comment->com}}</h5>
      </div>
      </a>
        @if(!empty(Auth::user()->id))
        <a href="{{route('posts.delete',$title->id)}}" style="float:right; margin:7px 5px 3px 5px; padding:0 6px; color:#00aebb;border:1px solid; border-radius:5px;font-family:'HuiFontP109'; ">削除</a>
        @else
        <p></p>
        @endif
      </div>
    </div>

@else
<h3 style="padding:0 0 2px 5px; font-size:15px; color:silver;">コメントしましょう</h3>

@if ($errors->any())
<div class="alert alert-danger" style="padding-bottom:0;">
<p>140文字が上限です。</p>
</div>
@endif
    <form action="{{route('store.com',$title->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <textarea type="text" placeholder="入力してください" class="text" name="com" style="font-family:'HuiFontP109';font-size:16px;padding:7px 13px; width:100%; height:140px; border:3px solid #00aebb; border-radius:10px;"></textarea>
        <br>
        <input type="submit" class="submit" value="決定" style="font-family:'HuiFontP109'; font-size:16px;background:white; width:100%; height:33px; border-radius:10px; margin-top:6px; border:2px solid #00aebb;">
      </form>
@endif

          <br><br>



            <br><br><br><br><br><br>


            @if(!empty($posts))
              @foreach($posts as $post)

            <div class="card" style="padding:10px 7px;">
              <div class="image">
                <div style="display:flex;">
                <p style="font-size:13px; border-radius:13px; width:105px;padding:0 7px; color:white; background:red;font-family:'HuiFontP109';">{{$post->created_at->format('Y年m月d日')}}</p>
                </div>
                <a href="{{route('comment',$post->id)}}" style="color:black;">
                <div style="padding:0 0 0 10px;">
                    <h5 style="padding:5px 10px; color:black; font-family:'HuiFontP109';">{{$post->title}}</h5>
                  </div>
                  </a>
                    @if(!empty(Auth::user()->id))
                    <a href="{{route('posts.delete',$post->id)}}" style="font-family:'HuiFontP109';color:#00aebb; float:right; margin:7px 5px 3px 5px; padding:0 6px; border:1px solid; border-radius:5px;">削除</a>
                    <a href="{{route('block',$post->ip)}}" style="font-family:'HuiFontP109';color:#00aebb; float:right; margin:7px 5px 3px 5px; padding:0 3px; border:1px solid; border-radius:5px;">ブロック</a>
                    @else
                    <p></p>
                    @endif
                  </div>
                </div>
                <br>
                  @endforeach

                @else
                <div class="card">
                  <div class="image">
                    <h5>投稿はありません</h5>
              </div>
            </div>
            @endif


        </div>
    </div>
</div>

@endsection
