<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function courses() {
        return $this->belongsToMany(Course::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}