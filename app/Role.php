<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'rolename',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
