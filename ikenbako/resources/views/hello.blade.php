@extends('layouts.welcome')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body" style="background:#00aebb; text-align:center;">


                  <div class="content" style="margin-top:12px; padding-top:0;">
                      <div class="title m-b-md" style="color:white;"><h1 style="font-family:'HuiFontP109'; font-size:55px;"><i class="fas fa-box-open" style="padding-right:20px;"></i>意見箱</h1></div>

                      
                          <br><br><br><br>
                          <div class="explain2" >
                            <p style="color:white;">登録/ログインはこちら！</p>
                          </div>

                        <div style="margin:0 auto; border:2px solid white; border-radius:5px; padding:8px 20px; width:230px; background:#55acee; display:flex;">
                          <i class="fab fa-twitter" style="padding:12px 0 12px 5px; color:white;"></i>
                          <a href="/login/twitter"  class="btn btn-default btn-md" style="color:white; text-decoration:none;">Twitterで登録/ログイン</a>
                        </div>
                        <br><br><br><br>


                          <div class="explain" style="color:white; margin:0 35px;">
                            <p>意見箱は、SNSで匿名の意見を募集できるサービスです。</p>
                          </div>

                          <div class="explain1" style="padding:55px 20px 15px 20px; margin:20px 5px; border-radius: 5px; border:3px solid white;">
                            <h3 style="font-size:50px; color:white;"><i class="fab fa-twitter-square"></i>　<i class="fas fa-arrow-right"></i>　<i class="fas fa-users"></i></h3>
                            <p style="font-family:'HuiFontP109'; color:white; padding:0 0 16px 0">SNSで意見を募集しましょう！</p>
                          </div>

                          <div class="explain1" style="padding:55px 20px 15px 20px; margin:20px 5px; border-radius: 5px; border:3px solid white;">
                            <h3 style="font-size:50px; color:white;"><i class="fas fa-users"></i>　<i class="fas fa-arrow-right"></i>　<i class="fas fa-box-open"></i></h3>
                            <p style="font-family:'HuiFontP109';color:white; padding:0 0 16px 0">みんなに意見してもらいましょう！</p>
                          </div>

                          <div class="explain1" style="padding:55px 20px 15px 20px; margin:20px 5px; border-radius: 5px; border:3px solid white;">
                            <h3 style="font-size:50px; color:white;"><i class="fas fa-user"></i>　<i class="fas fa-arrow-right"></i>　<i class="fas fa-users"></i></h3>
                            <p style="font-family:'HuiFontP109';color:white; padding:0 0 16px 0">集まった意見に対して返信しましょう！</p>
                          </div>
                          <br>
                          <br>
                          <br>
                          <div class="explain2" >
                            <p style="color:white;">登録/ログインはこちら！</p>
                          </div>

                          <div style="margin:0 auto; border:2px solid white; border-radius:5px; padding:8px 20px; width:230px; background:#55acee; display:flex;">
                            <i class="fab fa-twitter" style="padding:12px 0 12px 5px; color:white;"></i>
                            <a href="/login/twitter"  class="btn btn-default btn-md" style="color:white; text-decoration:none;">Twitterで登録/ログイン</a>
                          </div>

<br><br><br><br><br>


                  </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
