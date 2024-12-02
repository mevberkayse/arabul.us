<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['user_one_id', 'user_two_id', 'listing_id'];

    // Relationship with User (User 1)
    public function userOne()
    {
        return $this->belongsTo(User::class, 'user_one_id');
    }

    // Relationship with User (User 2)
    public function userTwo()
    {
        return $this->belongsTo(User::class, 'user_two_id');
    }

    // Relationship with Listing
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    // Relationship with Messages
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // get recipient for given user
    public function recipient()
    {
        return $this->userOne->id === auth()->id() ? $this->userTwo : $this->userOne;
    }

    // get last message, if none, return empty string
    public function lastMessage()
    {
        return $this->messages->last() ? $this->messages->last()->message : '';
    }
}
