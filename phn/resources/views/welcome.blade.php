@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<br>
            <div class="card">
                <div class="card-body" style="text-align:center; ">
                  <h1 style="padding-bottom:70px;">保健師国家試験過去問題が<br>解けるサイト</h1>

                    <h4 style="color:#009900;">このサイト</h4><br>
                     <p>保健師国家試験問題を解くことができます。</p>
                     <p style="padding-bottom:50px;">アカウント登録するとすぐに問題を解くことができます。</p>

                     <img src="/images/home.jpg" alt="メニュー画像" style="padding-bottom:70px;">
                     <img src="/images/mondai1.jpeg" alt="問題画像" style="padding-bottom:70px;">
                     <img src="/images/mondai2.jpeg" alt="解答画像" style="padding-bottom:115px;">



                     <h4 style="color:#009900;">弱点問題とは</h4><br>
                      <p style="padding-bottom:105px;">弱点問題は、過去問や分野別問題で１回間違えた問題です。正解すると弱点問題から消え、不正解だと強化問題として扱われます。</p>

                      <h4 style="color:#009900;">強化問題とは</h4><br>
                       <p style="padding-bottom:105px;">強化問題は、弱点で間違えた問題です。２度間違えた問題はまた間違える可能性があるので、正解してもずっと強化問題として解くことができます。</p>

                       <h4 style="color:#009900;">アカウント登録</h4><br>
                        <p>個人の弱点問題・強化問題を記録するために、アカウント登録する必要があります。</p>
                        <p style="padding-bottom:115px; margin-top:40px;"><a href="/register" style="color:white; background:#009900; padding:15px; font-size:15px; border-radius:10px;">アカウント登録する</a></p>
                        <br>

                        <script type="text/javascript">
                      var nend_params = {"media":60889,"site":322312,"spot":953839,"type":1,"oriented":1};
                      </script>
                      <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>

                </div>
            </div>
<br>



        </div>
    </div>
</div>
@endsection

<style>
img{
width:70%;
}
</style>
