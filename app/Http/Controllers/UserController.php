<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

public function changePassword(Request $request)
{
    // Geçerli şifre ve yeni şifreyi doğrulama
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|confirmed|min:8',
    ]);

    // Auth::user() ile oturum açmış kullanıcıyı alıyoruz
    $user = Auth::user();

    // Eğer kullanıcı oturum açmamışsa, hata döndürüyoruz
    if (!$user) {
        return response()->json(['message' => 'Kullanıcı oturumu açmamış.'], 401);  // 401 Unauthorized
    }
    // if user's google_id is not null, then user is a social login user,and they don't know the current password. So, we return an error message.
    if ($user->google_id != null) {
        return response()->json(['message' => 'Google ile giriş yapan kullanıcılar şifre değiştiremez.'], 401);  // 401 Unauthorized
    }
    // Mevcut şifreyi kontrol etme
    if (!Hash::check($request->input('current-password'), $user->password)) {
        return response()->json(['message' => 'Mevcut şifre yanlış'], 422);  // 422 Unprocessable Entity
    }

    // Yeni şifreyi veritabanına kaydetmek için DB Query Builder kullanma
    DB::table('users')
        ->where('id', $user->id)
        ->update(['password' => Hash::make($request->input('new-password'))]);

    // Başarı mesajı döndürme
    return response()->json(['message' => 'Şifre başarıyla güncellendi']);
}

}
