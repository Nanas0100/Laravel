<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;


class Com extends Model
{
  public $incrementing = false;

   protected static function boot()
   {
       parent::boot();

       static::creating(function ($model) {
           $model->{$model->getKeyName()} = Uuid::generate()->string;
       });
   }
  public function posts()
 {
     return $this->belongsTo('App\Post','id');
 }
}
