@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>

            <div class="card">
                <div class="card-body">

<br>
<p>{{$m->mondai}}</p>
<br><br>
@if($a=='正解')
<h3 style="color:red;">⭕️ {{$a}}</h3>
@else
<h3 style="color:blue;">❌ {{$a}}</h3>
@endif
<br>
<p>
<input type="radio" name="q1" value="{{$m->s1}}" style="margin-right:10px;"> {{$m->s1}}
</p>
<p>
<input type="radio" name="q1" value="{{$m->s2}}" style="margin-right:10px;"> {{$m->s2}}
</p>
<p>
<input type="radio" name="q1" value="{{$m->s3}}" style="margin-right:10px;"> {{$m->s3}}
</p>
<p>
<input type="radio" name="q1" value="{{$m->s4}}" style="margin-right:10px;"> {{$m->s4}}
</p>
@if($m->s5!=null)
<p>
<input type="radio" name="q1" value="{{$m->s5}}" style="margin-right:10px;"> {{$m->s5}}
</p>
@endif
<br><br>
<h4>解答・解説</h4>
<p style="padding-top:7px;">答えは</p>
<p style="color:red;">
@if($m->answer=='1')
{{$m->s1}}
@elseif($m->answer=='2')
{{$m->s2}}
@elseif($m->answer=='3')
{{$m->s3}}
@elseif($m->answer=='4')
{{$m->s4}}
@elseif($m->answer=="5")
{{$m->s5}}
@endif
</p>
<br>
<p>{{$kaisetu->kaisetu}}</p>
<br><br>
<a href="{{route('jyakuten')}}" class="btn btn-block btn-info" style="background:#00AA00; color:white; border:2px solid #00AA00;">次へ</a>


                </div>
            </div>
<br>





        </div>
    </div>
</div>
@endsection

<style>
.kako_ul{
  list-style-type:none;
}


</style>
