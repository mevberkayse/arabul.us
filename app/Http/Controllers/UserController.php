<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function showProfile(Request $request, $id = null) {
        if($id == null) {
            $id = Auth::id();
        }

        $user = User::findOrFail($id);
        if(!$user) {
            return redirect('/');
        }
        $listings = Listing::where('user_id', $user->id)->take(3)->get();

        return view('auth.profile', ['user' => $user, 'listings' => $listings]);
    }
}
