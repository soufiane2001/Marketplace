<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function chat()
        {
            return $this->hasMany('App\Models\Chat');
        }
    
        public function photo()
        {
            return $this->hasMany('App\Models\Photo');
        }
}
