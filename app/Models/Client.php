<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function estudios(){ 
        return $this->hasMany('App\Models\Credit','client_id','id');
    }
}
