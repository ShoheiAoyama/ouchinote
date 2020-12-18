<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ouchi extends Model
{
    protected $table = 'ouchis';

    /**
     * 住宅情報を所有するユーザを取得
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
