<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    protected $fillable = [
        'user_id',
        'name'
    ];
}
