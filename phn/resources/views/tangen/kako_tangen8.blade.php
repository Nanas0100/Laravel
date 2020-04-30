@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>
@foreach($mondai as $m)
            <div class="card">
                <div class="card-body">
<h7>No.{{$m->number}}</h7>
<br><br>
@if($m->kaisetu==39)
<img src="/images/104_44_gogo.png"><br>
@endif
<br>
<p>{{$m->mondai}}</p>
<br><br>

<form action="{{route('kotae.tangen8',$m->number)}}" mothod="post" style="margin-bottom:0;">
  {{csrf_field()}}
<p>
<input type="radio" name="q1" value="1" style="margin-right:10px;"> {{$m->s1}}
</p>
<p>
<input type="radio" name="q1" value="2" style="margin-right:10px;"> {{$m->s2}}
</p>
<p>
<input type="radio" name="q1" value="3" style="margin-right:10px;"> {{$m->s3}}
</p>
<p>
<input type="radio" name="q1" value="4" style="margin-right:10px;"> {{$m->s4}}
</p>
@if($m->s5!=null)
<p>
<input type="radio" name="q1" value="5" style="margin-right:10px;"> {{$m->s5}}
</p>
@endif
<br><br>
<button class="btn btn-block btn-info" style="background:#00AA00; color:white; border:2px solid #00AA00;">回答</botton>
</from>

                </div>
            </div>
<br>
@endforeach




        </div>
    </div>
</div>
@endsection

<style>
.kako_ul{
  list-style-type:none;
}


</style>
