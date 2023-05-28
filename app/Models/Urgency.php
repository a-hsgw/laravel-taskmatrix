<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgency extends Model
{
    use HasFactory;

    public function task() {
        return $this->hasMany(Task::class);
    }

    public function importance() {
        return $this->belongsTo(Importance::class);
    }

}
