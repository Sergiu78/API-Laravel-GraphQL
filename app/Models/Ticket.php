<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function event()
    {
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}
