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
use App\Models\Conversation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\Category;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $listings = Listing::where('user_id', $request->user()->id)->take(3)->get();
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('auth.profile', [
            'user' => $request->user(),
            'listings' => $listings,
            'mainCategories' => $mainCategories
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

        $user = User::findOrFail($id);
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('profile.show', compact('user', 'mainCategories'));
    }

    public function chat(Request $request)
    {
        $userConversations = Conversation::where('user_one_id', $request->user()->id)
            ->orWhere('user_two_id', $request->user()->id)
            ->get();

        $lastConvo = Conversation::where('user_one_id', $request->user()->id)
            ->orWhere('user_two_id', $request->user()->id)
            ->orderBy('updated_at', 'desc')
            ->first();

        $openChat = $request->get('chat_id');
        if ($openChat) {
            $openChatInfo = Conversation::find($openChat);
        } else {
            $openChatInfo = null;
        }

        $mainCategories = Category::where('parent_id', 0)->get();

        return view('chat', [
            'chats' => $userConversations,
            'lastConvo' => $lastConvo,
            'openChat' => $openChatInfo,
            'mainCategories' => $mainCategories
        ]);
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
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('auth.settings', compact('mainCategories'));
    }
    public function yardim(Request $request) {
        $mainCategories = Category::where('parent_id', 0)->get();
        return view('yardim', compact('mainCategories'));
    }

    public function favorites(Request $request) {
        $user = $request->user();
        $favorites = Favorite::where('user_id', $user->id)->get();
        $mainCategories = Category::where('parent_id', 0)->get();
        $f = [];
        foreach ($favorites as $favorite) {
            $f[] = Listing::find($favorite->listing_id);
        }

        return view('auth.favorites', [
            'listings' => $f,
            'user' => $user,
            'mainCategories' => $mainCategories
        ]);
    }
    public function updateName(Request $request)
{
    $user = $request->user();

    // İsim validasyonu
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    try {
        // Yeni ismi kullanıcıya ata
        $user->name = $request->input('name');
        $user->save(); // Veritabanına kaydet

        // Başarı durumu döndür
        return response()->json([
            'success' => true,
            'message' => 'İsim başarıyla güncellendi',
        ]);

    } catch (\Exception $e) {
        // Hata durumunda hata mesajı döndür
        return response()->json([
            'success' => false,
            'message' => 'Bir hata oluştu: ' . $e->getMessage(),
        ], 500);  // 500 sunucu hatası
    }
}
public function logoutFromAllDevices()
{

        $user = Auth::user(); // Oturum açmış kullanıcıyı al

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı bulunamadı.',
            ], 404); // Kullanıcı bulunamazsa hata döndür
        }

        try {
            // Tüm oturumları silmek için kullanıcının oturum anahtarlarını al
            DB::table('sessions')
                ->where('user_id', $user->id)
                ->delete();

            // Aktif oturumdan çıkış yap
            Auth::logout();

            // Başarı mesajı döndür
            return response()->json([
                'success' => true,
                'message' => 'Tüm cihazlardan başarıyla çıkış yaptınız.',
            ], 200);

        } catch (\Exception $e) {
            // Hata durumunda mesaj döndür
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu: ' . $e->getMessage(),
            ], 500);
        }
}


    public function updateEmail(Request $request)
{
    $user = $request->user();

    // İsim validasyonu
    $request->validate([
        'email' => 'required|string|max:255',
    ]);

    try {
        // Yeni ismi kullanıcıya ata
        $user->email = $request->input('email');
        $user->save(); // Veritabanına kaydet

        // Başarı durumu döndür
        return response()->json([
            'success' => true,
            'message' => 'İsim başarıyla güncellendi',
        ]);

    } catch (\Exception $e) {
        // Hata durumunda hata mesajı döndür
        return response()->json([
            'success' => false,
            'message' => 'Bir hata oluştu: ' . $e->getMessage(),
        ], 500);  // 500 sunucu hatası
    }
}
}
