<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Slider extends Model
{
    public function delete() {
       parent::delete();

    }

    function image(){
      return url('/public/sliders/') .'/'. $this->image;
    }




}
