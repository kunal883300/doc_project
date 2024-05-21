<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionType extends Model
{
    use HasFactory;
    public function  scheduledSessions(){
        return $this->hasMany(ScheduledSession::class);
    }
}
