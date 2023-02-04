<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameo','emailo','countryo','names','emails','countrys',
        'namet','emailt','countryt'
    ];
    public function article()
    {
        return $this->hasMany(article::class);
    }
}
