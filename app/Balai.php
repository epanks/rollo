<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balai extends Model
{
    protected $table = 'tblbalai';
    protected $fillable = ['nmsatker'];


    public function satker()
    {
        return $this->hasMany(Satker::class);
    }
}
