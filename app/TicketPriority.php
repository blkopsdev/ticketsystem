<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketPriority extends Model
{
    public $timestamps = true;
    
    protected $fillable = [
        'user_id',
        'name'
    ];
}
