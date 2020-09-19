<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;

class Product extends Model
{
    public function delete() {
       parent::delete();

    }

    public function isNew(){
      $created = new Carbon($this->created_at);
      $now = Carbon::now();
      $difference = ($created->diff($now)->days < 7);
      return $difference;
    }


    public function categories()
    {
       return $this->belongsToMany('App\Category');
    }

    function price(){
      return number_format($this->price , 0 , '.' , '') . '$';
    }
    function url(){
      return url('/product/') .'/'. $this->id;
    }

    function image(){
      return url('/public/images/') .'/'. $this->image;
    }




}
