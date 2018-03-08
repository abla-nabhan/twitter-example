<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;

class Comment extends Model
{
  public function tweet()
  {
    return $this->belongsTo(Tweet::class);
  }
}
