@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>
            <div class="card">
                <div class="card-body">
<br>
                    <ul class="kako_ul">
                      <li class="kako_li"><h5><a href="{{route('kako.tangen1',0)}}" style="color:#009900;">公衆衛生看護学概論</a> (4問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen2',0)}}" style="color:#009900;">公衆衛生看護方法論Ｉ(個人・家族・グループ支援方法論)</a> (8問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen3',0)}}" style="color:#009900;">公衆衛生看護方法論II(組織・集団・地域支援方法論)</a> (13問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen4',0)}}" style="color:#009900;">対象別公衆衛生看護活動論</a> (29問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen5',0)}}" style="color:#009900;">学校保健・産業保健</a> (8問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen6',0)}}" style="color:#009900;">健康危機管理</a> (9問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen7',0)}}" style="color:#009900;">公衆衛生看護管理論</a> (3問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen8',0)}}" style="color:#009900;">疫学</a> (9問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen9',0)}}" style="color:#009900;">保健統計</a> (7問)</h5></li><hr>
                      <li class="kako_li"><h5><a href="{{route('kako.tangen10',0)}}" style="color:#009900;">保健医療福祉行政論</a> (13問)</h5></li><hr>

                    </ul>

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
