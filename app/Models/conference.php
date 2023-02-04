<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id','title','theme','subtheme','lieu','link','date','time','descreption','image','slug',
        'd_reception','f_reception','d_reviewing','f_reviewing','d_results','f_results'
    ];
    
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    
    public function caumunite(){
        return $this->hasOne('App\Models\Caumunite');
    }   
    
}
