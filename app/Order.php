<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{
    public function delete() {
       parent::delete();

    }

    public function orderProduct()
    {
       return $this->hasMany(OrderProduct::class);
    }
    public function status()
    {
      switch($this->statuses){
          case '1' : return 'Pending';
          case '2' : return 'Cancelled';
          case '3' : return 'Complete';

      }
    }

}
