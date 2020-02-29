<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class designs extends Model
{
    protected $fillable = [
        'judul','isimateri','value',
    ];
    public function kelas()
    {
        return $this->hasMany('App\kelas');
    }
}
