<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Company extends Model
{
    public function delete() {
       parent::delete();

    }

        function image(){
          return url('/public/images/') .'/'. $this->image;
        }


}
