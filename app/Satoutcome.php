<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satoutcome extends Model
{
    protected $table = 'tblsatoutcome';

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}
