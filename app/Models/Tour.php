<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{

  protected $table = 'tours';

  protected $fillable = [
    'user_id', 'title', 'slug', 'author', 'category', 'images', 'post_status', 'duration', 'start_period', 'end_period', 'price', 'itinerary', 'terms_conditions'
  ];

}
