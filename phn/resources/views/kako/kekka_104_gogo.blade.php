@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>

            <div class="card">
                <div class="card-body">
                  <h4>55問中{{$kekka1->count()}}問正解です。</h4><br>
<h3>正解率</h3>

<p style="font-size:90px;　text-align:center; color:red; padding-bottom:40px;"><b>{{($kekka1->count()/55)*100}}%</b></p>

<a href="{{route('home')}}" class="btn btn-block btn-info" style="background:#00AA00; color:white; border:2px solid #00AA00;">ホームに戻る</a>

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
