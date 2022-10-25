<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    function getGroup(){
        return $this->hasOne('App\Models\Group','group_id');
    }
}
