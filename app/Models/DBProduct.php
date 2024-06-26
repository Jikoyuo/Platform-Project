<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBProduct extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(DBCategory::class);
    }

    protected $guarded = [
        'id'
    ];
}
