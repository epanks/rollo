<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paketexcel extends Model
{
    protected $table = 'tbl_name';
    protected $fillable = ['nmsatker'];

    // public function satker()
    // {
    //     return $this->hasMany(Satker::class);
    // }

    // public function paket()
    // {
    //     return $this->hasManyThrough(Paket::class, Satker::class);
    // }
}
