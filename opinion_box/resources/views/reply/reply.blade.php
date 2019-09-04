@extends('layouts.replys')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <div class="card" style="margin:10px 0;">
            <a href="{{route('post.title',$reply->post_id)}}">
              <div class="card-body" style="text-align:center; padding:6px; border:3px solid skyblue;">
          戻る
          </div>
          </a>
          </div>
          <br>

          <div class="card" style="padding:0; margin:0;">
              <div class="card-body" style="padding:0; margin:0;">
                @if(!empty($reply))
                <img src="/images/{{$reply->image}}"　alt="コメント画像" style="object-fit: contain;
                  padding:0; margin:0;" width="100%" height="100%">
                @else
                <h4 style="padding:20px 0; margin:0; text-align:center;">投稿はありません</h4>
                @endif
                  </div>
          </div>

          <br><br>

          @if(!empty($reply->reply))
              <div class="card" style="padding:10px 12px; margin:3px;">
                  <div class="card-body" style="padding:0; margin:0;">
                    <p style="font-size:13px; border-radius:13px; padding:0 7px; color:gray;"><i class="fas fa-reply" style="padding-right:10px;"></i>{{$reply->created_at->format('Y/m/d - H時i分')}}</p>
                <h5 style="padding:0 7px 0 20px; margin:0;">{{$reply->reply}}</h5>
               </div>
          </div>
            <br>
            @else
            <div class="card" style="padding:10px 12px; margin:3px;">
                <div class="card-body" style="padding:0; margin:0;">
                  <h5 style="padding:0 7px 0 20px; margin:0;">投稿はありません</h5>
             </div>
            </div>
                @endif

            <br><br><br><br><br><br>




        </div>
    </div>
</div>

@endsection
