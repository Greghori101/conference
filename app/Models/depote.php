<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depote extends Model
{
    use HasFactory;
    protected $fillable = [
        'conference_id',
    ];

    public function conference(){
        return $this->belongsTo('App\Models\Conference','conference_id');
    }
    public function Article(){
        return $this->belongsToMany('App\Models\Article');
    }
}
