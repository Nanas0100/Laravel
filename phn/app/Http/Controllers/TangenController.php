<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kako;
use App\Miss1;
use App\Kaitou;
use App\kaisetu;
use App\Tangen;

class TangenController extends Controller
{
  //-------------単元別-------------------------------------------------------------
  public function tangen(){
    return view('tangen.tangen');
  }

  public function kako_tangen1($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','1')->where('number',$id)->get();
    if($id==5){

      return view('home');
    }else{
    return view('tangen.kako_tangen1',compact('mondai'));
  }
  }

  public function kotae_tangen1(Request $request,$id){
    $m=Tangen::where('kate','1')->where('number',$id)->first();
    $answer=Tangen::where('kate','1')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','1')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen1',compact('a','m','kaisetu'));
  }




  public function kako_tangen2($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','2')->where('number',$id)->get();
    if($id==9){

      return view('home');
    }else{
    return view('tangen.kako_tangen2',compact('mondai'));
  }
  }

  public function kotae_tangen2(Request $request,$id){
    $m=Tangen::where('kate','2')->where('number',$id)->first();
    $answer=Tangen::where('kate','2')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','2')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen2',compact('a','m','kaisetu'));
  }




  public function kako_tangen3($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','3')->where('number',$id)->get();
    if($id==14){

      return view('home');
    }else{
    return view('tangen.kako_tangen3',compact('mondai'));
  }
  }

  public function kotae_tangen3(Request $request,$id){
    $m=Tangen::where('kate','3')->where('number',$id)->first();
    $answer=Tangen::where('kate','3')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','3')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen3',compact('a','m','kaisetu'));
  }






  public function kako_tangen4($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','4')->where('number',$id)->get();
    if($id==37){

      return view('home');
    }else{
    return view('tangen.kako_tangen4',compact('mondai'));
  }
  }

  public function kotae_tangen4(Request $request,$id){
    $m=Tangen::where('kate','4')->where('number',$id)->first();
    $answer=Tangen::where('kate','4')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','4')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen4',compact('a','m','kaisetu'));
  }






  public function kako_tangen5($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','5')->where('number',$id)->get();
    if($id==8){

      return view('home');
    }else{
    return view('tangen.kako_tangen5',compact('mondai'));
  }
  }

  public function kotae_tangen5(Request $request,$id){
    $m=Tangen::where('kate','5')->where('number',$id)->first();
    $answer=Tangen::where('kate','5')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','5')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen5',compact('a','m','kaisetu'));
  }





  public function kako_tangen6($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','6')->where('number',$id)->get();
    if($id==10){

      return view('home');
    }else{
    return view('tangen.kako_tangen6',compact('mondai'));
  }
  }

  public function kotae_tangen6(Request $request,$id){
    $m=Tangen::where('kate','6')->where('number',$id)->first();
    $answer=Tangen::where('kate','6')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','6')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen6',compact('a','m','kaisetu'));
  }






  public function kako_tangen7($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','7')->where('number',$id)->get();
    if($id==4){

      return view('home');
    }else{
    return view('tangen.kako_tangen7',compact('mondai'));
  }
  }

  public function kotae_tangen7(Request $request,$id){
    $m=Tangen::where('kate','7')->where('number',$id)->first();
    $answer=Tangen::where('kate','7')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','7')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen7',compact('a','m','kaisetu'));
  }







  public function kako_tangen8($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','8')->where('number',$id)->get();
    if($id==10){

      return view('home');
    }else{
    return view('tangen.kako_tangen8',compact('mondai'));
  }
  }

  public function kotae_tangen8(Request $request,$id){
    $m=Tangen::where('kate','8')->where('number',$id)->first();
    $answer=Tangen::where('kate','8')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','8')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen8',compact('a','m','kaisetu'));
  }








  public function kako_tangen9($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','9')->where('number',$id)->get();
    if($id==8){

      return view('home');
    }else{
    return view('tangen.kako_tangen9',compact('mondai'));
  }
  }

  public function kotae_tangen9(Request $request,$id){
    $m=Tangen::where('kate','9')->where('number',$id)->first();
    $answer=Tangen::where('kate','9')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','9')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();


    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen9',compact('a','m','kaisetu'));
  }








  public function kako_tangen10($id){

    $id=(int)$id+1;

    $mondai=Tangen::where('kate','10')->where('number',$id)->get();
    if($id==14){

      return view('home');
    }else{
    return view('tangen.kako_tangen10',compact('mondai'));
  }
  }

  public function kotae_tangen10(Request $request,$id){
    $m=Tangen::where('kate','10')->where('number',$id)->first();
    $answer=Tangen::where('kate','10')->where('number',$id)->where('answer','=',$request->q1)->exists();
    $kaisetu=Tangen::where('kate','10')->where('tangens.number',$id)->join('kaisetus','kaisetus.id','=','tangens.kaisetu')->first();

    if($answer==null){
      $a='不正解';
      $miss1=new Miss1;
      $miss1->user_id=Auth::user()->id;
      $miss1->number=$kaisetu->id;
      $miss1->save();

    }else{
      $a='正解';

    }

    return view('tangen.kotae_tangen10',compact('a','m','kaisetu'));
  }

}
