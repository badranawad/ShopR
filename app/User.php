<?php
namespace App;
use Illuminate\Foundation\Auth\User as Autheneticatable;

class User extends Autheneticatable
{

  public function delete() {
     parent::delete();

  }

}
