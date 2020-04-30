@extends('layouts.notifications')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @if(!empty($notification))
                <p style="color:gray; padding-left:8px;">意見箱に投稿されました</p>

                @foreach($notification as $notice)
                <div class="card" style="padding:0; margin:0 0 13px 0;">
                    <div class="card-body" style="padding:0 0 0 17px; margin:0;">

                <h5 style="padding:20px 0; margin:0;"><a href="{{route('notification.check',$notice->id)}}" style="font-family:'HuiFontP109';color:black;">{{$notice->title}}</a> <a href="{{route('notification.delete',$notice->id)}}" style="padding:9px;"><i class="far fa-check-circle"></i></a></h5>

            </div>
      </div>

                @endforeach
                <br>
                {{$notification->links()}}

                @else
                <div class="card" style="padding:0; margin:0;">
                    <div class="card-body" style="padding:0; margin:0;">
                <h4 style="padding:20px 0; margin:0; text-align:center;">コメントはありません</h4>
              </div>
      </div>
                @endif




        </div>
    </div>
</div>

@endsection
