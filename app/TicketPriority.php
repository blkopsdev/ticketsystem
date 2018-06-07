<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPriority extends Model
{
    protected $fillable = [
        'user_id',
        'name'
    ];
}
