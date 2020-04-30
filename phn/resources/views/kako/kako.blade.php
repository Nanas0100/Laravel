@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>
            <div class="card" style="text-align:center;">
                <div class="card-body">


                      <h4 style="color:#009900;"><b>第104回</b></h4><br>


                      <h4><a href="{{route('kako.104gozen',0)}}" style="color:#009900;">午前</a></h4>
                      <h4><a href="{{route('kako.104gogo',0)}}" style="color:#009900;">午後</a></h4>



                </div>
            </div>
<br>





        </div>
    </div>
</div>
@endsection
