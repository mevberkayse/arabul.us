<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conversation;

class ConversationController extends Controller
{
    public function getMessages($conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);
        $messages = $conversation->messages()->orderBy('created_at')->get();

        return response()->json([
            'messages' => $messages->map(function ($message) {
                return [
                    'sender_id' => $message->sender_id,
                    'recipient_id' => $message->recipient_id,
                    'content' => $message->message,
                ];
            })
        ]);
    }

    public function getListing($conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        return response()->json([
            'id' => $conversation->listing->id,
            'title' => $conversation->listing->title,
            'price' => $conversation->listing->price,
        ]);
    }

    public function saveMessage(Request $request, $conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        $message = $conversation->messages()->create([
            'sender_id' => $request->user()->id,
            'recipient_id' => $conversation->userOne->id === $request->user()->id ? $conversation->userTwo->id : $conversation->userOne->id,
            'message' => $request->input('content'),
            'conversation_id' => $conversation->id,
        ]);

        return response()->json([
            'message' => [
                'sender_id' => $message->sender_id,
                'recipient_id' => $message->recipient_id,
                'content' => $message->message,
            ]
        ]);
    }

    public function deleteConversation(Request $request, $conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        if ($conversation->userOne->id !== $request->user()->id && $conversation->userTwo->id !== $request->user()->id) {
            return response()->json(['error' => 'You are not part of this conversation.'], 403);
        }

        $conversation->delete();

        return response()->json(['message' => 'Conversation deleted.']);
    }

    public function createConversation(Request $request)
    {
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
        ]);

        // Check if conversation already exists between these two users and listing
        $existingConversation = Conversation::where('user_one_id', $request->user()->id)
            ->where('user_two_id', $request->input('recipient_id'))
            ->where('listing_id', $request->input('listing_id'))
            ->first();

        if ($existingConversation) {
            return response()->json([
                'status' => 'ok',
                'conversation' => [
                    'id' => $existingConversation->id,
                    'user_one_id' => $existingConversation->user_one_id,
                    'user_two_id' => $existingConversation->user_two_id,
                ]
            ]);
        }


        $conversation = Conversation::create([
            'user_one_id' => $request->user()->id,
            'user_two_id' => $request->input('recipient_id'),
            'listing_id' => $request->input('listing_id'),
        ]);

        return response()->json([
            'status' => 'ok',
            'conversation' => [
                'id' => $conversation->id,
                'user_one_id' => $conversation->user_one_id,
                'user_two_id' => $conversation->user_two_id,
            ]
        ]);
    }
}
