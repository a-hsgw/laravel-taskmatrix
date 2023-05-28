<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importance extends Model
{
    use HasFactory;

    public function task() {
        return $this->hasMany(Task::class);
    }

    public function urgency() {
        return $this->belongsTo(Urgency::class);
    }
}
