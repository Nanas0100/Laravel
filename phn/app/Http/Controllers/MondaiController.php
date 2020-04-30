<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kako;
use App\Miss1;
use App\Kaitou;
use App\kaisetu;
use App\Tangen;

class MondaiController extends Controller
{
    public function kako(){
      return view('kako.kako');
    }

    public function kako_104_gozen($id){
      if($id=='0'){
        Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午前')->delete();
      }

      $id=(int)$id+1;

      $mondai=Kako::where('kai','104')->where('when','午前')->where('number',$id)->get();
      if($id==55){
        $kekka1=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午前')->where('correct','1')->get();
        $kekka2=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午前')->get();

        return view('kako.kekka_104_gozen',compact('kekka1','kekka2'));
      }else{
      return view('kako.kako_104_gozen',compact('mondai'));
    }
    }

    public function kotae_104_gozen(Request $request,$id){
      $mondai=Kako::where('kai','104')->where('when','午前')->where('number',$id)->get();
      $answer=Kako::where('kai','104')->where('when','午前')->where('number',$id)->where('answer','=',$request->q1)->exists();
      $kaisetu=kaisetu::where('kaisetus.number',$id)->join('kakos','kaisetus.number','=','kakos.id')->first();

      if($answer==null){
        $a='不正解';
        $miss1=new Miss1;
        $miss1->user_id=Auth::user()->id;
        $miss1->number=$id;
        $miss1->save();

        $correct=new Kaitou;
        $correct->user_id=Auth::user()->id;
        $correct->kai='104';
        $correct->when='午前';
        $correct->save();

      }else{

        $a='正解';
        $correct=new Kaitou;
        $correct->user_id=Auth::user()->id;
        $correct->kai='104';
        $correct->when='午前';
        $correct->correct='1';
        $correct->save();
      }

      return view('kako.kotae_104_gozen',compact('a','mondai','kaisetu'));
    }

    public function kekka_104_gozen(){
      $kekka1=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午前')->where('correct','1')->get();
      $kekka2=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午前')->get();


      //Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->delete();

      return view('kako.kekka_104_gozen',compact('kekka1','kekka2'));
    }
//-----------------------104午後-------------------------------------------------

public function kako_104_gogo($id){

if($id=='0'){
  Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午後')->delete();
}

  $id=(int)$id+1;

  $mondai=Kako::where('kai','104')->where('when','午後')->where('number',$id)->get();
  if($id==56){
    $kekka1=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午後')->where('correct','1')->get();
    $kekka2=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午後')->get();

    return view('kako.kekka_104_gogo',compact('kekka1','kekka2'));
  }else{
  return view('kako.kako_104_gogo',compact('mondai'));
}
}

public function kotae_104_gogo(Request $request,$id){
  $mondai=Kako::where('kai','104')->where('when','午後')->where('number',$id)->get();
  $answer=Kako::where('kai','104')->where('when','午後')->where('number',$id)->where('answer','=',$request->q1)->exists();
  $kaisetu=kaisetu::where('kaisetus.number',$id)->join('kakos','kaisetus.number','=','kakos.id')->first();

  if($answer==null){
    $a='不正解';
    $miss1=new Miss1;
    $miss1->user_id=Auth::user()->id;
    $miss1->number=$id;
    $miss1->save();

    $correct=new Kaitou;
    $correct->user_id=Auth::user()->id;
    $correct->kai='104';
    $correct->when='午後';
    $correct->save();

  }else{

    $a='正解';
    $correct=new Kaitou;
    $correct->user_id=Auth::user()->id;
    $correct->kai='104';
    $correct->when='午後';
    $correct->correct='1';
    $correct->save();
  }

  return view('kako.kotae_104_gogo',compact('a','mondai','kaisetu'));
}

public function kekka_104_gogo(){
  $kekka1=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午後')->where('correct','1')->get();
  $kekka2=Kaitou::where('user_id',Auth::user()->id)->where('kai','104')->where('when','午後')->get();



  return view('kako.kekka_104_gogo',compact('kekka1','kekka2'));
}







}
