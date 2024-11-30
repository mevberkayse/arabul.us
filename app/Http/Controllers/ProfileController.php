<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Favorite;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $listings = Listing::where('user_id', $request->user()->id)->take(3)->get();
        return view('auth.profile', [
            'user' => $request->user(),
            'listings' => $listings,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function show(Request $request, $id = null)
    {
        if ($id = null) {
            $id = Auth::id();
        }

        $user = User::findOrFail($id); // Kullanıcıyı ID ile bul
        return view('profile.show', compact('user')); // Veriyi profile.show blade dosyasına gönder
    }

    public function chat(Request $request)
    {
        return view('chat');
    }

    public function editprofile(Request $request)
    {
        return view('auth.profile_edit');
    }
    public function updatePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = $request->user();

        // Eski resmi sil (Varsayılan resim değilse)
        $profilePicturePath = public_path('image/' . $user->profile_picture);
        if (file_exists($profilePicturePath) && $user->profile_picture !== config('auth.default_profile_picture_path')) {
            unlink($profilePicturePath);
        }

        // Yeni resmi kaydet
        $imageName = time() . '.' . $request->profile_picture->extension();
        $destinationPath = public_path('image');
        $request->profile_picture->move($destinationPath, $imageName);

        // Kullanıcı profilini güncelle
        $user->profile_picture = '/image/' . $imageName;
        $user->save();

        return Redirect::route('profile.edit')->with('success', 'Profil resmi başarıyla güncellendi!');
    }

    public function deletePicture(Request $request) {
        $user = $request->user();

        // Varsayılan resmi kullan
        $user->profile_picture = config('auth.default_profile_picture_path');
        $user->save();

        return Redirect::route('profile.edit')->with('success', 'Profil resmi başarıyla silindi');
    }

    public function settings(Request $request) {

        return view('auth.settings');
    }
    public function yardim(Request $request) {

        return view('yardim');
    }

    public function favorites(Request $request) {
        $user = $request->user();
        $favorites = Favorite::where('user_id', $user->id)->get();
        $f = [];
        foreach ($favorites as $favorite) {
            $f[] = Listing::find($favorite->listing_id);
         }

        return view('auth.favorites', ['listings' => $f, 'user' => $user]);

    }
    public function updateUsername(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        DB::table('users')
            ->where('id', Auth::id())
            ->update(['name' => $request->username]);

        return response()->json(['message' => 'Username updated successfully!'], 200);
    }
public function logoutFromAllDevices()
    {
        // Giriş yapan kullanıcının oturumunu alın
        $user = Auth::user();

        // Kullanıcıya ait oturumları sil (session tablosunu kullanarak)
        Session::where('user_id', $user->id)->delete();

        // Mevcut oturumu da kapat
        Auth::logout();

        // Yanıt döndür
        return response()->json(['message' => 'Tüm cihazlardan çıkış yapıldı.'], 200);
    }

}