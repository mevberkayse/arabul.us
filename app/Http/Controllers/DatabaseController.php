<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function ekle()
    {
        DB::table("chatboxes")->insert([
            "message_text" => "Deneme metin"
        ]);
    }

    public function gunncelle()
    {
        DB::table("chatboxes")->update([
            "message_text" => "Deneme metin güncelleme"
        ]);
    }
}
