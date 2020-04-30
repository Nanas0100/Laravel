@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <a href="https://twitter.com/intent/tweet?url=https://localhost:8000/ikenbako/{{$name->id}}&hashtags=意見箱"  style="font-family:'HuiFontP109';border-radius:5px; padding:15px 25px; background:#00aebb; color:white; font-size:30px" rel="nofollow" class="twitter-link">
            質問を募集する
            </a>
            <br><br><br><br>
            <div class="button-change">
              <a href="#" class="now-left">未回答</a>
              <a href="/nocomment"  class="right">回答済</a>
            </div>
            <br>
            @if(!empty($posts))
              {{$posts->links()}}
              @foreach($posts as $post)
                <div class="card">
                  <div class="box">
                    <p>{{$post->created_at->format('Y年m月d日')}}</p>
                    <h5><a href="{{route('comment',$post->id)}}">{{$post->title}}</a></h5>
                    <a href="{{route('posts.delete',$post->id)}}" class="left">削除</a>
                    <a href="{{route('block',$post->ip)}}" class="right">ブロック</a>
                  </div>
                </div>
                <br>
              @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
