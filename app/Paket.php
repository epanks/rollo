<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'tblpaket1';
    protected $fillable = [
        'kdsatker', 'kdpaket', 'kdspaket', 'nmpaket', 'pagurmp', 'rencana_keu', 'rencana_fisik', 'progres_keu', 'progres_fisik', 'ta', 'tblsatker_id'
    ];

    public function satker()
    {
        return $this->belongsTo('Satker', 'kdsatker', 'kdsatker');
    }
}
