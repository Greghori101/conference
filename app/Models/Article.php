<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_id','title','subtheme','descreption','file'
    ];
    public function authore(){
        return $this->belongsTo('App\Models\Authore','author_id');
    }
    public function depote(){
        return $this->belongsToMany('App\Models\depote');
    }
}
