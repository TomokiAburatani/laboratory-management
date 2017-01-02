<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'computers';
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['com_id', 'com_os', 'com_mac_address', 'use_frag', 'updated_at'];
  
}
