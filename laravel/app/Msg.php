<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    //表名
  /*  protected $table = '';
    //主键名
    protected $primaryKey = '';*/
    //去除时间戳
    public $timestamps = false;

}
