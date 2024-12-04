<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['conversation_id', 'sender_id', 'recipient_id', 'message'];

    // Relationship with Conversation
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    // Relationship with Sender (User)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relationship with Recipient (User)
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
