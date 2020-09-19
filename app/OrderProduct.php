<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class OrderProduct extends Model
{
    public function delete() {
       parent::delete();

    }
    function price(){
      return number_format($this->price , 0 , '.' , '') . '$';
    }
    public function total() {
       return ($this->price * $this->qty ) . '$';
    }



}
