<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nombre','id_organizacion'
  ];

  protected $dates = [
       'fecha_commit',
       'created_at',
       'updated_at',
   ];
}
