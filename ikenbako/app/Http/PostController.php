<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Post;
use App\Com;
use Auth;
use App\Ip;
use App\User;


class PostController extends Controller
{
  public function index($id){
    $title=Post::where('id',$id)->first();
    $name=User::where('id',$title->user_id)->first();
    $comment=Com::where('post_id',$id)->first();
    $posts=Post::where('id','!=',$id)->where('user_id',$title->user_id)->orderBy('created_at','desc')->paginate(5);

    if(Auth::check()){
    $notification=Post::where('user_id','=',Auth::user()->id)
      ->join('coms','coms.post_id','=','posts.id')
      ->where('posts.status',0)
      ->orderBy('created_at','desc')
      ->get();
    }else {
      $notification=null;
      }

      return view('title.title',compact('title','name','posts','comment','notification'));
      }

      public function ikenbako($id){
          $name=User::where('id',$id)->first();
        $posts=Post::where('user_id',$id)->where('comment',1)->orderBy('created_at','desc')->paginate(5);

        if(Auth::check()){
        $notification=Post::where('user_id','=',Auth::user()->id)
          ->join('coms','coms.post_id','=','posts.id')
          ->where('posts.status',0)
          ->orderBy('created_at','desc')
          ->get();
        }else {
          $notification=null;
          }

        return view('title.ikenbako',compact('name','posts','notification'));
      }

      public function iken_store(Request $request,$id){
        $request->validate([
           'title'=>'required|max:140'
       ]);

       $get_ip=request()->ip();
       $blocked_ip=Ip::where('ip',$get_ip)->first();
       if(!empty($blocked_ip)){
         return redirect()->back();
       }

       $title_text=$request->title;

       $fileName=str_random(20).'.'.'jpeg';
       $img=Image::make(public_path('images/title.jpeg'));

       $title_mb_length=mb_strlen($title_text, 'UTF-8');

       if($title_mb_length<106){
       $max_len = 15;
       $title=insertStr4($title_text, "\n",$max_len);
     }else{
       $max_len = 20;
       $title=insertStr4($title_text, "\n",$max_len);

     }


       if ($title_mb_length < 16) {
         $img->text($title,1300,700,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
            } elseif ($title_mb_length < 70) {
         $img->text($title,1300,800,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
            } elseif ($title_mb_length < 76) {
         $img->text($title,1300,950,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
      } elseif ($title_mb_length < 106) {
              $img->text($title,1300,1100,function($font){
              $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
              $font->align('center');
              $font->size(130);
             });

           }  elseif ($title_mb_length < 121) {
                    $img->text($title,1300,880,function($font){
                    $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
                    $font->align('center');
                    $font->size(110);
                   });

                 }else {

              $img->text($title,1300,950,function($font){
              $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
              $font->align('center');
              $font->size(110);
             });

            }

         Image::make($img)->save(public_path('images/'.$fileName));

       $post=new Post;
       $post->user_id=$id;
       $post->title=$title_text;
       $post->image=$fileName;
       $post->ip=request()->ip();
       $post->save();

         return redirect()->back();
      }


      public function store(Request $request){
        $request->validate([
           'title'=>'required|max:140'
       ]);

       $get_ip=request()->ip();
       $blocked_ip=Ip::where('ip',$get_ip)->first();
       if(!empty($blocked_ip)){
         return redirect()->back();
       }

       $title_text=$request->title;

       $fileName=str_random(20).'.'.'jpeg';
       $img=Image::make(public_path('images/title.jpeg'));

       $title_mb_length=mb_strlen($title_text, 'UTF-8');

       if($title_mb_length<106){
       $max_len = 15;
       $title=insertStr4($title_text, "\n",$max_len);
     }else{
       $max_len = 20;
       $title=insertStr4($title_text, "\n",$max_len);

     }


       if ($title_mb_length < 16) {
         $img->text($title,1300,700,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
            } elseif ($title_mb_length < 70) {
         $img->text($title,1300,800,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
            } elseif ($title_mb_length < 76) {
         $img->text($title,1300,950,function($font){
         $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
         $font->align('center');
         $font->size(150);
        });
      } elseif ($title_mb_length < 106) {
              $img->text($title,1300,1100,function($font){
              $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
              $font->align('center');
              $font->size(130);
             });

           }  elseif ($title_mb_length < 121) {
                    $img->text($title,1300,880,function($font){
                    $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
                    $font->align('center');
                    $font->size(110);
                   });

                 }else {

              $img->text($title,1300,950,function($font){
              $font->file(public_path('fonts/HuiFont29/HuiFont29.ttf'));
              $font->align('center');
              $font->size(110);
             });

            }

         Image::make($img)->save(public_path('images/'.$fileName));

       $post=new Post;
       $post->user_id=Auth::user()->id;
       $post->title=$title_text;
       $post->image=$fileName;
       $post->ip=request()->ip();
       $post->save();

       return redirect()->back();
      }


}
