<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Case_Model extends Model
{
  protected $table = 'cases';

    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
    public function cast()
    {
      return $this->belongsTo('App\Models\Cast');
    }
}