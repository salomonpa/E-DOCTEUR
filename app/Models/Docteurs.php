<?php

namespace App\Models;
use App\Models\Rendezvous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docteurs extends Model
{

    protected $guarded = [

    ];
    use HasFactory;

    function rendezvous(){
        return $this->hasOne(Rendezvous::class);
    }
}
