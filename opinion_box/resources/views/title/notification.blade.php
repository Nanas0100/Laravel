@extends('layouts.notifications')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                @if(!empty($notification))
                <p style="color:gray; padding-left:8px;">通知</p>

                @foreach($notification as $notice)
                <div class="card" style="padding:0; margin:0 0 8px 0;">
                    <div class="card-body" style="padding:0 0 0 17px; margin:0;">

                <h5 style="padding:20px 0; margin:0;"><a href="{{route('notification.check',$notice->id)}}" style="color:black;">{{$notice->title}}</a> <a href="{{route('notification.delete',$notice->id)}}" style="padding:15px;"><i class="far fa-check-circle"></i></a></h5>
                <div style="padding:0 8px 0 0;">
                <p><i class="far fa-comment-dots" style="padding-right:12px;"></i><a href="{{route('notification.check',$notice->id)}}" style="color:gray;">{{$notice->com}}</a></p>
              </div>
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
