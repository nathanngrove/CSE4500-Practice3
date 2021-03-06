<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;
    protected $fillable = ['title','start_at', 'end_at'];
    protected $table = 'calendar_events';
}
