@extends('layouts.iken')

@section('content')
<br>
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

          <div class="twitter" style="padding:0;margin-top:10px; margin-right:7px; float:right;">
          　<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
          </div>
<br>
          <br><br>

          {{$comment->links()}}


              @foreach($comment as $com)
              <div class="card" style="padding:10px 12px; margin:3px;">
                  <div class="card-body" style="padding:0; margin:0;">
                    @if(Auth::check())
                    <p style="font-size:13px; border-radius:13px; padding:0 7px; color:gray;"><i class="far fa-comment-dots" style="padding-right:9px;"></i>{{$com->created_at->format('Y/m/d - H時i分')}}</p>
                    <a href="{{route('resp.com',$com->id)}}" style="color:black;">
                 <p style="padding:0 7px 9px 20px; margin:0;">{{$com->com}}
                   @if(!empty($com->reply))
                   <i class="fas fa-reply" style="color:gray; padding-left:4px;"></i>
                   @endif
                 </p>

                 </a>
                    @else
                    <p style="font-size:13px; border-radius:13px; padding:0 7px; color:gray;"><i class="far fa-comment-dots" style="padding-right:9px;"></i>{{$com->created_at->format('Y/m/d - H時i分')}}</p>
                    <a href="{{route('reply.com',$com->id)}}" style="color:black;">
                <p style="padding:0 7px 9px 20px; margin:0;">{{$com->com}}
                  @if(!empty($com->reply))
                <i class="fas fa-reply" style="color:gray; padding-left:4px;"></i>
                @endif
              </p>

                </a>
                    @endif

                @if(Auth::check())
                <a href="{{route('block',$com->ip)}}" style="font-size:12px; float:right; margin:7px 1px 2px 5px; padding:0 2px; border:1px solid; border-radius:5px;">ブロック</a>
                @endif
              </div>
      </div>
                @endforeach



          <br>


          <h3 style="padding:0 0 2px 5px; font-size:15px; color:silver;">コメント</h3>

          @if ($errors->any())
   <div class="alert alert-danger" style="padding-bottom:0;">
       <p>140文字が上限です。</p>
   </div>
@endif
              <form action="{{route('store.com',$title->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <textarea type="text" placeholder="入力してください" class="text" name="com" style="padding:7px 13px; width:100%; height:110px; border:3px solid skyblue; border-radius:10px;"></textarea>
                  <br>
                  <input type="submit" class="submit" value="決定" style="background:white; width:100%; height:33px; border-radius:10px; margin-top:6px; border:2px solid skyblue;">
                </form>



            <br><br><br><br><br><br>


            @if(!empty($posts))
              @foreach($posts as $post)

            <div class="card" style="padding:10px 7px;">
              <div class="image">
                <div style="display:flex;">
                <p style="font-size:13px; border-radius:13px; width:120px;padding:0 7px; color:white; background:red;">{{$post->created_at->format('Y年m月d日')}}</p>
                <p style="color:gray; padding-left:15px;"><i class="far fa-comment-dots" style="padding-right:5px;"></i>{{$post->coms->count()}}</p>
            </div>
                <a href="{{route('post.title',$post->id)}}" style="color:black;">
                <div style="padding:0 0 0 10px;">
                    <h5 style="padding:5px 10px; color:black;">{{$post->title}}</h5>
                  </div>
                  </a>
                    @if(!empty(Auth::user()->id))
                    <a href="{{route('posts.delete',$post->id)}}" style="float:right; margin:7px 5px 3px 5px; padding:1px 3px; border:1px solid; border-radius:5px;">削除する</a>
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
