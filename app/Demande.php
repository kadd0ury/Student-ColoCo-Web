<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{


    protected $fillable = [
        'user_id','type', 'prixmax','adresse','description','dateOffre','tele',
    ];


    public function user(){

        return $this->belongsTo(User::class); 

        }
}
