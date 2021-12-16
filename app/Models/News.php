<?php

namespace App\Models;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'description',
    ];


    public function Users(){

        return $this->hasOne(users::class,'id','user_id');
    }
}
