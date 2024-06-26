<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduledSession extends Model
{
    use HasFactory;

    protected $guarded = null;

    protected $casts =[
        'date_time' => 'datetime',
    ];
    public function  doc(){
        return $this->belongsTo(User::class, 'doc_id');
    }
    public function  sessionType(){
        return $this->belongsTo(sessionType::class);
    }
}
