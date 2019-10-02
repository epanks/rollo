<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'tblsatker';
    protected $fillable = ['kdsatker'];


    public function paket()
    {
        return $this->hasMany(Paket::class);
    }

    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }
}
