<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'organizacion',
  ];

}