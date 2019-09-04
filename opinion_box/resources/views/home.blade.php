@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<br>

          <h3 style="padding:0 0 2px 5px; font-size:15px; color:silver;">投稿する</h3>

          @if ($errors->any())
   <div class="alert alert-danger" style="padding-bottom:0;">
       <p>140文字が上限です。</p>
   </div>
@endif

              <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <textarea type="text" placeholder="入力してください" class="text" name="title" style="padding:7px 13px; width:100%; height:140px; border:3px solid skyblue; border-radius:10px;"></textarea>
                  <br>
                  <input type="submit" class="submit" value="決定" style="background:white; width:100%; height:33px; border-radius:10px; margin-top:6px; border:2px solid skyblue;">
                </form>

                  <br><br><br>


                <h3 style="padding:0 0 2px 5px; font-size:15px; color:silver;">最新の投稿</h3>
                <div class="card" style="padding:0; margin:0;">
                    <div class="card-body" style="padding:0; margin:0;">
                      @if(!empty($new))
                      <a href="{{route('post.title',$new->id)}}">
                      <img src="/images/{{$new->image}}" alt="タイトル画像" style="object-fit:contain; padding:0; margin:0;" width="100%" height="100%">

                      </a>
                      @else
                      <h5 style="padding:20px 0; margin:0; text-align:center;">投稿はありません</h5>
                      @endif
                        </div>

                </div>
                <div class="twitter" style="padding:0;　margin-top:10px; margin-right:10px; float:right;">
                　<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                </div>


            <br><br><br><br><br><br><br>


            @if(!empty($posts))

              @foreach($posts as $post)

            <div class="card" style="padding:10px 7px;">
              <div class="image">
                <div style="display:flex;">
                <p style="border-radius:13px; width:130px; padding:0 7px; color:white; background:red;">{{$post->created_at->format('Y年m月d日')}}</p>
                <p style="color:gray; padding-left:15px;"><i class="far fa-comment-dots" style="padding-right:5px;"></i>{{$post->coms->count()}}</p>
              </div>

                    <h5 style="padding:5px 10px; color:black;"><a href="{{route('post.title',$post->id)}}" style="color:black;">{{$post->title}}</a></h5>
                      <a href="{{route('posts.delete',$post->id)}}" style="float:right; margin:7px 5px 3px 5px; padding:1px 3px; border:1px solid; border-radius:5px;">削除する</a>
                  </div>
                </div>
                <br>
                  @endforeach

                  {{$posts->links()}}


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
