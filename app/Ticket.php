<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable =[
        'title', 'message', 'user_id', 'order_id',
        'status', 'ticket_type_id',
    ];

    public function ticketType(){
        return $this->belongsTo(TicketType::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
