<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'tblsatker';
    protected $fillable = ['kdsatker', 'nmsatker', 'balai_id'];



    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }


    public function paket()
    {
        return $this->hasMany(Paket::class);
    }

    // public function jumlah()
    // {
    //     foreach($this->paket as $paket){
    //         $total = $total + $mapel->
    //     }
    // }
}
