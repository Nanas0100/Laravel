@extends('layouts.ikenbako')

@section('content')
<script type="text/javascript">
var nend_params = {"media":60889,"site":322106,"spot":953651,"type":1,"oriented":1};
</script>
<script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <h3 style="padding:0 0 2px 5px; font-size:15px; color:silver; padding-left:12px;">{{$name->name}} の意見箱 <small style="margin-left:5px;">-意見や質問をを投稿できます-</small>
</h3>

          @if ($errors->any())
   <div class="alert alert-danger" style="padding-bottom:0;">
       <p>140文字が上限です。</p>
   </div>
@endif
              <form action="{{route('ikenbako.store',$name->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <textarea type="text" placeholder="入力してください" class="text" name="title" style="padding:7px 13px; width:100%; height:140px; border:3px solid #00aebb; border-radius:10px;font-size:16px;font-family:'HuiFontP109';"></textarea>
                  <br>
                  <input type="submit" class="submit" value="決定" style="font-family:'HuiFontP109'; font-size:16px;background:white; width:100%; height:33px; border-radius:10px; margin-top:6px; border:2px solid #00aebb;">
                </form>



            <br><br><br><br><br><br>


            @if(!empty($posts))
              @foreach($posts as $post)
                @if($post->coms)
            <div class="card" style="padding:10px 7px;">
              <div class="image">
                <div style="display:flex;">
                <p style="font-size:13px; border-radius:13px; width:120px;padding:0 7px; color:white; background:red;">{{$post->created_at->format('Y年m月d日')}}</p>
                  </div>
                <a href="{{route('post.title',$post->id)}}" style="color:black;">
                <div style="padding:0 0 0 10px;">
                    <h5 style="padding:5px 10px; color:black;　font-family:'HuiFontP109';">{{$post->title}}</h5>
                  </div>
                  </a>
                    <p></p>
                  </div>
                </div>
                <br>
                @endif
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
