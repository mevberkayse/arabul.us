<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;


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
}
