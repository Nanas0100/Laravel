<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kako;
use App\Miss1;
use App\Kaitou;
use App\kaisetu;

class JyakutenController extends Controller
{
  //-------------------弱点-----------------------------------------------------
  public function jyakuten(){

    $m=Miss1::where('user_id',Auth::user()->id)->where('miss','1')->join('kakos','kakos.id','=','miss1s.number')->first();
    $end=Miss1::where('user_id',Auth::user()->id)->where('miss','1')->exists();
    if(!$end){

      return view('home');
    }else{
      return view('jyakuten.jyakuten',compact('m'));
  }
  }

  public function kotae_jyakuten(Request $request,$id){

    $answer=Miss1::where('user_id',Auth::user()->id)->join('kakos','kakos.id','=','miss1s.number')->where('answer',$request->q1)->exists();
    $m=Miss1::where('user_id',Auth::user()->id)->where('miss','1')->join('kakos','kakos.id','=','miss1s.number')->first();
    $kaisetu=kaisetu::where('kaisetus.number',$id)->join('kakos','kaisetus.number','=','kakos.id')->first();

    if($answer==null){
      $a='不正解';
      Miss1::where('user_id',Auth::user()->id)->where('number',$id)->update(['miss'=>'2']);

    }else{
      $a='正解';
      Miss1::where('user_id',Auth::user()->id)->where('number',$id)->delete();
    }

    return view('jyakuten.kotae_jyakuten',compact('a','m','kaisetu'));
  }

  //-------強化問題--------------------------------------
  public function kyouka(){

    $m=Miss1::where('user_id',Auth::user()->id)->where('miss','2')->join('kakos','kakos.id','=','miss1s.number')->first();
    $end=Miss1::where('user_id',Auth::user()->id)->where('miss','2')->exists();
    if(!$end){

      return view('home');
    }else{
      return view('jyakuten.kyouka',compact('m'));
  }
  }

  public function kotae_kyouka(Request $request,$id){

    $answer=Miss1::where('user_id',Auth::user()->id)->join('kakos','kakos.id','=','miss1s.number')->where('answer',$request->q1)->exists();
    $m=Miss1::where('user_id',Auth::user()->id)->where('miss','2')->join('kakos','kakos.id','=','miss1s.number')->first();
    $kaisetu=kaisetu::where('kaisetus.number',$id)->join('kakos','kaisetus.number','=','kakos.id')->first();

    if($answer==null){
      $a='不正解';

    }else{
      $a='正解';
      }

    return view('jyakuten.kotae_kyouka',compact('a','m','kaisetu'));
  }

}
