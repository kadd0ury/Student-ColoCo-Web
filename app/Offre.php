<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'user_id','type', 'prix','adresseX','adresseY','image','superficie','capacite',
        'commentaire','tele','dateOffre',
    ];

    public function user(){ 

        return $this->belongsTo(User::class); 

        }
        





}
