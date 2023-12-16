<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id', 'idAnnonceur', 'user_id','Msgpar','Message'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
