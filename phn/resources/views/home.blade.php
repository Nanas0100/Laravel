@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>
            <div class="card">
                <div class="card-body" style="text-align:center; ">

                    <h4><a href="{{route('kako')}}" style="color:#009900;">過去問題</a></h4>
                </div>
            </div>
<br>
<div class="card">
    <div class="card-body" style="text-align:center; ">

        <h4 style="color:#009900;"><a href="{{route('tangen')}}" style="color:#009900;">単元別問題</a></h4>
    </div>
</div>
<br>
            <div class="card">
                <div class="card-body"　style="text-align:center;">

                    <h4 style="color:#009900;"><a href="{{route('jyakuten')}}" style="color:#009900;">弱点問題</a></h4>
                </div>
            </div>
<br>
            <div class="card">
                <div class="card-body"　style="text-align:center;">

                    <h4 style="color:#009900;"><a href="{{route('kyouka')}}" style="color:#009900;">強化問題</a></h4>
                </div>
            </div>

            <!-- admax -->
<script src="//adm.shinobi.jp/s/124ea367d7c85c8a5d00a58c5bb5da56"></script>
<!-- admax -->

        </div>
    </div>
</div>
@endsection
