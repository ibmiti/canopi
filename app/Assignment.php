<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
  // procedurally creating a method to complete a assignment on call
    public function complete()
    {
      $this->completed = true;
      $this->save();
    }
}
